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


    public function generate(StorePayrollRequest $request)
    {
        $employees = Employee::all();
        $mandatoryDeductions = MandatoryDeduction::sum('amount'); // Get total mandatory deductions
        $attendances = Attendance::whereIn('employee_id', $employees->pluck('id'))->get(); // Filter related attendance

        // $data = Payroll::create([
        //     'employee_id' => (int) $id,
        //     'month' => (int) $request->month,
        //     'quarter' => (int) $request->quarter,
        //     'week' => (int) $request->days_start,
        //     'start_date' => $startDate,
        //     'end_date' => $endDate,
        //     'payroll_date' => now('Asia/Manila'),
        //     'days_present' => (int) $daysPresentCount,
        //     'total_hours_worked' => (double) ($this->totalHours($id, $startDate, $endDate) ?? 0),
        //     'regular_hour_pay' => (double) ($this->calculateRegularHoursSalary($id, $startDate, $endDate) ?? 0),
        //     'days_absent' => (int) ($this->AbsentDaysCount($id, $startDate, $endDate) ?? 0),
        //     'absent_deduction' => (double) ($this->calculateDeductionForAbsentDays($id, $startDate, $endDate) ?? 0),
        //     'overtime_pay' => (double) ($this->calculateOvertimePay($id, $startDate, $endDate) ?? 0),
        //     'tardiness_deduction' => (double) ($this->calculateTardinessDeduction($id, $startDate, $endDate) ?? 0),
        //     'status' => 9,
        //     'allowance' => (double) 0,
        //     'bonus' => (double) 0,
        //     'paid_holiday' => (double) 0,
        //     'deduction' => (double) ($this->calculateTotalDeductionsAndPays($id, $startDate, $endDate)['total_deduction'] ?? 0) + 
        //                    $this->computeTax($this->calculateSalaryBeforeTax($id, $startDate, $endDate)),
        //     'gross_pay' => (double) ($this->calculateTotalDeductionsAndPays($id, $startDate, $endDate)['gross_pay'] ?? 0),
        //     'salary_before_tax' => (double) ($this->calculateSalaryBeforeTax($id, $startDate, $endDate) ?? 0),
        //     'net_pay' => (double) ($this->computeNetPay($this->calculateSalaryBeforeTax($id, $startDate, $endDate) ?? 0)),
        //     'tax_deduction' => $this->computeTax($this->calculateSalaryBeforeTax($id, $startDate, $endDate)),
        // ]);

        // foreach ($employees as $employee) {
        //     $payroll = new Payroll(); // Create a new Payroll instance for each employee
        //     $payroll->employee_id = $employee->id;
        //     $payroll->pay_period = date('F'); // Use current month

        //     $employeeAttendance = $attendances->firstWhere('employee_id', $employee->id); // Get attendance for this employee
        //     if ($employeeAttendance) {
        //         $payroll->days_of_absent = $employeeAttendance->days_absent ?? 0;
        //         $payroll->hours_late = $employeeAttendance->late ?? 0;
        //         $payroll->days_of_present = $employeeAttendance->days_present ?? 0;
        //         $payroll->over_time = $employeeAttendance->overtime_hours ?? 0;
        //     } else {
        //         $payroll->days_of_absent = 0;
        //         $payroll->hours_late = 0;
        //         $payroll->days_of_present = 0;
        //         $payroll->over_time = 0;
        //     }

        //     $payroll->mandatory_deductions = $mandatoryDeductions;
        //     $payroll->bonus = 0; // Default bonus
        //     $payroll->advance_payments = 0; // Default advance payment

        //     $payroll->gross_deduction = $payroll->mandatory_deductions + $payroll->days_of_absent + $payroll->hours_late;
        //     $payroll->gross_salary = ($payroll->days_of_present * 540) + ($payroll->over_time * 70) + $payroll->bonus - $payroll->advance_payments;
        //     $payroll->tax = $payroll->gross_salary * 0.12; // Tax based on gross salary
        //     $payroll->net_pay = $payroll->gross_salary - $payroll->gross_deduction;

        //     $payroll->save(); // Save payroll record
        // }

        return redirect()->route('hrm.payroll')->with('success', 'Payroll is Up for Approval');
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function totalHours($id, $startDate, $endDate)
    {
        return Attendance::where('employee_id', $id)
            ->whereBetween('date', [$startDate, $endDate])
            ->sum('hours_worked');
    }

    public function calculateRegularHoursSalary($id, $startDate, $endDate)
    {
        // Get the total regular hours worked
        $totalHours = Attendance::where('employee_id', $id)
            ->whereBetween('date', [$startDate, $endDate])
            ->sum('regular_hours');

        // Fetch employee's hourly rate (adjust if stored elsewhere)
        $hourlyRate = Employee::where('id', $id)->value('hourly_rate');

        // Calculate regular salary
        return $totalHours * $hourlyRate;
    }

    public function AbsentDaysCount($id, $startDate, $endDate)
    {
        // Get total working days within the given range
        $workingDays = Attendance::whereBetween('date', [$startDate, $endDate])
            ->distinct('date')
            ->count('date');

        // Get days the employee was present
        $daysPresent = Attendance::where('employee_id', $id)
            ->whereBetween('date', [$startDate, $endDate])
            ->distinct('date')
            ->count('date');

        // Calculate absent days
        return max($workingDays - $daysPresent, 0); // Ensures absence count doesn't go negative
    }

    public function calculateDeductionForAbsentDays($id, $startDate, $endDate)
    {
        // Get the employee's daily salary rate
        $dailyRate = Employee::where('id', $id)->value('daily_rate');

        // Calculate the number of absent days
        $absentDays = $this->AbsentDaysCount($id, $startDate, $endDate);

        // Deduction formula (Absences × Daily Rate)
        return $absentDays * $dailyRate;
    }

    public function calculateOvertimePay($id, $startDate, $endDate)
    {
        // Fetch total overtime hours from the attendance records
        $overtimeHours = Attendance::where('employee_id', $id)
            ->whereBetween('date', [$startDate, $endDate])
            ->sum('overtime_hours');

        // Get the employee's hourly rate
        $hourlyRate = Employee::where('id', $id)->value('hourly_rate');

        // Define overtime pay multiplier (e.g., 1.5x for standard overtime)
        $overtimeRateMultiplier = 1.5;

        // Calculate overtime pay
        return $overtimeHours * $hourlyRate * $overtimeRateMultiplier;
    }

    public function calculateTardinessDeduction($id, $startDate, $endDate)
    {
        // Fetch total minutes late from attendance records
        $totalLateMinutes = Attendance::where('employee_id', $id)
            ->whereBetween('date', [$startDate, $endDate])
            ->sum('late_minutes');

        // Get the employee's hourly rate
        $hourlyRate = Employee::where('id', $id)->value('hourly_rate');

        // Convert hourly rate to per-minute rate
        $minuteRate = $hourlyRate / 60;

        // Define tardiness penalty multiplier (if applicable)
        $penaltyMultiplier = 1; // Adjust if there's an extra penalty

        // Calculate tardiness deduction
        return $totalLateMinutes * $minuteRate * $penaltyMultiplier;
    }

    public function calculateTotalDeductionsAndPays($id, $startDate, $endDate)
    {
        // Retrieve individual deductions
        $absentDeduction = $this->calculateDeductionForAbsentDays($id, $startDate, $endDate);
        $tardinessDeduction = $this->calculateTardinessDeduction($id, $startDate, $endDate);
        $taxDeduction = $this->computeTax($this->calculateSalaryBeforeTax($id, $startDate, $endDate));

        // Retrieve earnings
        $regularPay = $this->calculateRegularHoursSalary($id, $startDate, $endDate);
        $overtimePay = $this->calculateOvertimePay($id, $startDate, $endDate);
        $allowance = Employee::where('id', $id)->value('allowance') ?? 0;
        $bonus = Employee::where('id', $id)->value('bonus') ?? 0;

        // Total deductions
        $totalDeduction = $absentDeduction + $tardinessDeduction + $taxDeduction;

        // Gross pay before deductions
        $grossPay = $regularPay + $overtimePay + $allowance + $bonus;

        // Net pay after deductions
        $netPay = $grossPay - $totalDeduction;

        return [
            'total_deduction' => $totalDeduction,
            'gross_pay' => $grossPay,
            'net_pay' => max($netPay, 0), // Ensure net pay doesn't go negative
        ];
    }

    public function calculateSalaryBeforeTax($id, $startDate, $endDate)
    {
        // Fetch individual earnings
        $regularPay = $this->calculateRegularHoursSalary($id, $startDate, $endDate);
        $overtimePay = $this->calculateOvertimePay($id, $startDate, $endDate);
        $allowance = Employee::where('id', $id)->value('allowance') ?? 0;
        $bonus = Employee::where('id', $id)->value('bonus') ?? 0;

        // Calculate salary before tax
        return $regularPay + $overtimePay + $allowance + $bonus;
    }

    public function computeTax($salaryBeforeTax)
    {
        // Define tax brackets (adjust based on actual tax rates)
        $taxRate = 0;

        if ($salaryBeforeTax <= 10000) {
            $taxRate = 0.10; // 10% tax for lower income
        } elseif ($salaryBeforeTax <= 30000) {
            $taxRate = 0.15; // 15% tax
        } elseif ($salaryBeforeTax <= 50000) {
            $taxRate = 0.20; // 20% tax
        } else {
            $taxRate = 0.25; // 25% tax for high income
        }

        // Calculate tax deduction
        return $salaryBeforeTax * $taxRate;
    }

    public function computeNetPay($id, $startDate, $endDate, $salaryBeforeTax)
    {
        // Compute tax based on salary
        $taxDeduction = $this->computeTax($salaryBeforeTax);

        // Compute other deductions (absences, tardiness, etc.)
        $otherDeductions = $this->calculateTotalDeductionsAndPays($id, $startDate, $endDate)['total_deduction'];

        // Calculate net pay (Salary Before Tax - Total Deductions)
        return max($salaryBeforeTax - $taxDeduction - $otherDeductions, 0); // Ensures net pay doesn't go negative
    }



    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////

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
