<x-layouts.app.sidebar :title="$title ?? null">
    <flux:main class="bg-warm-white dark:bg-neutral-800">
        
        {{ $slot }}
        @if(session('success'))
        <script>
            Toast.fire({
                icon: "success",
                title: "{{ session('success') }}"
            });
        </script>
        @endif
        @if(session('failed'))
        <script>
            Toast.fire({
                icon: "error",
                title: "{{ session('failed') }}"
            });
        </script>
        @endif
       
    </flux:main>
</x-layouts.app.sidebar>