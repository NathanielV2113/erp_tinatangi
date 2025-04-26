<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = 'employees';
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'phone',
        'department',
        'position',
        'hire_date',
        'termination_date',
        'address',
        'status'
    ];
    protected $casts = [
        'hire_date' => 'date',
        'termination_date' => 'date',
    ];

}
