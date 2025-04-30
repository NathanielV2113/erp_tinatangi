<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrmController;

Route::middleware(['isFrm'])->group(function () {
    Route::get('/frm/accounting', [FrmController::class, 'accounting'])->name('frm.accounting');
    Route::get('/frm/treasury', [FrmController::class, 'treasury'])->name('frm.treasury');
    Route::get('/frm/payroll', [FrmController::class, 'payroll'])->name('frm.payroll');
    Route::get('/frm/tax', [FrmController::class, 'tax'])->name('frm.tax');
});