@extends('modules.hrm.scheduling.sched-layout')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white dark:bg-amber-950 shadow-md rounded-b-lg p-6">
                    <div class="flex w-full">
                        <div class="w-1/2">
                            <h1 class="text-2xl font-semibold">Scheduling</h1>
                        </div>
                        <div class="w-1/2 text-right">
                            <flux:modal.trigger name="add-sched">
                                <button class="btn btn-soft btn-accent">Add Schedule</button>
                            </flux:modal.trigger>
                        </div>
                    </div>
                    <!-- ............................................................................... -->
                    <div class="overflow-x-auto mt-9 h-[750px] justify-evenly">
                        <div class="h-[700px]">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Shift</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Work Days</th>
                                        <th>Dayoff</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($scheds as $index => $sched)
                                    <tr>
                                        <td>{{ $scheds->firstItem() + $index }}</td>
                                        <td>{{ $sched->type }}</td>
                                        <td>{{ $sched->start_time }}</td>
                                        <td>{{ $sched->end_time }}</td>
                                        <td>{{ $sched->work_days }}</td>
                                        <td>{{ $sched->dayoff }}</td>
                                        <td class="flex gap-2">
                                            <flux:modal.trigger :name="'edit-sched'.$sched->id">
                                                <button class="btn btn-soft btn-accent">Edit</button>
                                            </flux:modal.trigger>

                                            <button class="btn btn-soft btn-secondary dark:bg-neutral-800" onclick="confirmDeletion('{{ route('hrm.scheduling.delete', $sched->id) }}')">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="join mt-3 dark:bg-neutral-800">
                            {{ $scheds->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <flux:modal name="add-sched" class="md:w-96">
        <form action="{{ route('hrm.scheduling.store') }}" id="addForm">
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">Add Schedule</flux:heading>
                </div>

                <flux:input name="type" label="Shift" placeholder="e.g. Morning, Night" />
                <flux:input name="start_time" label="Start Time" type="time" />
                <flux:input name="end_time" label="End Time" type="time" />

                <flux:select id="work_days" name="work_days[]" label="Work Days" multiple>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </flux:select>
                <flux:input id="dayoff" name="dayoff[]" label="Dayoff" readonly />

                <div class="flex">
                    <flux:spacer />

                    <flux:button id="done" type="submit" variant="primary">Add Schedule</flux:button>
                </div>
            </div>
        </form>
    </flux:modal>
    @foreach ($scheds as $sched)
    <?php
    $selectedDays = explode(',', $sched->work_days);
    ?>
    <flux:modal :name="'edit-sched'.$sched->id" class="md:w-96">
        <form action="{{ route('hrm.scheduling.update', $sched) }}" method="post">
            @csrf
            @method('PUT')
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">Edit Schedule</flux:heading>
                </div>

                <flux:input name="type" label="Shift" placeholder="e.g. Morning, Night" value="{{ old('type', $sched->type ?? '') }}"/>
                <flux:input name="start_time" label="Start Time" type="time" value="{{ old('start_time', $sched->start_time ?? '') }}"/>
                <flux:input name="end_time" label="End Time" type="time" value="{{ old('end_time', $sched->end_time ?? '') }}"/>

                <flux:select id="edit_work_days" name="work_days[]" label="Work Days" multiple >
                    <option value="Monday" {{ in_array('Monday', $selectedDays) ? 'selected' : '' }}>Monday</option>
                    <option value="Tuesday" {{ in_array('Tuesday', $selectedDays) ? 'selected' : '' }}>Tuesday</option>
                    <option value="Wednesday" {{ in_array('Wednesday', $selectedDays) ? 'selected' : '' }}>Wednesday</option>
                    <option value="Thursday" {{ in_array('Thursday', $selectedDays) ? 'selected' : '' }}>Thursday</option>
                    <option value="Friday" {{ in_array('Friday', $selectedDays) ? 'selected' : '' }}>Friday</option>
                    <option value="Saturday" {{ in_array('Saturday', $selectedDays) ? 'selected' : '' }}>Saturday</option>
                    <option value="Sunday" {{ in_array('Sunday', $selectedDays) ? 'selected' : '' }}>Sunday</option>
                </flux:select>
                <flux:input id="edit_dayoff" name="dayoff[]" label="Dayoff" readonly value="{{ old('dayoff', $sched->dayoff ?? '') }}"/>

                <div class="flex">
                    <flux:spacer />

                    <flux:button type="submit" variant="primary">Save Changes</flux:button>
                </div>
            </div>
        </form>
    </flux:modal>
    @endforeach

    <!-- End of <body> -->

    <script>
        var workDaysSelector = new MultiSelectTag('work_days', {
            maxSelection: 5,
            required: true,
            placeholder: 'Select Work Days',
        });

        var edit_workDaysSelector = new MultiSelectTag('edit_work_days', {
            maxSelection: 5,
            required: true,
            placeholder: 'Select Work Days',
        });

        var workDaysSelect = document.getElementById("work_days");
        var dayOffInput = document.getElementById("dayoff");
        var edit_workDaysSelect = document.getElementById("edit_work_days");
        var edit_dayOffInput = document.getElementById("edit_dayoff");

        function updateDayOffValue() {
            let allDays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]; // Sunday-Saturday values
            let selectedWorkDays = Array.from(workDaysSelect.selectedOptions).map(option => option.value);
            let unselectedDays = allDays.filter(day => !selectedWorkDays.includes(day));

            // console.log("Unselected Days:", unselectedDays);

            // Update input value with unselected days
            dayOffInput.value = unselectedDays.map(day => {
                return workDaysSelect.querySelector(`option[value="${day}"]`).textContent;
            }).join(", ");

            // Force UI refresh for frameworks like Flux
            setTimeout(() => {
                dayOffInput.dispatchEvent(new Event("input"));
            }, 50); // Small delay ensures UI updates correctly
        }

        function edit_updateDayOffValue() {
            let edit_allDays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]; // Sunday-Saturday values
            let edit_selectedWorkDays = Array.from(edit_workDaysSelect.selectedOptions).map(option => option.value);
            let edit_unselectedDays = edit_allDays.filter(day => !edit_selectedWorkDays.includes(day));

            // console.log("Unselected Days:", unselectedDays);

            // Update input value with unselected days
            edit_dayOffInput.value = edit_unselectedDays.map(day => {
                return edit_workDaysSelect.querySelector(`option[value="${day}"]`).textContent;
            }).join(", ");

            // Force UI refresh for frameworks like Flux
            setTimeout(() => {
                edit_dayOffInput.dispatchEvent(new Event("input"));
            }, 50); // Small delay ensures UI updates correctly
        }

        document.addEventListener("DOMContentLoaded", function() {
            workDaysSelect = document.getElementById("work_days");
            dayOffInput = document.getElementById("dayoff");
            if (!workDaysSelect || !dayOffInput) {
                console.error("Error: Elements not found.");
                return;
            }
            const tag = document.getElementById("dropdown");
            const field = document.getElementById("selected-tags");
            
            field.addEventListener("click", updateDayOffValue);
            tag.addEventListener("click", updateDayOffValue);
            updateDayOffValue(); // Ensure initial state updates

            edit_workDaysSelect = document.getElementById("edit_work_days");
            edit_dayOffInput = document.getElementById("edit_dayoff");
            if (!edit_workDaysSelect || !edit_dayOffInput) {
                console.error("Error: Elements not found.");
                return;
            }
            const edit_tag = document.getElementById("dropdown");
            const edit_field = document.getElementById("selected-tags");
            
            edit_field.addEventListener("click", edit_updateDayOffValue);
            edit_tag.addEventListener("click", edit_updateDayOffValue);
            edit_updateDayOffValue(); // Ensure initial state updates
        });

        document.addEventListener("DOMContentLoaded", function() {
            // window.location.reload();

        });
    </script>
@endsection