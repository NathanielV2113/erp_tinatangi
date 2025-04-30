<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // $data = Payroll::create([
        //     'employee_id' => (int) $id,
        //     'month' => (int) $request->month,
        //     'quarter' => (int) $request->quarter,
        //     'week' => (int) $request->days_start,
        //     'start_date' => $startDate,
        //     'end_date' => $endDate,
        //     'payroll_date' => now('Asia/Manila'),
        //     'days_present' => (int) $daysPresentCount,
        //     'total_hours_worked' => (float) ($this->totalHours($id, $startDate, $endDate) ?? 0),
        //     'regular_hour_pay' => (float) ($this->calculateRegularHoursSalary($id, $startDate, $endDate) ?? 0),
        //     'days_absent' => (int) ($this->AbsentDaysCount($id, $startDate, $endDate) ?? 0),
        //     'absent_deduction' => (float) ($this->calculateDeductionForAbsentDays($id, $startDate, $endDate) ?? 0),
        //     'overtime_pay' => (float) ($this->calculateOvertimePay($id, $startDate, $endDate) ?? 0),
        //     'tardiness_deduction' => (float) ($this->calculateTardinessDeduction($id, $startDate, $endDate) ?? 0),
        //     'status' => 9,
        //     'allowance' => (float) 0,
        //     'bonus' => (float) 0,
        //     'paid_holiday' => (float) 0,
        //     'deduction' => (float) ($this->calculateTotalDeductionsAndPays($id, $startDate, $endDate)['total_deduction'] ?? 0) + 
        //                    $this->computeTax($this->calculateSalaryBeforeTax($id, $startDate, $endDate)),
        //     'gross_pay' => (float) ($this->calculateTotalDeductionsAndPays($id, $startDate, $endDate)['gross_pay'] ?? 0),
        //     'salary_before_tax' => (float) ($this->calculateSalaryBeforeTax($id, $startDate, $endDate) ?? 0),
        //     'net_pay' => (float) ($this->computeNetPay($this->calculateSalaryBeforeTax($id, $startDate, $endDate) ?? 0)),
        //     'tax_deduction' => $this->computeTax($this->calculateSalaryBeforeTax($id, $startDate, $endDate)),
        // ]);
        

        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->integer('month');
            $table->integer('quarter');
            $table->integer('week');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('payroll_date');
            $table->integer('days_of_present');
            $table->double('total_hours_worked');
            $table->double('regular_hour_pay');
            $table->integer('days_of_absent');
            $table->double('absent_deduction');
            $table->double('overtime_pay');
            $table->double('tardiness_deduction');
            $table->decimal('hours_late', 4, 2);
            $table->double('mandatory_deductions');
            $table->double('allowance');
            $table->double('bonus');
            $table->double('paid_holiday');
            $table->double('deduction');
            $table->double('gross_pay');
            $table->double('salary_before_tax');
            $table->double('net_pay');
            $table->double('tax_deduction');
            $table->string('status')->default('pending');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
