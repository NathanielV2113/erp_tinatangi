<x-layouts.app.sidebar :title="$title ?? null">
    <flux:main class="bg-warm-white">
        @if(session('success'))
        <script>
            Swal.fire({
                title: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'Okay'
            });
        </script>
        @endif
        @if(session('failed'))
        <script>
            Swal.fire({
                title: "{{ session('failed') }}",
                icon: 'error',
                confirmButtonText: 'Okay'
            });
        </script>
        @endif
        {{ $slot }}
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
    </flux:main>
</x-layouts.app.sidebar>