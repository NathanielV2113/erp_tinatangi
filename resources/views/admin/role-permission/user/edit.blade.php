<x-layouts.app :title="__('Edit User')">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit User</h4>
                        <a href="{{ url('admin/users') }}" class="btn btn-primary float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/users/'. $user->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="">Full Name</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Enter Full Name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Email Address</label>
                            <input type="email" name="email" readonly value="{{ $user->email }}" class="form-control" placeholder="example@email.com">
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="********">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Role</label>
                            <select name="roles[]" class="form-control" multiple>
                                <option value="">Select Role</option>
                                @foreach ($roles as $role)
                                <option 
                                    value="{{ $role }}"
                                    {{ in_array($role, $userRoles) ? 'selected' : '' }}
                                >
                                    {{ $role }}</option>
                                @endforeach
                            </select>
                            @error('roles')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
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