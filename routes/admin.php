<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

Route::get('/signin', [AuthController::class, 'signinForm'])->name('admin.signin');
Route::post('/signin', [AuthController::class, 'signinPost'])->name('admin.signinPost');

Route::middleware(['admin'])