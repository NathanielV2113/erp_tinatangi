<x-layouts.app.sidebar :title="$title ?? null">
    <flux:main class="bg-warm-white">
        {{ $slot }}
    </flux:main>
</x-layouts.app.sidebar>
