<x-layouts.app>
    <div class="mt-10 ml-10 dark:bg-neutral-800">
        <div>
            <h1 class="text-3xl font-semibold dark:bg-neutral-800">Human Resources Management</h1>
        </div>

        <div class="grid grid-cols-3 gap-0 dark:bg-neutral-800">
            <div class="col-span-2 dark:bg-neutral-800">
                <div class="grid grid-flow-col grid-rows-2 gap-0 dark:bg-neutral-800">
                    <div class="h-[210px] dark:bg-neutral-800">
                        <div class="grid grid-cols-3 gap-1 mt-12 w-5xl dark:bg-neutral-800">
                            <div>
                                <div class="stats shadow p-4 bg-white dark:bg-neutral-800">
                                    <div class="stat text-coffee dark:bg-neutral-800">
                                        <div class="stat-figure text-coffee dark:bg-neutral-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 dark:bg-neutral-800">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                                            </svg>
                                        </div>
                                        <div class="stat-title font-bold dark:bg-neutral-800">Total Employees</div>
                                        <div class="stat-value dark:bg-neutral-800">{{ $total_employees }}</div>
                                        <div class="stat-desc dark:bg-neutral-800">Overall headcount of employees</div>
                                    </div>
                                </div>
                            </div>
                            <!-- ... -->
                            <div>
                                <div class="stats shadow p-4 bg-white dark:bg-neutral-800">
                                    <div class="stat text-success dark:bg-neutral-800">
                                        <div class="stat-figure text-success dark:bg-neutral-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 dark:bg-neutral-800">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                                            </svg>

                                        </div>
                                        <div class="stat-title font-bold dark:bg-neutral-800">Hires</div>
                                        <div class="stat-value dark:bg-neutral-800">{{ $hires->count() }}</div>
                                        <div class="stat-desc dark:bg-neutral-800">New employees in this month</div>
                                    </div>
                                </div>
                            </div>
                            <!-- ... -->
                            <div>
                                <div class="stats shadow p-4 bg-white dark:bg-neutral-800">
                                    <div class="stat text-error dark:bg-neutral-800">
                                        <div class="stat-figure text-error dark:bg-neutral-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 dark:bg-neutral-800">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M22 10.5h-6m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM4 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 10.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                                            </svg>

                                        </div>
                                        <div class="stat-title font-bold dark:bg-neutral-800">Termination</div>
                                        <div class="stat-value dark:bg-neutral-800">{{ $terminated_employees }}</div>
                                        <div class="stat-desc dark:bg-neutral-800">Terminated employees this month</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ... -->
                    <div class="mt-[-135px] bg-white shadow rounded-2xl w-[985px] dark:bg-neutral-800">
                        <div class="mt-5 ml-10 dark:bg-neutral-800">
                            <h1 class="text-2xl font-bold dark:bg-neutral-800">
                                Chart Display
                            </h1>
                        </div>
                        <canvas class=" bg-white p-8 dark:bg-neutral-800" id="myChart" width="90" height="42"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-span-1 dark:bg-neutral-800">
                <div class="overflow-x-auto bg-white mt-12 p-4 rounded-md h-[700px] shadow dark:bg-neutral-800">
                    <div class="mt-5 ml-5 mb-5 dark:bg-neutral-800">
                        <h1 class="font-semibold text-lg dark:bg-neutral-800">
                            New Employees
                        </h1>
                    </div>
                    <table class="table dark:bg-neutral-800">
                        <thead>
                            <th>#</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Date hired</th>
                        </thead>
                        <tbody>
                            <?php $count = 0 ?>
                            @foreach ($hires->sortByDesc('hire_date') as $hire)
                            <tr>
                                <td>{{ ++$count }}</td>
                                <td>{{ $hire->first_name }}</td>
                                <td>{{ $hire->last_name }}</td>
                                <td>{{ $hire->hire_date->format('M d Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>



        </div>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('[class]').forEach(el => {
                el.className += ' :dark';
            });
        });
    </script>

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
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.9/dist/chart.umd.min.js"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <script>
        const ctx2 = document.getElementById('myChart2').getContext('2d');
        const myChart2 = new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</x-layouts.app>