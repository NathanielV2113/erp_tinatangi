<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $table = 'departments';
    protected $fillable = [
        'name',
        'description',
        'head_id',
        'status'
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function employees()
    {
        return $this->hasMany(Employee::class, 'department_id');
    }
    public function head()
    {
        return $this->belongsTo(Employee::class, 'head_id');
    }
}
