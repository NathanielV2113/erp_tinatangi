<x-layouts.app>
    <div class="mt-10 ml-10">
        <div>
            <h1 class="text-3xl font-semibold">Finance Risk Management</h1>
        </div>

        <div class="grid grid-cols-3 gap-0">
            <div class="col-span-2">
                <div class="grid grid-flow-col grid-rows-2 gap-1">
                    <div>
                        <div class="grid grid-cols-3 gap-1 mt-6 w-5xl">
                            <div>
                                <div class="stats shadow p-4 bg-white">
                                    <div class="stat text-coffee">
                                        <div class="stat-figure text-coffee">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                                            </svg>
                                        </div>
                                        <div class="stat-title font-bold">Total Employees</div>
                                        <div class="stat-value"></div>
                                        <div class="stat-desc">Overall headcount of employees</div>
                                    </div>
                                </div>
                            </div>
                            <!-- ... -->
                            <div>
                                <div class="stats shadow p-4 bg-white">
                                    <div class="stat text-success">
                                        <div class="stat-figure text-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                                            </svg>

                                        </div>
                                        <div class="stat-title font-bold">Hires</div>
                                        <div class="stat-value"></div>
                                        <div class="stat-desc">New employees in this month</div>
                                    </div>
                                </div>
                            </div>
                            <!-- ... -->
                            <div>
                                <div class="stats shadow p-4 bg-white">
                                    <div class="stat text-error">
                                        <div class="stat-figure text-error">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M22 10.5h-6m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM4 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 10.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                                            </svg>

                                        </div>
                                        <div class="stat-title font-bold">Termination</div>
                                        <div class="stat-value"></div>
                                        <div class="stat-desc">Terminated employees this month</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ... -->
                    <div>
                        <div class="charts bg-white">
                            <div class="chart">
                                <h2 id="title"></h2>
                                <canvas id="bar"></canvas>
                            </div>
                            <div class="chart" id="bar-chart">
                                <h2></h2>
                                <canvas id="bar"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="overflow-x-auto bg-white mt-6 p-4 rounded-md h-[800px] shadow">
                    <table class="table">
                        <thead>
                            <th>#</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Date hired</th>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>



        </div>

    </div>

    <style>
        .charts {
        display: grid;
        grid-template-columns: 2fr 1fr;
        grid-gap: 20px;
        width: 100%;
        padding: 20px;
        padding-top: 0;
    }

    .chart {
        margin-top: 20px;
        text-align: center;
        background: var(--true_white);
        padding: 20px;
        border-radius: 20px;
        box-shadow: 0 7px 25px var(--null_grey);
    }
    </style>

    <script>
    var ctx3 = document.getElementById('bar').getContext('2d');
    var myChart3 = new Chart(ctx3, {
        type: 'bar',
        data: {
            labels: '',
            datasets: ''
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

</x-layouts.app>