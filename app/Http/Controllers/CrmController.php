<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrmController extends Controller
{
    //
    public function index()
    {
        return view('modules.crm.crm-dashboard');
    }

    public function homepage(){
        return view('modules.crm.website.homepage');
    }

    public function menu(){
        return view('modules.crm.website.menu');
    }

    public function reserve(){
        return view('modules.crm.website.reservation');
    }

    public function location(){
        return view('modules.crm.website.location');
    }

    public function feedback(){
        return view('modules.crm.website.feedback');
    }

    public function faq(){
        return view('modules.crm.website.faq');
    }
}
