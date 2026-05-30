<?php

namespace App\Http\Controllers;

use App\Services\PhonePeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PhonePeController extends Controller
{
    public function __construct(protected PhonePeService $phonePe) {}

    /**
     * Show the payment form.
     */
    public function index()
    {
        return view('phonePe.index');
    }


    /**
     * Initiate the payment after form submission.
     */
    public function initiate(Request $request)
    {
        $validated = $request->validate([
            'amount'  => 'required|numeric|min:1',
            'cname'   => 'required|string|max:100',
            'email'   => 'required|email|max:150',
            'phone'   => 'required|digits:10',
            'purpose' => 'required|string',
            'note'    => 'nullable|string|max:500',
        ]);

        // Create unique transaction ID
        $merchantTransactionId = 'TXN' . strtoupper(Str::random(12)) . time();

        // // Store payment record
        // $payment = Payment::create([
        //     'transaction_id'        => Str::uuid(),
        //     'merchant_transaction_id' => $merchantTransactionId,
        //     'customer_name'         => $validated['cname'],
        //     'email'                 => $validated['email'],
        //     'phone'                 => $validated['phone'],
        //     'purpose'               => $validated['purpose'],
        //     'note'                  => $validated['note'] ?? null,
        //     'amount'                => $validated['amount'],
        //     'status'                => 'PENDING',
        // ]);

        // Call PhonePe service
        $result = $this->phonePe->initiatePayment([
            'merchant_transaction_id' => $merchantTransactionId,
            'amount'                  => $validated['amount'],
            'phone'                   => $validated['phone'],
        ]);

        if ($result['success']) {
            return redirect()->away($result['redirect_url']);
        }

        return back()
            ->withInput()
            ->with('error', $result['message'] ?? 'Payment initiation failed. Please try again.');
    }


    /**
     * Handle redirect callback from PhonePe.
     */
    public function callback(Request $request)
    {
        // New API sends merchantOrderId
        $merchantTransactionId = $request->input('merchantOrderId')
            ?? $request->input('transactionId')
            ?? $request->input('merchantTransactionId');

        if (!$merchantTransactionId) {
            return redirect()->route('payment.failed')
                ->with('error', 'Invalid payment response.');
        }

        $response = $this->phonePe->verifyPayment($merchantTransactionId);

        // New API: state is at root level or data.state
        $status = $response['state']
            ?? $response['data']['state']
            ?? 'FAILED';

        // $payment = Payment::where('merchant_transaction_id', $merchantTransactionId)->first();

        // if ($payment) {
        //     $payment->update([
        //         'status'           => $status,
        //         'phonepe_response' => $response,
        //     ]);
        // }

        // New API uses 'COMPLETED', old used 'SUCCESS'
        if (in_array($status, ['COMPLETED', 'SUCCESS'])) {
            // return redirect()->route('payment.success')->with('payment', $payment);
            return redirect()->route('payment.success')->with('success', 'Payment Successful!');
        }

        return redirect()->route('payment.failed')
            ->with('error', 'Payment ' . strtolower($status) . '.');
    }

    /**
     * Handle server-to-server webhook from PhonePe.
     */
    public function webhook(Request $request)
    {
        $rawBody = $request->getContent();
        $payload = json_decode($rawBody, true);

        Log::info('PhonePe Webhook', $payload ?? []);

        // $merchantTransactionId = $payload['merchantOrderId']
        //     ?? $payload['data']['merchantOrderId']
        //     ?? null;

        // $status = $payload['state']
        //     ?? $payload['data']['state']
        //     ?? 'FAILED';

        // if ($merchantTransactionId) {
        //     Payment::where('merchant_transaction_id', $merchantTransactionId)
        //         ->update([
        //             'status'           => $status,
        //             'phonepe_response' => $payload,
        //         ]);
        // }

        return response()->json(['message' => 'OK'], 200);
    }

    public function success()
    {
        return view('phonePe.success');
    }

    public function failed()
    {
        return view('phonePe.failed');
    }
}
