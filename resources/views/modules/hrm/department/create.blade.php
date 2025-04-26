<x-layouts.app :title="__('Create Department')">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                <div class="card">
                    <div class="header">
                        <h1 class="text-2xl font-semibold">Create Department</h1>
                    </div>
                    <form action="{{ route('hrm.departments.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('modules.hrm.department.form')
                        <div class="form-group">
                            <button type="submit" class="btn btn-soft btn-success">Save</button>
                            <a href="{{ route('hrm.departments') }}" class="btn btn-soft btn-error">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>