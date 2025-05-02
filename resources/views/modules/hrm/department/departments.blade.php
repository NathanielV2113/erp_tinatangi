<x-layouts.app :title="__('Department List')">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="bg-white dark:bg-amber-950 shadow-md rounded-lg p-6 ml-10">
                    <div class="flex w-full">
                        <div class="w-1/2">
                            <h1 class="text-2xl font-semibold">Department List</h1>
                        </div>
                        <div class="w-1/2 text-right">
                            <flux:modal.trigger name="add-dept">
                                <button class="btn btn-soft btn-accent">Add Department</button>
                            </flux:modal.trigger>
                        </div>
                    </div>
                    <div class="overflow-x-auto mt-9 h-[750px] justify-evenly">
                        <div class="h-[700px]">
                            <table class="table">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Department</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count = 0 ?>
                                    @foreach ($departments as $department)
                                    <tr class="hover:bg-base-300">
                                        <td>{{ ++$count }}</td>
                                        <td>{{ $department->name }}</td>
                                        <td>{{ $department->description }}</td>
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
                                            <flux:modal.trigger :name="'edit-dept'.$department->id">
                                                <button class="btn btn-soft btn-accent">Edit</button>
                                            </flux:modal.trigger>

                                            <button class="btn btn-soft btn-secondary" onclick="confirmDeletion('{{ route('hrm.departments.delete', $department->id) }}')">
                                                Delete
                                            </button>
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

    <flux:modal name="add-dept" class="md:w-96">
        <form action="{{ route('hrm.departments.store') }}" method="post">
            @csrf
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">Add Department</flux:heading>
                </div>

                <div class="bg-white p-5 rounded-lg w-full">
                    <div class="form-group">
                        <label for="name">Department Name</label>
                        <input type="text" name="name" id="name" class="input" required>
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="description">Description</label>
                        <input type="text" name="description" id="description" class="input">
                        @error('description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group mt-3">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="input">
                            <option value="active" {{ (isset($department) && $department->status == 'active') ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ (isset($department) && $department->status == 'inactive') ? 'selected' : '' }}>Inactive</option>
                        </select>
                        @error('status')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="flex">
                    <flux:spacer />

                    <flux:button type="submit" variant="primary">Save</flux:button>
                </div>
            </div>
        </form>
    </flux:modal>

    @foreach ($departments as $department)
    <flux:modal :name="'edit-dept'.$department->id" class="md:w-96">
        <form action="{{ route('hrm.departments.update', $department) }}" method="post">
            @csrf
            @method('PUT')
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">Add Department</flux:heading>
                </div>

                <div class="bg-white p-5 rounded-lg w-full">
                    @if (!empty($department))
                    <div class="form-group">
                        <label for="name">Department Name</label>
                        <input readonly type="text" name="name" id="name" class="input" value="{{ old('name', $department->name ?? '') }}" required>
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    @else
                    <div class="form-group">
                        <label for="name">Department Name</label>
                        <input type="text" name="name" id="name" class="input" value="{{ old('name', $department->name ?? '') }}" required>
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    @endif
                    <div class="form-group mt-3">
                        <label for="description">Description</label>
                        <input type="text" name="description" id="description" class="input" value="{{ old('description', $department->description ?? '') }}">
                        @error('description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="input">
                            <option value="active" {{ (isset($department) && $department->status == 'active') ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ (isset($department) && $department->status == 'inactive') ? 'selected' : '' }}>Inactive</option>
                        </select>
                        @error('status')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="flex">
                    <flux:spacer />

                    <flux:button type="submit" variant="primary">Save</flux:button>
                </div>
            </div>
        </form>
    </flux:modal>
    @endforeach
    
    
</x-layouts.app>