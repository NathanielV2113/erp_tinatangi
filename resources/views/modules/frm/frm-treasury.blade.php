<x-layouts.app :title="__('Treasury')">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=delete" />
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="bg-white dark:bg-amber-950 shadow-md rounded-lg p-6 ml-10">
                    <div class="flex w-full">
                        <div class="w-1/2">
                            <h1 class="text-2xl font-semibold">Treasury</h1>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmDeletion(url) {
            Swal.fire({
                title: 'Are you sure you want to delete?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url; // Redirect to deletion route
                }
            });
        }
    </script>
</x-layouts.app>