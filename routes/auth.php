<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use App\Livewire\Auth\Otp;
use App\Livewire\Auth\ConfirmPassword;
use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\ResetPassword;
use App\Livewire\Auth\VerifyEmail;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)->name('login');
    Route::get('register', Register::class)->name('register');
    Route::get('register/otp', Otp::class)->name('register.otp');
    Route::get('register/store', [Register::class, 'register'])->name('register.store');
    Route::get('forgot-password', ForgotPassword::class)->name('password.request');
    Route::get('reset-password/{token}', ResetPassword::class)->name('password.reset');
    Route::view('tinatangi/home', 'modules.crm.website.homepage')->name('tinatangi.home');
    Route::view('tinatangi/menu', 'modules.crm.website.menu')->name('tinatangi.menu');
    Route::view('tinatangi/reservation', 'modules.crm.website.reservation')->name('tinatangi.reservation');
    Route::view('tinatangi/location', 'modules.crm.website.location')->name('tinatangi.location');
    Route::view('tinatangi/feedback', 'modules.crm.website.feedback')->name('tinatangi.feedback');
    Route::view('tinatangi/faq', 'modules.crm.website.faq')->name('tinatangi.faq');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', VerifyEmail::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::get('confirm-password', ConfirmPassword::class)
        ->name('password.confirm');
});

Route::post('logout', App\Livewire\Actions\Logout::class)
    ->name('logout');
