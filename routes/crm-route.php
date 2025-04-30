<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrmController;

Route::middleware(['isCrm'])->group(function () {

});

