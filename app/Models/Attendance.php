<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendance extends Model
{
    /** @use HasFactory<\Database\Factories\AttendanceFactory> */
    use HasFactory, SoftDeletes;
    protected $fillables = [
        'employee_id',
        'date',
        'time_in',
        'time_out',
        'attendance_status',
        'days_present',
        'days_absent',
        'late',
        'working_hours',
        'overtime_hours',
        'approval_status'
    ];
}
