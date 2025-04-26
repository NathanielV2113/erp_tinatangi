<div>
    @if (!empty($department))
    <div class="form-group">
        <label for="name">Department Name</label>
        <input readonly type="text" name="name" id="name" class="input" value="{{ old('name', $department->name ?? '') }}" required>
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    @else
    <div class="form-group">
        <label for="name">Department Name</label>
        <input type="text" name="name" id="name" class="input" value="{{ old('name', $department->name ?? '') }}" required>
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    @endif
    <div class="form-group mt-3">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="input">{{ old('description', $department->description ?? '') }}</textarea>
        @error('description')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mt-3">
        <label for="head">Head</label>
        <select name="head" id="head" class="input">
            @foreach ($employees as $employee)
            <option value="{{ $employee->id }}" {{ (isset($employee) && $employee->first_name . ' ' . $employee->last_name == $department->head) ? 'selected' : '' }}>
                {{ $employee->first_name . ' ' . $employee->last_name }}
            </option>
            @endforeach
        </select>
        @error('head')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mt-3">
        <label for="status">Status</label>
        <select name="status" id="status" class="input">
            <option value="active" {{ (isset($department) && $department->status == 'active') ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ (isset($department) && $department->status == 'inactive') ? 'selected' : '' }}>Inactive</option>
        </select>
        @error('status')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>