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
        'pay_period',
        'days_of_present',
        'days_of_absent',
        'hours_late',
        'mandatory_deductions',
        'tax',
        'over_time',
        'bonus',
        'advance_payments',
        'gross_deduction',
        'gross_salary',
        'net_pay',
        'status',
    ];
}
