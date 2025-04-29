<x-layouts.app :title="__('Create Department')">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                <div class="breadcrumbs text-sm ml-12">
                        <ul>
                            <li><a>Departments</a></li>
                            <li>Create</li>
                        </ul>
                    </div>
                    <div class="ml-12">
                        <h1 class="text-2xl font-bold">Create Department</h1>
                    </div>
                    <form action="{{ route('hrm.departments.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('modules.hrm.department.form')
                        <div class="form-group mb-10 mt-5 ml-12">
                            <button type="submit" class="btn btn-soft btn-success">Save</button>
                            <a href="{{ route('hrm.departments') }}" class="btn btn-soft btn-error">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>