<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class reservation extends Model
{
    /** @use HasFactory<\Database\Factories\ReservationFactory> */
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'email',
        'date',
        'timein',
        'timeout',
        'table',
    ];
}
