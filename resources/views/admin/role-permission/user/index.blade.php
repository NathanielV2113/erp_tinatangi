<x-layouts.app :title="__('User List')">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>User List</h4>
                        <a href="{{ url('admin/users/create') }}" class="btn btn-soft btn-accent float-end">Add User</a>
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
                                            <a href="{{ url('admin/users/' . $user->id . '/delete') }}" class="btn btn-soft btn-secondary">Delete</a>
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
</x-layouts.app>