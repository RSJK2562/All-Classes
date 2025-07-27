<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('web.index');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';

// WEB
Route::any('/', [WebController::class, 'index']);
Route::any('/shop', [WebController::class, 'shop'])->name('web.shop');
Route::any('/product-details', [WebController::class, 'productDetails'])->name('web.product-details');
// Route::any('/cart', [WebController::class, 'cart'])->name('web.cart');
Route::any('/checkout', [WebController::class, 'checkout'])->name('web.checkout');
Route::any('/testimonial', [WebController::class, 'testimonial'])->name('web.testimonial');
Route::any('/contact', [WebController::class, 'contact'])->name('web.contact');

// Admin_Panel
Route::get('/apnaghar', function () {
    return view('admin.index');
})->name('apnaghar');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::any('/userlist', [AdminController::class, 'userlist'])->name('admin.userlist');

    Route::prefix('products')->group(function () {
        Route::any('list', [ProductController::class, 'index'])->name('amdin.product.list');
        Route::any('create', [ProductController::class, 'create'])->name('admin.product.create');
        Route::post('store', [ProductController::class, 'stora'])->name('product.store');
    });


    // add and update to cart
    Route::any('/add/cart', [WebController::class, 'addToCart'])->name('add.cart');
    // show cart list
    Route::any('/cart', [WebController::class, 'cart'])->name('web.cart');
    // remover to card
    Route::any('/remover/cart', [WebController::class, 'removerCart'])->name('remove.cart');
});
