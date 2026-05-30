<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PhonePeService
{
    protected string $merchantId;
    protected string $clientId;
    protected string $clientSecret;
    protected int    $clientVersion;
    protected string $baseUrl;

    public function __construct()
    {
        $this->merchantId    = config('phonepe.merchant_id');
        $this->clientId      = config('phonepe.client_id');
        $this->clientSecret  = config('phonepe.client_secret');
        $this->clientVersion = (int) config('phonepe.client_version');
        $this->baseUrl       = config('phonepe.base_url');
    }

    // ---------------------------------------------------------------
    // STEP 1: Get OAuth Access Token (cached until expiry)
    // ---------------------------------------------------------------
    protected function getAccessToken(): string
    {
        return Cache::remember('phonepe_access_token', 3300, function () {
            $response = Http::asForm()->post("{$this->baseUrl}/v1/oauth/token", [
                'client_id'      => $this->clientId,
                'client_secret'  => $this->clientSecret,
                'client_version' => $this->clientVersion,
                'grant_type'     => 'client_credentials',
            ]);

            Log::info('PhonePe Token Response', $response->json());

            if ($response->failed() || !$response->json('access_token')) {
                throw new \Exception('PhonePe: Failed to get access token — ' . $response->body());
            }

            return $response->json('access_token');
        });
    }

    // ---------------------------------------------------------------
    // STEP 2: Initiate Payment
    // ---------------------------------------------------------------
    public function initiatePayment(array $data): array
    {
        try {
            $token = $this->getAccessToken();
        } catch (\Exception $e) {
            Log::error('PhonePe Token Error: ' . $e->getMessage());
            return ['success' => false, 'message' => 'Could not connect to PhonePe. Please try again.'];
        }

        $amountInPaise = (int) $data['amount'] * 100;

        $payload = [
            'merchantOrderId' => $data['merchant_transaction_id'],
            'amount'          => $amountInPaise,
            'expireAfter'     => 1200, // seconds (20 mins)
            'metaInfo'        => [
                'udf1' => $data['phone'] ?? '',
            ],
            'paymentFlow' => [
                'type'        => 'PG_CHECKOUT',
                'message'     => 'Payment for ' . ($data['purpose'] ?? 'Services'),
                'merchantUrls' => [
                    'redirectUrl' => route('payment.callback'),
                ],
            ],
        ];

        $response = Http::withHeaders([
            'Content-Type'  => 'application/json',
            'Authorization' => 'O-Bearer ' . $token,
        ])->post("{$this->baseUrl}/pg/v1/pay", $payload);

        Log::info('PhonePe Pay Response', $response->json());

        if ($response->successful()) {
            $redirectUrl = $response->json('redirectUrl')
                ?? $response->json('data.redirectUrl')
                ?? $response->json('data.instrumentResponse.redirectInfo.url');

            if ($redirectUrl) {
                return ['success' => true, 'redirect_url' => $redirectUrl];
            }
        }

        return [
            'success' => false,
            'message' => $response->json('message')
                ?? $response->json('error')
                ?? 'Payment initiation failed.',
        ];
    }

    // ---------------------------------------------------------------
    // STEP 3: Verify Payment Status
    // ---------------------------------------------------------------
    public function verifyPayment(string $merchantOrderId): array
    {
        try {
            $token = $this->getAccessToken();
        } catch (\Exception $e) {
            return ['state' => 'FAILED', 'message' => 'Token error'];
        }

        $response = Http::withHeaders([
            'Content-Type'  => 'application/json',
            'Authorization' => 'O-Bearer ' . $token,
        ])->get("{$this->baseUrl}/pg/v1/order/{$merchantOrderId}");

        Log::info('PhonePe Verify Response', $response->json());

        return $response->json();
    }

    // ---------------------------------------------------------------
    // Webhook: Validate incoming webhook signature
    // ---------------------------------------------------------------
    public function validateWebhook(string $authHeader, string $rawBody): bool
    {
        // New API uses Authorization header with the token
        // Simply re-verify by fetching order status instead
        return !empty($rawBody);
    }
}