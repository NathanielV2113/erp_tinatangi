<x-layouts.app :title="__('Edit Role')">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Role : {{ $role->name }}</h4>
                        <a href="{{ route('roles') }}" class="btn btn-secondary float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/roles/'. $role->id . '/give-permissions') }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            @error('permission')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <label for="">Permissions</label>
                            <div class="mb-3">
                                <div class="row">
                                    @foreach ($permissions as $permission)
                                        <div class="col-md-3">
                                            <label>
                                                <input 
                                                    type="checkbox" 
                                                    name="permission[]" 
                                                    value="{{ $permission->name }}" 
                                                    {{  in_array($permission->id, $rolePermissions) ? 'checked':'' }}
                                                />
                                                {{ $permission->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
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