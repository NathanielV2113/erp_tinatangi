<x-layouts.app :title="__('Payroll')">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="bg-white dark:bg-amber-950 shadow-md rounded-lg p-6 ml-10">
                    <div class="flex w-full">
                        <div class="w-1/2">
                            <h1 class="text-2xl font-semibold">Payroll</h1>
                        </div>
                        <form id="generatePayroll" action="{{ route('hrm.payroll.generate') }}" class="flex items-center">
                            <div class="form-group mr-4 flex items-center">
                                <label class="font-medium w-30" for="start_date">Start Date</label>
                                <input
                                    type="date"
                                    name="start_date" id="start_date"
                                    class="input w-full bg-white">
                                @error('start_date')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group flex items-center">
                                <label class="font-medium w-30" for="end_date">End Date</label>
                                <input
                                    type="date"
                                    name="end_date" id="end_date"
                                    class="input w-full bg-white">
                                @error('end_date')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="w-1/2 ml-4">
                                <button onclick="dateRangeConfirmation()" class="btn btn-soft btn-accent">Generate Payroll</button>
                            </div>
                        </form>
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
                            {{ $payrolls->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function dateRangeConfirmation() {
            event.preventDefault();
            const start_date = document.getElementById("start_date").value;
            const end_date = document.getElementById("end_date").value;
            console.log(start_date);
            console.log(end_date);
            if (start_date != '' && end_date != '') {
                document.getElementById("generatePayroll").submit();
            } else {
                swalWithBootstrapButtons.fire({
                    title: "Please select a date range",
                    icon: "error"
                });
            }
        }
    </script>
</x-layouts.app>