<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="autumn">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">
    <flux:sidebar sticky stashable class="border-r border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <a href="{{ route('dashboard') }}" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
            <x-app-logo />
        </a>

        <flux:navlist variant="outline">
            @role('super-admin')
            <flux:navlist.group :heading="__('Admin')" class="grid">
                <flux:navlist.item icon="home" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>
                <flux:navlist.group expandable :expanded="false" heading="Access Control Management" class="hidden lg:grid">
                    <flux:navlist.item icon="key" :href="route('permissions')" :current="request()->routeIs('permissions')" wire:navigate>{{ __('Permission Management') }}</flux:navlist.item>
                    <flux:navlist.item icon="key" :href="route('roles')" :current="request()->routeIs('roles')" wire:navigate>{{ __('Role Management') }}</flux:navlist.item>
                </flux:navlist.group>
                <flux:navlist.group :heading="__('User Management')" class="grid">
                    <flux:navlist.item icon="user-group" :href="route('users')" :current="request()->routeIs('users')" wire:navigate>{{ __('Users') }}</flux:navlist.item>
                </flux:navlist.group>
            </flux:navlist.group>
            @endrole
            @role('admin')
            <flux:navlist.group :heading="__('Admin')" class="grid">
                <flux:navlist.item icon="home" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>
                <flux:navlist.group expandable heading="Access Control Management" class="hidden lg:grid">
                    <flux:navlist.item icon="key" :href="route('permissions')" :current="request()->routeIs('permissions')" wire:navigate>{{ __('Permission Management') }}</flux:navlist.item>
                    <flux:navlist.item icon="key" :href="route('roles')" :current="request()->routeIs('roles')" wire:navigate>{{ __('Role Management') }}</flux:navlist.item>
                </flux:navlist.group>
                <flux:navlist.group :heading="__('User Management')" class="grid">
                    <flux:navlist.item icon="user-group" :href="route('users')" :current="request()->routeIs('users')" wire:navigate>{{ __('Users') }}</flux:navlist.item>
                </flux:navlist.group>
            </flux:navlist.group>
            @endrole
            @role('hrm')
            <flux:navlist.group :heading="__('Human Resources Management')" class="grid">
                <flux:navlist.item icon="rectangle-group" :href="route('hrm')" :current="request()->routeIs('hrm')" wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>
                <flux:navlist.group :heading="__('Employee Management')" class="grid">
                    <flux:navlist.item icon="user-group" :href="route('hrm.employees')" :current="request()->routeIs('hrm.employees')" wire:navigate>{{ __('Employees') }}</flux:navlist.item>
                    <flux:navlist.item icon="calendar" :href="route('hrm.scheduling')" :current="request()->routeIs('hrm.scheduling')" wire:navigate>{{ __('Scheduling') }}</flux:navlist.item>
                    <flux:navlist.item icon="user" :href="route('hrm.attendance')" :current="request()->routeIs('hrm.attendance')" wire:navigate>{{ __('Attendance') }}</flux:navlist.item>
                </flux:navlist.group>
                <flux:navlist.group :heading="__('System Management')" class="grid">
                    <flux:navlist.item icon="banknotes" :href="route('hrm.payroll')" :current="request()->routeIs('hrm.payroll')" wire:navigate>{{ __('Payroll') }}</flux:navlist.item>
                </flux:navlist.group>

                <flux:navlist.item icon="rectangle-stack" :href="route('hrm.departments')" :current="request()->routeIs('hrm.departments')" wire:navigate>{{ __('Departments') }}</flux:navlist.item>
            </flux:navlist.group>
            @endrole
            @role('frm')
            <flux:navlist.group :heading="__('Finance Risk Management')" class="grid">
                <flux:navlist.item icon="rectangle-group" :href="route('frm')" :current="request()->routeIs('frm')" wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>
                <flux:navlist.item icon="calculator" :href="route('frm.accounting')" :current="request()->routeIs('frm.accounting')" wire:navigate>{{ __('Accounting') }}</flux:navlist.item>
                <flux:navlist.item icon="building-library" :href="route('frm.treasury')" :current="request()->routeIs('frm.treasury')" wire:navigate>{{ __('Treasury') }}</flux:navlist.item>
                <flux:navlist.item icon="banknotes" :href="route('frm.payroll')" :current="request()->routeIs('frm.payroll')" wire:navigate>{{ __('Payroll') }}</flux:navlist.item>
                <flux:navlist.item icon="receipt-percent" :href="route('frm.tax')" :current="request()->routeIs('frm.tax')" wire:navigate>{{ __('Tax') }}</flux:navlist.item>
            </flux:navlist.group>
            @endrole
            @role('scm')
            <flux:navlist.group :heading="__('Supply Chain Management')" class="grid">
                <flux:navlist.item icon="rectangle-group" :href="route('scm')" :current="request()->routeIs('scm')" wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>
            </flux:navlist.group>
            @endrole
            @role('mfr')
            <flux:navlist.group :heading="__('Manufacturing')" class="grid">
                <flux:navlist.item icon="rectangle-group" :href="route('mfr')" :current="request()->routeIs('mfr')" wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>
            </flux:navlist.group>
            @endrole
            @role('crm')
            <flux:navlist.group :heading="__('Customer Relationship Management')" class="grid">
                <flux:navlist.item icon="rectangle-group" :href="route('crm')" :current="request()->routeIs('crm')" wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>
            </flux:navlist.group>
            @endrole
        </flux:navlist>

        <flux:spacer />
        <!-- 
            <flux:navlist variant="outline">
                <flux:navlist.item icon="folder-git-2" href="https://github.com/laravel/livewire-starter-kit" target="_blank">
                {{ __('Repository') }}
                </flux:navlist.item>

                <flux:navlist.item icon="book-open-text" href="https://laravel.com/docs/starter-kits" target="_blank">
                {{ __('Documentation') }}
                </flux:navlist.item>
            </flux:navlist> -->

        <!-- Desktop User Menu -->
        <flux:dropdown position="bottom" align="start">
            <flux:profile
                :name="auth()->user()->name"
                :initials="auth()->user()->initials()"
                icon-trailing="chevrons-up-down" />

            <flux:menu class="w-[220px]">
                <flux:menu.radio.group>
                    <div class="p-0 text-sm font-normal">
                        <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                            <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                                    {{ auth()->user()->initials() }}
                                </span>
                            </span>

                            <div class="grid flex-1 text-start text-sm leading-tight">
                                <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                    </div>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <flux:menu.radio.group>
                    <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <form id="Logout" method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <flux:menu.item as="button" onclick="toLogout()" icon="arrow-right-start-on-rectangle" class="w-full">
                        {{ __('Log Out') }}
                    </flux:menu.item>
                </form>

                <script>
                    function toLogout() {
                        Swal.fire({
                            title: 'Are you sure you want to logout?',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Yes',
                            cancelButtonText: 'Cancel'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                document.getElementById("Logout").submit();
                            }
                        });
                    }
                </script>
            </flux:menu>
        </flux:dropdown>
    </flux:sidebar>

    <!-- Mobile User Menu -->
    <flux:header class="lg:hidden">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

        <flux:spacer />

        <flux:dropdown position="top" align="end">
            <flux:profile
                :initials="auth()->user()->initials()"
                icon-trailing="chevron-down" />

            <flux:menu>
                <flux:menu.radio.group>
                    <div class="p-0 text-sm font-normal">
                        <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                            <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                                    {{ auth()->user()->initials() }}
                                </span>
                            </span>

                            <div class="grid flex-1 text-start text-sm leading-tight">
                                <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                    </div>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <flux:menu.radio.group>
                    <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                        {{ __('Log Out') }}
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    </flux:header>

    {{ $slot }}

    @fluxScripts
</body>

</html>