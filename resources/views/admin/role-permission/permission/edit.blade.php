<x-layouts.app :title="__('Edit Permission')">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Permission</h4>
                        <a href="{{ url('admin/permissions') }}" class="btn btn-soft btn-secondary float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.permissions', $permission) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="">Permission Name: </label>
                            <input type="text" name="name" class="form-control" value="{{ $permission->name }}">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-soft btn-success">Update</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>