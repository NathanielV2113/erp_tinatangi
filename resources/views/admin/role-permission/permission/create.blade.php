<x-layouts.app :title="__('Create Permission')">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Permission</h4>
                        <a href="{{ url('admin/permissions') }}" class="btn btn-soft btn-primary float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store.permissions') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">Permission Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Permission Name">
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