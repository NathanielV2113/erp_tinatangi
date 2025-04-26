<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Models\Employee;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $employees = Employee::all();
        $departments = Department::paginate(10);
        return view('modules.hrm.department.departments', compact('departments','employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $statuses = [
            'active' => 'Active',
            'inactive' => 'Inactive',
        ];
        return view('modules.hrm.department.create', [
            'statuses' => $statuses,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDepartmentRequest $request)
    {
        //
        $department = new Department();
        $department->name = $request->name;
        $department->description = $request->description;
        $department->head = $request->head;
        $department->status = $request->status;
        $department->save();
        return redirect()->route('hrm.departments')->with('success', 'Department created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
        return view('modules.hrm.department.show', [
            'department' => $department,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        //
        $employees = Employee::all();
        $statuses = [
            'active' => 'Active',
            'inactive' => 'Inactive',
        ];
        return view('modules.hrm.department.edit', [
            'department' => $department,
            'employees' => $employees,
            'statuses' => $statuses,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        //
        $department->name = $request->name;
        $department->description = $request->description;
        $department->head = $request->head;
        $department->status = $request->status;
        $department->save();
        return redirect()->route('hrm.departments')->with('success', 'Department updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        //
        $department->delete();
        return redirect()->route('hrm.departments')->with('success', 'Department deleted successfully.');
    }
}
