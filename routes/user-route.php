<?php

use App\Http\Controllers\CrmController;
use Illuminate\Support\Facades\Route;

Route::middleware(['isUser'])->group(function () {
    Route::get('tinatangi/reservation', [CrmController::class, 'reserve'])->name('tinatangi.reservation');
    Route::get('tinatangi/feedback', [CrmController::class, 'feedback'])->name('tinatangi.feedback');
});