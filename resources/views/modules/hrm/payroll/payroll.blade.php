<x-layouts.app :title="__('Payroll')">
    @if(session('success'))
    <script>
        Swal.fire({
            title: "{{ session('success') }}",
            icon: 'success',
            confirmButtonText: 'Okay'
        });
    </script>
    @endif
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="bg-white dark:bg-amber-950 shadow-md rounded-lg p-6 ml-10">
                    <div class="flex w-full">
                        <div class="w-1/2">
                            <h1 class="text-2xl font-semibold">Payroll</h1>
                        </div>
                        <div class="w-1/2 text-right">
                            <a href="{{ route('hrm.payroll.generate') }}" class="btn btn-soft btn-accent">Generate Payroll</a>
                        </div>
                    </div>
                    <div class="overflow-x-auto mt-9 h-[750px] justify-evenly">
                        <div class="h-[700px]">
                            <table class="table">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Full Name</th>
                                        <th>Dept.</th>
                                        <th>Pay Period</th>
                                        <th>Days Present</th>
                                        <th>Days Absent</th>
                                        <th>Late</th>
                                        <th>Over Time</th>
                                        <th>Salary</th>
                                        <th>Bonus</th>
                                        <th>Advances</th>
                                        <th>Deductions</th>
                                        <th>Tax</th>
                                        <th>Net Pay</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payrolls as $payroll)
                                    
                                    <tr>
                                        <td></td>
                                        @foreach ($employees as $employee)
                                        @if ($employee->id == $payroll->employee_id) <!-- Correct comparison operator -->
                                        <td>
                                            {{ $employee->first_name . ' ' . substr($employee->middle_name, 0, 1) . '. ' . $employee->last_name }}
                                        </td>
                                        @php
                                        $dept = '';
                                        foreach ($departments as $department) {
                                        if ($department->id == $employee->department) {
                                        $dept = $department->name;
                                        }
                                        }
                                        @endphp
                                        <td>{{ $dept }}</td> <!-- Display department name -->
                                        @endif
                                        @endforeach
                                        <td>{{ $payroll->pay_period }}</td>
                                        <td>{{ $payroll->days_of_present }}</td>
                                        <td>{{ $payroll->days_of_absent }}</td>
                                        <td>{{ $payroll->hours_late }}</td>
                                        <td>{{ $payroll->overtime }}</td>
                                        <td>{{ $payroll->gross_salary }}</td>
                                        <td>{{ $payroll->bonus }}</td>
                                        <td>{{ $payroll->advance_payments }}</td>
                                        <td>{{ $payroll->gross_deduction }}</td>
                                        <td>{{ $payroll->tax }}</td>
                                        <td>{{ $payroll->net_pay }}</td>
                                        @if ($payroll->status == 'active')
                                        <td>
                                            <div class="badge badge-outline badge-success">{{ $payroll->status }}</div>
                                        </td>
                                        @elseif ($payroll->status == 'pending')
                                        <td>
                                            <div class="badge badge-outline badge-warning">{{ $payroll->status }}</div>
                                        </td>
                                        @elseif ($payroll->status == 'terminated')
                                        <td>
                                            <div class="badge badge-outline badge-error">{{ $payroll->status }}</div>
                                        </td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <div class="join mt-3">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-layouts.app>