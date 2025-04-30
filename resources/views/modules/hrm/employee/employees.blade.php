<x-layouts.app :title="__('Employee List')">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=delete" />
    <div class="container dark:bg-neutral-800">
        <div class="row mt-5 dark:bg-neutral-800">
            <div class="col-md-12 dark:bg-neutral-800">
                <div class="bg-white dark:bg-amber-950 shadow-md rounded-lg p-6 ml-10 dark:bg-neutral-800">
                    <div class="flex w-full dark:bg-neutral-800">
                        <div class="w-1/2 dark:bg-neutral-800">
                            <h1 class="text-2xl font-semibold dark:bg-neutral-800">Employee List</h1>
                        </div>
                        <div class="w-1/2 text-right dark:bg-neutral-800">
                            <a href="{{ route('hrm.employees.create') }}" class="btn btn-soft btn-accent dark:bg-neutral-800">Add Employee</a>
                        </div>
                    </div>
                    <div class="overflow-x-auto mt-9 h-[750px] justify-evenly dark:bg-neutral-800">
                        <div class="h-[700px] dark:bg-neutral-800">
                            <table class="table dark:bg-neutral-800">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Full Name</th>
                                        <th>Department</th>
                                        <th>Job Title</th>
                                        <th>Email Adddress</th>
                                        <th>Contact No.</th>
                                        <th>Status</th>
                                        <th>Date Hired</th>
                                        <th>Date of Termination</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $index => $employee)
                                    <tr class="hover:bg-base-300 dark:bg-neutral-800">
                                        <td>{{ $employees->firstItem() + $index }}</td>
                                        <td>{{ $employee->first_name . ' ' . $firstLetter = substr($employee->middle_name, 0, 1) . '. ' . $employee->last_name }}</td>
                                        <td>
                                            @foreach ($departments as $department)
                                            @if ($employee->department == $department->id)
                                            {{ $department->name }}
                                            @endif
                                            @endforeach
                                        </td>
                                        @if ($employee->position == null)
                                        <td>N/A</td>
                                        @else
                                        <td>{{ $employee->position }}</td>
                                        @endif
                                        <td>{{ $employee->email }}</td>
                                        @if ($employee->phone == null)
                                        <td>N/A</td>
                                        @else
                                        <td>{{ $employee->phone }}</td>
                                        @endif

                                        @if ($employee->status == 'active')
                                        <td>
                                            <div class="badge badge-outline badge-success dark:bg-neutral-800">{{ $employee->status }}</div>
                                        </td>
                                        @elseif ($employee->status == 'inactive')
                                        <td>
                                            <div class="badge badge-outline badge-primary dark:bg-neutral-800">{{ $employee->status }}</div>
                                        </td>
                                        @elseif ($employee->status == 'terminated')
                                        <td>
                                            <div class="badge badge-outline badge-error dark:bg-neutral-800">{{ $employee->status }}</div>
                                        </td>
                                        @endif

                                        @if ($employee->hire_date == null)
                                        <td>N/A</td>
                                        @else
                                        <td>{{ $employee->hire_date->format('F j, Y') }}</td>
                                        @endif

                                        @if ($employee->termination_date == null)
                                        <td>N/A</td>
                                        @else
                                        <td>{{ $employee->termination_date->format('F j, Y') }}</td>
                                        @endif
                                        <td class="flex gap-2 dark:bg-neutral-800">
                                            <a href="{{ route('hrm.employees.edit', $employee) }}" class="btn btn-soft btn-info dark:bg-neutral-800">
                                                Edit
                                            </a>
                                            <button class="btn btn-soft btn-secondary dark:bg-neutral-800" onclick="confirmDeletion('{{route('hrm.employees.delete', $employee->id)}}')">
                                                Delete
                                            </button>
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
</x-layouts.app>