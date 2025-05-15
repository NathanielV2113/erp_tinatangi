@extends('modules.hrm.scheduling.sched-layout')
@section('content')
<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="bg-white dark:bg-amber-950 shadow-md rounded-b-lg p-14">
                <div class="flex w-full mb-5">
                    <div class="w-1/2">
                        <h1 class="text-2xl font-semibold">Give Schedule to: {{ $employee->first_name }}</h1>
                    </div>
                    <!-- <div class="w-1/2 text-right">
                        </div> -->
                </div>
                <!-- ............................................................................... -->
                <form id="scheduleForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="employeeId" name="employeeId" value="{{ $employee->id }}" hidden>
                    <flux:select name="schedule" id="schedule" class="input">
                        <option value="">Select Schedule</option>
                        @foreach ($schedules as $sched)
                        <option value="{{ $sched->id }}">{{ $sched->type }}</option>
                        @endforeach
                    </flux:select>
                    <div class="form-group mb-10 mt-5 ">
                        <button id="submit" type="submit" class="btn btn-soft btn-success">Save</button>
                        <a href="{{ route('hrm.scheduling.employees') }}" class="btn btn-soft btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     // Initialize any necessary JavaScript or jQuery plugins here
    //     const submitButton = document.getElementById('submit');
    //     submitButton.addEventListener('click', function(event) {
    //         event.preventDefault(); // Prevent default form submission
    $(document).ready(function() {
        $('form').on('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            var employeeId = $('#employeeId').val(); // Get employee ID from a hidden input or data attribute
            var scheduleId = $('#schedule').val(); // Get selected schedule ID from dropdown

            $.ajax({
                url: '/hrm/scheduling/employee_scheduling/give/' + employeeId + '/' + scheduleId,
                type: 'PUT',
                data: {
                    _token: '{{ csrf_token() }}',
                    employeeId: employeeId,
                    scheduleId: scheduleId
                },
                success: function(response) {
                    window.location.href = "{{ route('hrm.scheduling.employees') }}";
                },
                error: function(xhr, status, error) {
                    window.location.href = "{{ route('hrm.scheduling.employees') }}";

                }
            });
        });
    }); // Submit the form programmatically
    //     });
    // });
</script>
@endsection