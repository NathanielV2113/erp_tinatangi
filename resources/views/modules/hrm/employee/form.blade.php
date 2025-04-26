<div class="grid grid-cols-1 gap-12 mt-5 ml-12">
    <div class="bg-white p-5 rounded-lg w-[1200px]">
        <div>
            <h1 class="font-bold">Personal Information</h1>
            <h2>Fill in the personal details below.</h2>
        </div>
        <div class="divider"></div>
        <div class="form-group mt-4">
            <label class="font-medium" for="name">First Name</label>
            <input type="text" name="first_name" id="first_name" class="input w-full bg-white mt-2" value="{{ old('first_name', $employee->first_name ?? '') }}" required>
            @error('first_name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mt-4">
            <label class="font-medium" for="name">Middle Name</label>
            <input type="text" name="middle_name" id="middle_name" class="input w-full bg-white mt-2" value="{{ old('middle_name', $employee->middle_name ?? '') }}">
            @error('middle_name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mt-4">
            <label class="font-medium" for="name">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="input w-full bg-white mt-2" value="{{ old('last_name', $employee->last_name ?? '') }}" required>
            @error('last_name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        @if (!empty($employee->id))
        <div class="form-group mt-4">
            <label class="font-medium" for="email">Email Address</label>
            <input readonly type="email" name="email" id="email" class="input w-full bg-white mt-2" value="{{ old('email', $employee->email ?? '') }}" required>
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        @else
        <div class="form-group mt-4">
            <label class="font-medium" for="email">Email Address</label>
            <input type="email" name="email" id="email" class="input w-full bg-white mt-2" value="{{ old('email', $employee->email ?? '') }}" required>
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        @endif

        <div class="form-group mt-4">
            <label class="font-medium" for="contact_no">Contact No.</label>
            <input type="text" name="phone" id="phone" class="input w-full bg-white mt-2" value="{{ old('phone', $employee->phone ?? '') }}">
            @error('phone')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

    </div>
    <!-- ... -->
    <div class="bg-white p-5 rounded-lg w-[1200px]">
        <div>
            <h1 class="font-bold">Employee Information</h1>
            <h2>Fill in the employee details below.</h2>
        </div>
        <div class="divider"></div>
        <div class="form-group mt-4">
            <label class="font-medium" for="department">Department</label>
            <select name="department" id="department" class="input w-full bg-white mt-2">
                @foreach ($departments as $department)
                <option value="{{ $department->id }}" {{ (isset($employee) && $employee->department == $department->name) ? 'selected' : '' }}>
                    {{ $department->name }}
                </option>
                @endforeach
            </select>
            @error('department_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mt-4">
            <label class="font-medium" for="job_title">Job Title</label>
            <input type="text" name="position" id="position" class="input w-full bg-white mt-2" value="{{ old('position', $employee->position ?? '') }}">
            @error('position')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mt-4">
            <label class="font-medium" for="address">Address</label>
            <input name="address" id="address" class="input w-full bg-white mt-2" value="{{ old('address', $employee->address ?? '') }}">
            @error('address')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        @if (!empty($employee->id))
        <div class="form-group mt-4">
            <label class="font-medium" for="hire_date">Date of Hire</label>
            <input type="date" name="hire_date" id="hire_date" class="input w-full bg-white mt-2"
                value="
        @if($employee->hire_date == null)
            old('hire_date', $employee->hire_date ?? '') 
        @else
            old('hire_date', $employee->hire_date->format('d-M-Y') ?? '') 
        @endif
        ">
            @error('hire_date')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        @else
        <div class="form-group mt-4">
            <label class="font-medium" for="hire_date">Date of Hire</label>
            <input type="date" name="hire_date" id="hire_date" class="input w-full bg-white mt-2" value="{{ old('hire_date', $employee->hire_date ?? '') }}">
            @error('hire_date')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        @endif
        <div class="form-group mt-4">
            <label class="font-medium" for="status">Status</label>
            <select name="status" id="status" class="input w-full bg-white mt-2">
                <option value="active" {{ (isset($employee) && $employee->status == 'active') ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ (isset($employee) && $employee->status == 'inactive') ? 'selected' : '' }}>Inactive</option>
                <option value="terminated" {{ (isset($employee) && $employee->status == 'terminated') ? 'selected' : '' }}>Terminated</option>
            </select>
            @error('status')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>