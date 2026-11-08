<?php

use App\Http\Controllers\SecurityLoginController;
use App\Http\Controllers\SecurityDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/security-login', function () {
    return view('security-login');
})->middleware('guest')->name('login');

Route::post('/security-login', [SecurityLoginController::class, 'login'])
    ->middleware('guest');

Route::get('/security-dashboard', [SecurityDashboardController::class, 'index'])
    ->middleware(['auth', 'can:viewSecurityDashboard']);
