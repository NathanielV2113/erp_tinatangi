<x-layouts.app :title="__('Payroll')">
    @if(session('success'))
    <script>
        Swal.fire({
            title: "{{ session('success') }}",
            icon: 'success',
            confirmButtonText: 'Okay'
        });
    </script>
    @endif
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="bg-white dark:bg-amber-950 shadow-md rounded-lg p-6 ml-10">
                    <div class="flex w-full">
                        <div class="w-1/2">
                            <h1 class="text-2xl font-semibold">Payroll</h1>
                        </div>
                        <div class="w-1/2 text-right">
                            <a href="" class="btn btn-soft btn-accent">Generate Payroll</a>
                        </div>
                    </div>
                    <div class="overflow-x-auto mt-9 h-[750px] justify-evenly">
                        <div class="h-[700px]">
                            <table class="table">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Full Name</th>
                                        <th>Department</th>
                                        <th>Pay Period</th>
                                        <th>Days Present</th>
                                        <th>Days Absent</th>
                                        <th>Late</th>
                                        <th>Over Time</th>
                                        <th>Salary</th>
                                        <th>Bonus</th>
                                        <th>Advance Payments</th>
                                        <th>Deductions</th>
                                        <th>Tax</th>
                                        <th>Net Pay</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="join mt-3">
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-layouts.app>