<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrmController;

Route::middleware(['isCrm'])->group(function () {

});

Route::view('tinatangi/home', 'modules.crm.website.homepage')->name('tinatangi.home');
Route::view('tinatangi/menu', 'modules.crm.website.menu')->name('tinatangi.menu');
Route::view('tinatangi/reservation', 'modules.crm.website.reservation')->name('tinatangi.reservation');
Route::view('tinatangi/location', 'modules.crm.website.location')->name('tinatangi.location');
Route::view('tinatangi/feedback', 'modules.crm.website.feedback')->name('tinatangi.feedback');