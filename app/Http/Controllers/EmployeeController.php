<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Department;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        $employeeId = Employee::where('email', $request->email)->pluck('id');
        $user = new User();
        $user->id = substr($employeeId, 1, -1);
        $user->name = $request->first_name . ' ' . $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->last_name);
        $user->save();

        $user->syncRoles('employee');

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
        if ($request->status == "terminated") {
            $termination = now();
        }

        if ($request->status == "active" || $request->status == "inactive") {
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
        return redirect()->route('hrm.employees');
    }


    public function employee()
    {
        $events = [];

        $pos = Employee::where('id', auth()->user()->id)->pluck('position');
        $dept = Employee::where('id', auth()->user()->id)->pluck('department');
        $deptss =Department::all();
        // dd($pos);
        $dept = substr($dept, 2, -2);
        $pos = substr($pos, 1, -1);

        foreach ($deptss as $depts){
            if($dept == $depts->id){
                $dept = $depts->name;
            }
        }
        
        $start_dates = ['2023-06-01', '2023-06-07', '2023-06-11', '2023-06-12T10:30:00', '2023-06-12', '2023-06-12', '2023-06-13', '2023-06-28'];
        $end_date = ['', '2023-06-10', '2023-06-13', '2023-06-12T12:30:00', '2023-06-12T12:00:00', '2023-06-12T14:30:00', '2023-06-13T07:00:00', ''];

        $titles = ['All Day Event', 'Long Event', 'Conference', 'Meeting', 'Lunch', 'Meeting', 'Birthday Party', 'Click for Google'];
        $links = ['', '', '', '', '', '', '', 'https://www.google.com/'];

        foreach ($titles as $key => $title) {
            $events[]   = [
                'title' => $title,
                'start' => $start_dates[$key],
                'end'   => $end_date[$key],
                'url'   => $links[$key],
            ];
        }

        $data = [
            'events' => $events,
            'dept' => $dept,
            'pos' => $pos
        ];
        return view('employee_side.attendance', $data);
    }

    // public function calendar()
    // {
    // $events = [];

    // $start_dates = ['2023-06-01', '2023-06-07', '2023-06-11', '2023-06-12T10:30:00', '2023-06-12', '2023-06-12', '2023-06-13', '2023-06-28'];
    // $end_date = ['', '2023-06-10', '2023-06-13', '2023-06-12T12:30:00', '2023-06-12T12:00:00', '2023-06-12T14:30:00', '2023-06-13T07:00:00', ''];

    // $titles = ['All Day Event', 'Long Event', 'Conference', 'Meeting', 'Lunch', 'Meeting', 'Birthday Party', 'Click for Google'];
    // $links = ['', '', '', '', '', '', '', 'https://www.google.com/'];

    // foreach ($titles as $key => $title) {
    //     $events[]   = [
    //         'title' => $title,
    //         'start' => $start_dates[$key],
    //         'end'   => $end_date[$key],
    //         'url'   => $links[$key],
    //     ];
    // }

    // $data = [
    //     'events' => $events
    // ];

    //     return view('fullcalendar', $data);
    // }
}
