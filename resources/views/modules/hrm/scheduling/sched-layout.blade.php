<x-layouts.app :title="__('Scheduling')">
    <flux:header class="block! bg-white rounded-t-lg shadow-md">
        <flux:navbar scrollable>
            <flux:navbar.item href="{{ route('hrm.scheduling') }}" :current="request()->routeIs('hrm.scheduling')">Schedules</flux:navbar.item>
            <flux:navbar.item href="{{ route('hrm.scheduling.employees') }}" :current="request()->routeIs('hrm.scheduling.employees')">Manage Employee Schedule</flux:navbar.item>
        </flux:navbar>
    </flux:header>
    @yield('content')
    @fluxScripts
</x-layouts.app>