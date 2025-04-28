<x-layouts.app.sidebar :title="$title ?? null">
    @include('sweetalert2::index')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <flux:main class="bg-warm-white">
        {{ $slot }}
    </flux:main>
</x-layouts.app.sidebar>
