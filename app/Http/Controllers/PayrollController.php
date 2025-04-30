<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employee;
use App\Models\Payroll;
use App\Models\MandatoryDeduction;
use App\Http\Requests\StorepayrollRequest;
use App\Http\Requests\UpdatepayrollRequest;


class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function generate()
    // {
    //     //
    //     $attendances = Attendance::all();
    //     $mandatoryDeductions = MandatoryDeduction::sum('amount'); // Sum all values in the 'amount' column
    //     $payroll = new Payroll();
    //     $employees = Employee::all();
    //     foreach($employees as $employee){
    //         $payroll->employee_id = $employee->id;
    //         $payroll->pay_period = date('F');
    //         foreach($attendances as $attendance){
    //             if($attendance->employee->id == $employee->id){
    //                 $payroll->days_of_absent = $attendance->days_absent ?? 0;
    //                 $payroll->hours_late = $attendance->late ?? 0;
    //                 $payroll->days_of_present = $attendance->days_present ?? 0;
    //                 $payroll->over_time = $attendance->overtime_hours ?? 0;
    //             }
    //         }
    //         $payroll->mandatory_deductions = $mandatoryDeductions;
    //         $payroll->tax = 0.12;
    //         $payroll->bonus = 0;
    //         $payroll->advance_payments = 0;
    //         $payroll->gross_deduction = $payroll->mandatory_deductions + $payroll->days_absent + $payroll->hours_late;
    //         $payroll->gross_salary = $payroll->days_present + $payroll->over_time + $payroll->bonus + $payroll->advance_payments;
    //         $payroll->net_pay = $payroll->gross_salary - $payroll->gross_deduction;
    //         $payroll->save();
    //     }
        
    // }


    public function generate()
    {
        $employees = Employee::all();
        $mandatoryDeductions = MandatoryDeduction::sum('amount'); // Get total mandatory deductions
        $attendances = Attendance::whereIn('employee_id', $employees->pluck('id'))->get(); // Filter related attendance
    
        foreach ($employees as $employee) {
            $payroll = new Payroll(); // Create a new Payroll instance for each employee
            $payroll->employee_id = $employee->id;
            $payroll->pay_period = date('F'); // Use current month
    
            $employeeAttendance = $attendances->firstWhere('employee_id', $employee->id); // Get attendance for this employee
            if ($employeeAttendance) {
                $payroll->days_of_absent = $employeeAttendance->days_absent ?? 0;
                $payroll->hours_late = $employeeAttendance->late ?? 0;
                $payroll->days_of_present = $employeeAttendance->days_present ?? 0;
                $payroll->over_time = $employeeAttendance->overtime_hours ?? 0;
            } else {
                $payroll->days_of_absent = 0;
                $payroll->hours_late = 0;
                $payroll->days_of_present = 0;
                $payroll->over_time = 0;
            }
    
            $payroll->mandatory_deductions = $mandatoryDeductions;
            $payroll->bonus = 0; // Default bonus
            $payroll->advance_payments = 0; // Default advance payment
            
            $payroll->gross_deduction = $payroll->mandatory_deductions + $payroll->days_of_absent + $payroll->hours_late;
            $payroll->gross_salary = ($payroll->days_of_present * 540) + ($payroll->over_time * 70) + $payroll->bonus - $payroll->advance_payments;
            $payroll->tax = $payroll->gross_salary * 0.12; // Tax based on gross salary
            $payroll->net_pay = $payroll->gross_salary - $payroll->gross_deduction;
    
            $payroll->save(); // Save payroll record
        }

        return redirect()->route('hrm.payroll')->with('success', 'Payroll is Up for Approval');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepayrollRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(payroll $payroll)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(payroll $payroll)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepayrollRequest $request, payroll $payroll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(payroll $payroll)
    {
        //
    }
}
