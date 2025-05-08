<x-layouts.app :title="__('Scheduling')">

    <!-- head: below existing links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@4.0.1/dist/css/multi-select-tag.min.css">


    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="bg-white dark:bg-amber-950 shadow-md rounded-lg p-6 ml-10">
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
                                        <th>Deployment</th>
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
                                        <td>{{ $sched->deployment }}</td>
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
        <form action="{{ route('hrm.scheduling.store') }}">
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">Add Schedule</flux:heading>
                </div>

                <flux:input name="type" label="Shift" placeholder="e.g. Morning, Night" />
                <flux:input name="start_time" label="Start Time" type="time" />
                <flux:input name="end_time" label="End Time" type="time" />

                <flux:select id="work_days" name="work_days[]" label="Work Days" multiple>
                    <option value="1">Monday</option>
                    <option value="2">Tuesday</option>
                    <option value="3">Wednesday</option>
                    <option value="4">Thursday</option>
                    <option value="5">Friday</option>
                    <option value="6">Saturday</option>
                    <option value="0">Sunday</option>
                </flux:select>
                <flux:input id="dayoff" name="dayoff[]" label="Dayoff" readonly />

                <div class="flex">
                    <flux:spacer />

                    <flux:button type="submit" variant="primary">Add Schedule</flux:button>
                </div>
            </div>
        </form>
    </flux:modal>
    @foreach ($scheds as $sched)
    <flux:modal :name="'edit-sched'.$sched->id" class="md:w-96">
        <form action="{{ route('hrm.scheduling.update', $sched) }}" method="post">
            @csrf
            @method('PUT')
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">Edit Schedule</flux:heading>
                </div>

                <flux:input name="type" label="Shift" placeholder="e.g. morning, night" value="{{ old('type', $sched->type ?? '') }}" />
                <flux:input name="start_time" label="Start Time" type="time" value="{{ old('start_time', $sched->start_time ?? '') }}" />
                <flux:input name="end_time" label="End Time" type="time" value="{{ old('end_time', $sched->end_time ?? '') }}" />
                <flux:input name="work_days" label="Work Days" placeholder="monday-friday" value="{{ old('work_days', $sched->work_days ?? '') }}" />
                <flux:input name="dayoff" label="Dayoff" placeholder="friday" value="{{ old('dayoff', $sched->dayoff ?? '') }}" />
                <flux:input name="deployment" label="Deployment" placeholder="..." value="{{ old('deployment', $sched->deployment ?? '') }}" />

                <div class="flex">
                    <flux:spacer />

                    <flux:button type="submit" variant="primary">Save Changes</flux:button>
                </div>
            </div>
        </form>
    </flux:modal>
    @endforeach

    <!-- End of <body> -->
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@4.0.1/dist/js/multi-select-tag.min.js"></script>
    <script>
        var workDaysSelector = new MultiSelectTag('work_days', {
            maxSelection: 5,
            required: true,
            placeholder: 'Select Work Days',
        });


        document.addEventListener("DOMContentLoaded", function() {
            const workDaysSelect = document.getElementById("work_days");
            const dayOffInput = document.getElementById("dayoff");

            if (!workDaysSelect || !dayOffInput) {
                console.error("Error: Elements not found.");
                return;
            }

            function updateDayOffValue() {
                let allDays = ["0", "1", "2", "3", "4", "5", "6"]; // Sunday-Saturday values
                let selectedWorkDays = Array.from(workDaysSelect.selectedOptions).map(option => option.value);
                let unselectedDays = allDays.filter(day => !selectedWorkDays.includes(day));

                console.log("Unselected Days:", unselectedDays);

                // Update input value with unselected days
                dayOffInput.value = unselectedDays.map(day => {
                    return workDaysSelect.querySelector(`option[value="${day}"]`).textContent;
                }).join(", ");

                // Force UI refresh for frameworks like Flux
                setTimeout(() => {
                    dayOffInput.dispatchEvent(new Event("input"));
                }, 50); // Small delay ensures UI updates correctly
            }

            // Use "change" instead of "click" for dropdown selections
            workDaysSelect.addEventListener("change", updateDayOffValue);
            updateDayOffValue(); // Ensure initial state updates
        });







        // document.addEventListener("DOMContentLoaded", function() {
        //     const workDaysSelect = document.getElementById("work_days");
        //     const dayOffInput = document.getElementById("dayoff");

        //     if (!workDaysSelect || !dayOffInput) {
        //         console.error("Elements not found.");
        //         return;
        //     }

        //     function updateDayOffValue() {
        //         let allDays = ["0", "1", "2", "3", "4", "5", "6"]; // Corresponding values for Sunday-Saturday
        //         let selectedWorkDays = Array.from(workDaysSelect.selectedOptions).map(option => option.value);
        //         let unselectedDays = allDays.filter(day => !selectedWorkDays.includes(day));

        //         console.log("Unselected Days:", unselectedDays);

        //         // Set the Dayoff input field with unselected days
        //         dayOffInput.value = unselectedDays.map(day => {
        //             return workDaysSelect.querySelector(`option[value="${day}"]`).textContent;
        //         }).join(", ");
        //     }

        //     workDaysSelect.addEventListener("change", updateDayOffValue);
        //     updateDayOffValue(); // Run on page load
        // });
    </script>
</x-layouts.app>