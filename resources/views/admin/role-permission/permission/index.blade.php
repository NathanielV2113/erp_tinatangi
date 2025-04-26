<x-layouts.app :title="__('Permission List')">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Permission List</h4>
                        <a href="{{ url('admin/permissions/create') }}" class="btn btn-accent float-end">Add Permission</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Permission Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $permission)
                                    <tr>
                                        <td>{{ $permission->name }}</td>
                                        <td>
                                            <a href="{{ route('edit.permissions', $permission ) }}" class="btn btn-success">Rename</a>
                                            <a href="{{ url('admin/permissions/' . $permission->id . '/delete') }}" class="btn btn-secondary">Delete</a>
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