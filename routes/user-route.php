<?php

use App\Http\Controllers\CrmController;
use Illuminate\Support\Facades\Route;

Route::middleware(['isUser'])->group(function () {
    Route::get('tinatangi/home', [CrmController::class, 'homepage'])->name('tinatangi.home');
    Route::get('tinatangi/menu', [CrmController::class, 'menu'])->name('tinatangi.menu');
    Route::get('tinatangi/reservation', [CrmController::class, 'reserve'])->name('tinatangi.reservation');
    Route::get('tinatangi/location', [CrmController::class, 'location'])->name('tinatangi.location');
    Route::get('tinatangi/feedback', [CrmController::class, 'feedback'])->name('tinatangi.feedback');
    Route::get('tinatangi/faq', [CrmController::class, 'faq'])->name('tinatangi.faq');
});