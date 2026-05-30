<?php

use App\Http\Controllers\CashfreeController;
use App\Http\Controllers\PhonePeController;
use App\Http\Controllers\RazorpayController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

// Razorpay
Route::get('/pay/razorpay', [RazorpayController::class, 'index']);
Route::post('/create-order', [RazorpayController::class, 'createOrder']);
Route::post('/verify-payment', [RazorpayController::class, 'verifyPayment']);

// Cashfree
Route::get('/pay/cashfree', [CashfreeController::class, 'index']);
Route::post('/cashfree/create-order', [CashfreeController::class, 'createOrder']);
Route::get('/cashfree-success', [CashfreeController::class, 'success']);

// PhonePe
Route::get('/pay/phonepe', [PhonePeController::class, 'index']);
Route::post('/payment/initiate', [PhonePeController::class, 'initiate'])->name('payment.initiate');
Route::post('/payment/callback', [PhonePeController::class, 'callback'])->name('payment.callback');
Route::get('/payment/success', [PhonePeController::class, 'success'])->name('payment.success');
Route::get('/payment/failed', [PhonePeController::class, 'failed'])->name('payment.failed');

// Webhook — must be CSRF exempt
Route::post('/payment/webhook', [PhonePeController::class, 'webhook'])->name('payment.webhook');
