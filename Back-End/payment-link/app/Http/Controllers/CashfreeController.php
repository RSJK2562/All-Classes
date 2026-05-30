<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cashfree\Cashfree;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CashfreeController extends Controller
{
    public function index()
    {
        return view('cashfree.index');
    }

    // public function createOrder(Request $request)
    // {
    //     $request->validate([
    //         'amount' => 'required|numeric|min:1',
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'phone' => 'required'
    //     ]);

    //     $cashfree = new Cashfree(
    //         config('cashfree.app_id'),
    //         config('cashfree.secret_key'),
    //         config('cashfree.env') === 'production' ? 'PRODUCTION' : 'SANDBOX',
    //         '', // api version (keep empty)
    //         '', // partner id (optional)
    //         '', // partner secret
    //         ''  // partner merchant id
    //     );

    //     $orderId = 'order_' . uniqid();

    //     $response = $cashfree->PGCreateOrder([
    //         "order_id" => $orderId,
    //         "order_amount" => $request->amount,
    //         "order_currency" => "INR",
    //         "customer_details" => [
    //             "customer_id" => uniqid(),
    //             "customer_name" => $request->name,
    //             "customer_email" => $request->email,
    //             "customer_phone" => $request->phone,
    //         ],
    //         "order_meta" => [
    //             "return_url" => url('/cashfree-success?order_id={order_id}')
    //         ]
    //     ]);

    //     return response()->json($response);
    // }


    public function createOrder(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        try {
            $baseUrl = config('cashfree.env') === 'production'
                ? 'https://api.cashfree.com/pg/orders'
                : 'https://sandbox.cashfree.com/pg/orders';

            $orderId = 'order_' . uniqid();

            $response = Http::withHeaders([
                'x-client-id' => config('cashfree.app_id'),
                'x-client-secret' => config('cashfree.secret_key'),
                'x-api-version' => '2023-08-01',
                'Content-Type' => 'application/json',
            ])->post($baseUrl, [
                "order_id" => $orderId,
                "order_amount" => (float)$request->amount,
                "order_currency" => "INR",
                "customer_details" => [
                    "customer_id" => uniqid(),
                    "customer_name" => $request->name,
                    "customer_email" => $request->email,
                    "customer_phone" => $request->phone,
                ],
                "order_meta" => [
                    "return_url" => url('/cashfree-success?order_id={order_id}')
                ]
            ]);

            $data = $response->json();

            if ($response->failed()) {
                Log::error('Cashfree Error:', $data);

                return response()->json([
                    'status' => false,
                    'error' => $data
                ], 400);
            }

            return response()->json([
                'payment_session_id' => $data['payment_session_id'] ?? null
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            return response()->json([
                'status' => false,
                'message' => 'Server error'
            ], 500);
        }
    }

    public function success(Request $request)
    {
        return view('cashfree.payment-success', [
            'order_id' => $request->order_id
        ]);
    }
}
