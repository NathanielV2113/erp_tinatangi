<x-layouts.app :title="__('Scheduling')">
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
                                        <th>Remarks</th>
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
                                        <td>{{ $sched->remarks }}</td>
                                        <td class="flex gap-2">
                                            <flux:modal.trigger :name="'edit-sched'.$sched->id">
                                                <button class="btn btn-soft btn-accent">Edit</button>
                                            </flux:modal.trigger>

                                            <button class="btn btn-soft btn-secondary" onclick="confirmDeletion('{{ route('hrm.scheduling.delete', $sched->id) }}')">
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

                <flux:input name="type" label="Shift" placeholder="e.g. day, night" />
                <flux:input name="start_time" label="Start Time" type="time" />
                <flux:input name="end_time" label="End Time" type="time" />
                <flux:input name="work_days" label="Work Days" placeholder="monday-friday" />
                <flux:input name="dayoff" label="Dayoff" placeholder="friday" />
                <flux:input name="remarks" label="Remarks" placeholder="..." />

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

                <flux:input name="type" label="Shift" placeholder="e.g. day, night" value="{{ old('type', $sched->type ?? '') }}"/>
                <flux:input name="start_time" label="Start Time" type="time" value="{{ old('start_time', $sched->start_time ?? '') }}"/>
                <flux:input name="end_time" label="End Time" type="time" value="{{ old('end_time', $sched->end_time ?? '') }}"/>
                <flux:input name="work_days" label="Work Days" placeholder="monday-friday" value="{{ old('work_days', $sched->work_days ?? '') }}"/>
                <flux:input name="dayoff" label="Dayoff" placeholder="friday" value="{{ old('dayoff', $sched->dayoff ?? '') }}"/>
                <flux:input name="remarks" label="Remarks" placeholder="..." value="{{ old('remarks', $sched->remarks ?? '') }}"/>

                <div class="flex">
                    <flux:spacer />

                    <flux:button type="submit" variant="primary">Save Changes</flux:button>
                </div>
            </div>
        </form>
    </flux:modal>
    @endforeach

</x-layouts.app>