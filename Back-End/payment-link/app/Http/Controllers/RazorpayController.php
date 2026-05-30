<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;

class RazorpayController extends Controller
{
    public function index()
    {
        return view('razorpay.index');
    }

    public function createOrder(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        $api = new Api(config('razorpay.key'), config('razorpay.secret'));

        $order = $api->order->create([
            'receipt' => 'order_' . uniqid(),
            'amount' => $request->amount * 100, // paise
            'currency' => 'INR',
        ]);

        return response()->json([
            'order_id' => $order['id'],
            'amount' => $order['amount'],
        ]);
    }

    public function verifyPayment(Request $request)
    {
        $api = new Api(config('razorpay.key'), config('razorpay.secret'));

        try {
            $attributes = [
                'razorpay_order_id' => $request->order_id,
                'razorpay_payment_id' => $request->payment_id,
                'razorpay_signature' => $request->signature,
            ];

            $api->utility->verifyPaymentSignature($attributes);

            // ✔️ Save payment to DB here

            return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'failed']);
        }
    }
}
