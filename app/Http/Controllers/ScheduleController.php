<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Http\Requests\StoreScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use App\Models\Employee;
use GuzzleHttp\Psr7\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScheduleRequest $request)
    {
        //

        $sched = new Schedule();
        $sched->type = $request->type;
        $sched->start_time = $request->start_time;
        $sched->end_time = $request->end_time;
        $sched->work_days = implode(',', $request->work_days);
        $sched->dayoff = implode(',', $request->dayoff);
        $sched->save();
        session()->flash('success', 'Created Successfully.');
        return redirect()->route('hrm.scheduling');
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScheduleRequest $request, Schedule $sched)
    {
        $sched->type = $request->type;
        $sched->start_time = $request->start_time;
        $sched->end_time = $request->end_time;
        $sched->work_days = implode(',', $request->work_days);
        $sched->dayoff = implode(',', $request->dayoff);
        $sched->save();
        session()->flash('success', 'Updated Successfully.');
        return redirect()->route('hrm.scheduling');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($scheduleId)
    {
        //
        $schedule = Schedule::findOrFail($scheduleId);
        $schedule->delete();
        return redirect()->route('hrm.scheduling');
    }

    public function setSched($employeeId)
    {
        $employee = Employee::findOrFail($employeeId);
        $sched = Schedule::all();
        return view('modules.hrm.scheduling.sched-set', [
            'employee' => $employee,
            'schedules' => $sched,
        ]);
    }

    public function giveSched($employeeId, $scheduleId)
    {
        $employee = Employee::findOrFail($employeeId);
        $sched = Schedule::findOrFail($scheduleId);
        $employee->schedule = $sched->id;
        $employee->save();
        session()->flash('success', 'Schedule Assigned Successfully.');
        return redirect()->route('hrm.scheduling.sched-employees');
    }
    public function unsetSched($employeeId)
    {
        $employee = Employee::findOrFail($employeeId);
        $employee->schedule = null;
        $employee->save();
        session()->flash('success', 'Schedule Unset Successfully.');
        return redirect()->route('hrm.scheduling.employees');
    }
}
