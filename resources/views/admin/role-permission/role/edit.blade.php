<x-layouts.app :title="__('Edit Role')">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Role</h4>
                        <a href="{{ url('admin/roles') }}" class="btn btn-secondary float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.roles', $role) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="">Role Name: </label>
                            <input type="text" name="name" class="form-control" value="{{ $role->name }}">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success">Update</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>