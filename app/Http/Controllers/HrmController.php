<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class HrmController extends Controller
{
    //
    public function index()
    {
        return view('modules.hrm.hrm-dashboard');
    }
    public function employees_index(){
        // $employees = Employee::all();
        return view('modules.hrm.employee.employees', [
            // 'employees' => $employees,
        ]);
    }

    public function payroll(){
        return view('modules.hrm.payroll.payroll');
    }
}
