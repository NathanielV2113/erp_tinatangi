<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrmController;

Route::middleware(['isFrm'])->group(function () {
});