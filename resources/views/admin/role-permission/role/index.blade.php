<x-layouts.app :title="__('Role List')">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Role List</h4>
                        <a href="{{ url('admin/roles/create') }}" class="btn btn-accent float-end">Add Role</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Role Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            <a href="{{ url('admin/roles/'. $role->id . '/give-permissions') }}" class="btn btn-warning">Add | Edit Role Permission</a>
                                            <a href="{{ route('edit.roles', $role ) }}" class="btn btn-success">Rename</a>
                                            <a href="{{ url('admin/roles/' . $role->id . '/delete') }}" class="btn btn-secondary">Delete</a>
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