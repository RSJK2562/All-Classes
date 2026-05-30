<?php

return [
    'merchant_id'     => env('PHONEPE_MERCHANT_ID'),        // M23QNM3XBSO7J
    'client_id'       => env('PHONEPE_CLIENT_ID'),          // M23QNM3XBSO7J_2604230032
    'client_secret'   => env('PHONEPE_CLIENT_SECRET'),
    'client_version'  => env('PHONEPE_CLIENT_VERSION', 1),
    'env'             => env('PHONEPE_ENV', 'sandbox'),

    'base_url' => env('PHONEPE_ENV') === 'production'
        ? 'https://api.phonepe.com/apis/pg'
        : 'https://api-preprod.phonepe.com/apis/pg-sandbox',
];
