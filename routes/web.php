<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer;
use App\Http\Controllers\WorkerloginController;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\WorkerDashboardController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Customer Routes
Route::get('/login', [Customer::class, 'index']);
Route::post('/login', [Customer::class, 'view']);

// Worker Routes
Route::get('/worker/login', [WorkerloginController::class, 'index']);
Route::post('/send-otp', [WorkerloginController::class, 'sendOtp'])->name('send.otp');
Route::post('/register-worker', [WorkerloginController::class, 'register'])->name('worker.register');
Route::post('/worker-login', [WorkerloginController::class, 'login'])->name('worker.login');
Route::get('/dashboard', [WorkerDashboardController::class, 'index'])->name('dasvbcvhboard');
Route::get('/logout', [WorkerloginController::class, 'logout']);

// Test Email Route
Route::get('test-email', function () {
    Mail::raw('This is a test email', function ($message) {
        $message->to('jaydeeprajtech@gmail.com')
                ->subject('Test Email');
    });

    return 'Test email sent';
});


