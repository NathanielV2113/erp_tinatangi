<x-layouts.app :title="__('User List')">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>User List</h4>
                        <flux:modal.trigger name="add-usr">
                            <button class="btn btn-soft btn-accent">Add User</button>
                        </flux:modal.trigger>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if (!empty($user->getRoleNames()))
                                        @foreach ($user->getRoleNames() as $rolename)
                                        <span class="badge badge-outline badge-success">{{ $rolename }}</span>
                                        @endforeach
                                        @else
                                        <span class="badge bg-danger">No Role</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/users/'. $user->id . '/edit') }}" class="btn btn-soft btn-success">Edit</a>
                                        <a onclick="confirmDeletion('{{ url('admin/users/' . $user->id . '/delete') }}')" class="btn btn-soft btn-secondary">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <flux:modal name="add-usr" class="md:w-96">
        <form action="{{ url('admin/users') }}" method="post">
            @csrf
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">Add User</flux:heading>
                </div>

                <div class="mb-3">
                    <label for="">Full Name</label>
                    <input type="text" name="name" class="input" placeholder="Enter Full Name">
                </div>
                <div class="mb-3">
                    <label for="">Email Address</label>
                    <input type="email" name="email" class="input" placeholder="example@email.com">
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" name="password" class="input" placeholder="********">
                </div>
                <div class="mb-3">
                    <label for="">Role</label>
                    <select name="roles[]" class="input" multiple>
                        <option value="">Select Role</option>
                        @foreach ($roles as $role)
                        <option value="{{ $role }}">{{ $role }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex">
                    <flux:spacer />

                    <flux:button type="submit" variant="primary">Save</flux:button>
                </div>
            </div>
        </form>
    </flux:modal>
</x-layouts.app>