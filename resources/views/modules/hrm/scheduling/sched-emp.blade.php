@extends('modules.hrm.scheduling.sched-layout')
@section('content')
<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="bg-white dark:bg-amber-950 shadow-md rounded-b-lg p-6">
                <div class="flex w-full">
                    <div class="w-1/2">
                        <h1 class="text-2xl font-semibold">Employees</h1>
                    </div>
                    <!-- <div class="w-1/2 text-right">
                        </div> -->
                </div>
                <!-- ............................................................................... -->
                <div class="overflow-x-auto mt-9 h-[750px] justify-evenly">
                    <div class="h-[700px]">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Schedule</th>
                                    <th>Work Days</th>
                                    <th>Dayoff</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $index => $employee)
                                <tr>
                                    <td>{{ $employees->firstItem() + $index }}</td>
                                    <td>{{ $employee->first_name . ' ' . $firstLetter = substr($employee->middle_name, 0, 1) . '. ' . $employee->last_name }}</td>
                                    <td>
                                        @foreach ($departments as $department)
                                        @if ($employee->department == $department->id)
                                        {{ $department->name }}
                                        @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($schedules as $schedule)
                                        @if ($employee->schedule == $schedule->id)
                                        {{ $schedule->type }}
                                        @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($schedules as $schedule)
                                        @if ($employee->schedule == $schedule->id)
                                        {{ $schedule->work_days }}
                                        @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($schedules as $schedule)
                                        @if ($employee->schedule == $schedule->id)
                                        {{ $schedule->dayoff }}
                                        @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ route('hrm.scheduling.employees.set', ['employee' => $employee]) }}" class="btn btn-soft btn-accent">Set</a>
                                        <button type="submit" class="btn btn-soft btn-secondary" onclick="confirmUnset('{{ route('hrm.scheduling.employees.unset', $employee->id) }}')">Unset</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="join mt-3 dark:bg-neutral-800">
                        {{ $employees->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    function confirmUnset(url) {
        swalWithBootstrapButtons.fire({
            title: "Are you sure you want to unset?",
            text: "You're about to unset the schedule of this employee!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, Unset it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
                swalWithBootstrapButtons.fire({
                    title: "Deleted!",
                    text: "schedule has been deleted.",
                    icon: "success"
                });
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire({
                    title: "Cancelled",
                    icon: "error"
                });
            }
        });
    }
</script>
@endsection