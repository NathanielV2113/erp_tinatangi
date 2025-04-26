<x-layouts.app :title="__('Department List')">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                <div class="bg-white dark:bg-amber-950 shadow-md rounded-lg p-6 ml-10">
                    <div class="flex w-full">
                        <div class="w-1/2">
                            <h1 class="text-2xl font-semibold">Department List</h1>
                        </div>
                        <div class="w-1/2 text-right">
                            <a href="{{ route('hrm.departments.create') }}" class="btn btn-soft btn-accent">Add department</a>
                        </div>
                    </div>
                    <div class="overflow-x-auto mt-9 h-[750px] justify-evenly">
                        <div class="h-[700px]">
                            <table class="table">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Department</th>
                                        <th>Description</th>
                                        <th>Head</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($departments as $department)
                                    <tr class="hover:bg-base-300">
                                        <td></td>
                                        <td>{{ $department->name }}</td>
                                        <td>{{ $department->description }}</td>
                                        <td>
                                            @foreach ($employees as $employee)
                                            @if ($department->head == $employee->id)
                                            {{ $employee->first_name . ' ' . $employee->last_name }}
                                            @break
                                            @else
                                            N/A
                                            @break
                                            @endif
                                            @endforeach
                                        </td>
                                        @if ($department->status == 'active')
                                        <td>
                                            <div class="badge badge-outline badge-success">{{ $department->status }}</div>
                                        </td>
                                        @elseif ($department->status == 'inactive')
                                        <td>
                                            <div class="badge badge-outline badge-error">{{ $department->status }}</div>
                                        </td>
                                        @endif
                                        <td class="flex gap-2">
                                            <a href="{{ route('hrm.departments.edit', $department) }}" class="btn btn-soft btn-info">Edit</a>
                                            <a href="" class="btn btn-soft btn-secondary">Disable</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="join mt-3">
                            {{ $departments->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>