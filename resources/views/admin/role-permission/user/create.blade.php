<x-layouts.app :title="__('Create User')">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create User</h4>
                        <a href="{{ url('admin/users') }}" class="btn btn-primary float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/users') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">Full Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Full Name">
                        </div>
                        <div class="mb-3">
                            <label for="">Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="example@email.com">
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="********">
                        </div>
                        <div class="mb-3">
                            <label for="">Role</label>
                            <select name="roles[]" class="form-control" multiple>
                                <option value="">Select Role</option>
                                @foreach ($roles as $role)
                                <option value="{{ $role }}">{{ $role }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success">Save</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>