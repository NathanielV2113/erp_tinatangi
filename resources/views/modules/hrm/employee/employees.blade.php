<x-layouts.app :title="__('Employee List')">
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
                            <h1 class="text-2xl font-semibold">Employee List</h1>
                        </div>
                        <div class="w-1/2 text-right">
                            <a href="{{ route('hrm.employees.create') }}" class="btn btn-soft btn-accent">Add Employee</a>
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
                                    <tr class="hover:bg-base-300">
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
                                            <div class="badge badge-outline badge-success">{{ $employee->status }}</div>
                                        </td>
                                        @elseif ($employee->status == 'inactive')
                                        <td>
                                            <div class="badge badge-outline badge-primary">{{ $employee->status }}</div>
                                        </td>
                                        @elseif ($employee->status == 'terminated')
                                        <td>
                                            <div class="badge badge-outline badge-error">{{ $employee->status }}</div>
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
                                        <td class="flex gap-2">
                                            <a href="{{ route('hrm.employees.edit', $employee) }}" class="btn btn-soft btn-info">Edit</a>
                                            <button class="btn btn-soft btn-secondary" onclick="confirmDeletion('{{route('hrm.employees.delete', $employee->id)}}')">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="join mt-3">
                            {{ $employees->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmDeletion(url) {
            Swal.fire({
                title: 'Are you sure you want to delete?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url; // Redirect to deletion route
                }
            });
        }
    </script>
</x-layouts.app>