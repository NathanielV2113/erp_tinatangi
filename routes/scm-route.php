<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScmController;

Route::middleware(['isScm'])->group(function () {
});