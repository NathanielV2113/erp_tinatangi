<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payroll extends Model
{
    /** @use HasFactory<\Database\Factories\PayrollFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'employee_id',
        'month',
        'quarter',
        'week',
        'start_date',
        'end_date',
        'payroll_date',
        'days_of_present',
        'total_hours_worked',
        'regular_hour_pay',
        'days_of_absent',
        'absent_deduction',
        'overtime_pay',
        'tardiness_deduction',
        'hours_late', 4, 2,
        'mandatory_deductions',
        'allowance',
        'bonus',
        'paid_holiday',
        'deduction',
        'gross_pay',
        'salary_before_tax',
        'net_pay',
        'tax_deduction',
        'status'
    ];
}
