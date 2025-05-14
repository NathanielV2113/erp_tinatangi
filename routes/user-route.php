<?php

use App\Http\Controllers\CrmController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'isUser'])->group(function () {
    // Route::get('tinatangi/reservation', [CrmController::class, 'reserve'])->name('tinatangi.reservation');
    Route::get('tinatangi/feedback', [CrmController::class, 'feedback'])->name('tinatangi.feedback');
    Route::get('tinatangi/menu-auth', [CrmController::class, 'menu'])->name('tinatangi.menu.auth');
    Route::get('tinatangi/location-auth', [CrmController::class, 'location'])->name('tinatangi.location.auth');
    Route::get('tinatangi/faq-auth', [CrmController::class, 'faq'])->name('tinatangi.faq.auth');
});
