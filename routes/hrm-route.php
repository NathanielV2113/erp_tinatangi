<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PayrollController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HrmController;

Route::middleware(['isHrm'])->group(function () {
    Route::get('/hrm/employees', [EmployeeController::class, 'index'])->name('hrm.employees');
    Route::get('/hrm/employees/create', [EmployeeController::class, 'create'])->name('hrm.employees.create');
    Route::post('/hrm/employees/store', [EmployeeController::class, 'store'])->name('hrm.employees.store');
    Route::get('/hrm/employees/edit/{employee}', [EmployeeController::class, 'edit'])->name('hrm.employees.edit');
    Route::put('/hrm/employees/{employee}/update', [EmployeeController::class, 'update'])->name('hrm.employees.update');
    Route::get('/hrm/employees/{employeeId}/delete', [EmployeeController::class, 'destroy'])->name('hrm.employees.delete');
    Route::get('/hrm/employees/{employeeId}/show', [EmployeeController::class, 'show'])->name('hrm.employees.show');

    Route::get('/hrm/departments', [DepartmentController::class, 'index'])->name('hrm.departments');
    Route::get('/hrm/departments/create', [DepartmentController::class, 'create'])->name('hrm.departments.create');
    Route::post('/hrm/departments/store', [DepartmentController::class, 'store'])->name('hrm.departments.store');
    Route::get('/hrm/departments/edit/{department}', [DepartmentController::class, 'edit'])->name('hrm.departments.edit');
    Route::put('/hrm/departments/{department}/update', [DepartmentController::class, 'update'])->name('hrm.departments.update');
    Route::get('/hrm/departments/{departmentId}/delete', [DepartmentController::class, 'destroy'])->name('hrm.departments.delete');
    Route::get('/hrm/departments/{departmentId}/show', [DepartmentController::class, 'show'])->name('hrm.departments.show');


    Route::get('hrm/payroll', [HrmController::class, 'payroll'])->name('hrm.payroll');
    Route::get('hrm/payroll/generate', [PayrollController::class, 'generate'])->name('hrm.payroll.generate');

    Route::get('hrm/attendance', [HrmController::class, 'attendance'])->name('hrm.attendance');

    Route::get('hrm/scheduling', [HrmController::class, 'scheduling'])->name('hrm.scheduling');
});