<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MfrController extends Controller
{
    //
    public function index()
    {
        return view('modules.mfr.mfr-dashboard');
    }
}
