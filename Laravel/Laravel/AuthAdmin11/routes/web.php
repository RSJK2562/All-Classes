<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
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

Route::get('/AdminPanel', [ResController::class, 'adminLogin'])->name('admin.login');

// admin-only routes
Route::prefix('admin')->middleware(['role:admin'])->group(function () {
    Route::get('/logout', [ResController::class, 'logout'])->name('admin.logout');
    Route::get('/dashboard', [ResController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/profile', [ResController::class, 'profile'])->name('admin.profile');
    Route::post('/profile/store', [ResController::class, 'profileStore'])->name('admin.profile.store');
    Route::get('/setting', [ResController::class, 'setting'])->name('admin.setting');
    Route::post('/updatePassword', [ResController::class, 'updatePassword'])->name('update.password');
});

// user-only routes
Route::prefix('user')->middleware(['role:user'])->group(function () {});
