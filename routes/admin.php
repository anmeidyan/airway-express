<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;

Route::middleware('throttle:5,1')->group(function () {
    Route::get('/login', [AuthController::class, 'loginForm'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('admin.loginPost');
    Route::get('/register', [AuthController::class, 'registerForm'])->name('admin.register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('admin.registerPost');
});

Route::middleware(['admin'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});