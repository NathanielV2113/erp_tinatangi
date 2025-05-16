<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrmController extends Controller
{
    //
    public function index()
    {
        return view('modules.frm.frm-dashboard');
    }

    public function accounting(){
        return view('modules.frm.frm-accounting');
    }
    public function treasury(){
        return view('modules.frm.frm-treasury');
    }
    public function payroll(){
        return view('modules.frm.frm-payroll');
    }
    public function tax(){
        return view('modules.frm.frm-tax');
    }
    public function pos(){
        return view('modules.frm.frm-pos');
    }

}
