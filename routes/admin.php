<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/signin', [AuthController::class, 'signinForm'])->name('admin.signin');
Route::post('/signin', [AuthController::class, 'signinPost'])->name('admin.signinPost');

Route::middleware(['admin'])->group(function () {
    Route::post('/signout', [AuthController::class, 'signout'])->name('admin.signout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});