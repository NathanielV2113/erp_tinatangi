<x-layouts.app :title="__('Create Employee')">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                <div>
                    <div class="breadcrumbs text-sm ml-12">
                        <ul>
                            <li><a>Emloyees</a></li>
                            <li>Create</li>
                        </ul>
                    </div>
                    <div class="ml-12">
                        <h1 class="text-2xl font-bold">Create Employee</h1>
                    </div>
                    <form action="{{ route('hrm.employees.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('modules.hrm.employee.form')
                        <div class="form-group mb-10 mt-5 ml-12">
                            <button type="submit" class="btn btn-success">Add</button>
                            <a href="{{ route('hrm.employees') }}" class="btn btn-error">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>