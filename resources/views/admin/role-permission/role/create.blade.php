<x-layouts.app :title="__('Create Role')">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Role</h4>
                        <a href="{{ url('admin/roles') }}" class="btn btn-soft btn-primary float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store.roles') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">Role Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Role Name">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-soft btn-success">Save</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>