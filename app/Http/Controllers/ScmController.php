<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScmController extends Controller
{
    //
    public function index()
    {
        return view('modules.scm.scm-dashboard');
    }
}
