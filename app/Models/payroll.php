<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class payroll extends Model
{
    /** @use HasFactory<\Database\Factories\PayrollFactory> */
    use HasFactory, SoftDeletes;
}
