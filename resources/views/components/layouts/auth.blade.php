<x-layouts.auth.card :title="$title ?? null">
    @include('sweetalert2::index')
    {{ $slot }}
</x-layouts.auth.card>
