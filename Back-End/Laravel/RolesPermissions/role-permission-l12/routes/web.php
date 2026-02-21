<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    // return view('admin.login');
});

Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/security', fn() => view('admin.pages.settings.security'))->name('profile.security');

    Route::resource('/gt-users', UserController::class)->middleware('permission:gt-users.view|gt-users.create|gt-users.edit|gt-users.delete');
    Route::resource('/roles', RolesController::class)->middleware('permission:role.view|role.create|role.edit|role.delete');
});

// Route::get('/gt-dashboard', fn() => view('admin.pages.dashboard'))->name('dashboard');

require __DIR__ . '/auth.php';
