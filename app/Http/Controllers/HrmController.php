<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Payroll;
use App\Models\Department;
use Carbon\Carbon;
use App\Models\Schedule;

class HrmController extends Controller
{
    //
    public function index()
    {
        $total_employees = Employee::count(); // Counts all employees
        $hires = Employee::where('hire_date', '>=', Carbon::now()->subDays(30))->get();
        $terminated_employees = Employee::where('status', 'terminated')->count(); // Counts employees with terminated status
        return view('modules.hrm.hrm-dashboard', compact(
    'total_employees', 
    'hires', 
            'terminated_employees'
        ));
    }
    public function employees_index(){
        // $employees = Employee::all();
        return view('modules.hrm.employee.employees', [
            // 'employees' => $employees,
        ]);
    }

    public function payroll(){
        $employees = Employee::all();
        $payrolls = Payroll::paginate(10);
        $departments = Department::all();
        return view('modules.hrm.payroll.payroll', compact('employees', 'payrolls', 'departments'));
    }
    public function scheduling(){
        $scheds = Schedule::paginate(10);
        return view('modules.hrm.scheduling.scheduling', compact('scheds'));
    }
    public function attendance(){
        return view('modules.hrm.scheduling.attendance');
    }


}
