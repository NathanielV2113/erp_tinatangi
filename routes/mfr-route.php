<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MfrController;

Route::middleware(['isMfr'])->group(function () {
});