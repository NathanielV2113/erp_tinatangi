<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Department;
use SweetAlert2\Laravel\Swal;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $departments = Department::all();
        $employees = Employee::paginate(10); // Fetch 10 employees per page
        return view('modules.hrm.employee.employees', compact('employees', 'departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $departments = Department::all();
        $positions = [
            'Manager' => 'Manager',
            'Developer' => 'Developer',
            'Designer' => 'Designer',
            'Analyst' => 'Analyst',
        ];
        return view('modules.hrm.employee.create', [
            'departments' => $departments,
            'positions' => $positions,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        //
        $employee = new Employee();
        $employee->first_name = $request->first_name;
        $employee->middle_name = $request->middle_name;
        $employee->last_name = $request->last_name;
        $employee->gender = $request->gender;
        $employee->birthdate = $request->birthdate;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->department = $request->department;
        $employee->position = $request->position;
        $employee->hire_date = $request->hire_date;
        $employee->termination_date = $request->termination_date;
        $employee->address = $request->address;
        $employee->status = $request->status;
        $employee->save();
        session()->flash('success', 'Created Successfully.');
        return redirect()->route('hrm.employees');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
        return view('modules.hrm.employee.show', [
            'employee' => $employee,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
        $departments = Department::all();
        $positions = [
            'Manager' => 'Manager',
            'Developer' => 'Developer',
            'Designer' => 'Designer',
            'Analyst' => 'Analyst',
        ];
        return view('modules.hrm.employee.edit', [
            'employee' => $employee,
            'departments' => $departments,
            'positions' => $positions,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        //
        if($request->status == "terminated"){
            $termination = now();
        }

        if($request->status == "active" || $request->status == "inactive"){
            $termination = null;
        }

        $employee->first_name = $request->first_name;
        $employee->middle_name = $request->middle_name;
        $employee->last_name = $request->last_name;
        $employee->birthdate = $request->birthdate;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->department = $request->department;
        $employee->position = $request->position;
        $employee->hire_date = $request->hire_date;
        $employee->termination_date = $termination;
        $employee->address = $request->address;
        $employee->status = $request->status;
        $employee->save();
        session()->flash('success', 'Updated Successfully.');
        return redirect()->route('hrm.employees');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($employeeId)
    {
        //
        $employee = Employee::findOrFail($employeeId);
        $employee->delete();
        return redirect()->route('hrm.employees')->with('success', 'Employee deleted successfully.');
    }
}
