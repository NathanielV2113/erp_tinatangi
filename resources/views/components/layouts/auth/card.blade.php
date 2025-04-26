<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light" data-theme="autumn">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-warm-white antialiased dark:bg-linear-to-b dark:from-neutral-950 dark:to-neutral-900">
        <div class="bg-muted flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10">
            <div class="flex w-full max-w-md flex-col items-center justify-center gap-6">
                <div class="flex flex-col w-2xl gap-6">
                    <div class="flex flex-col items-center rounded-xl border bg-cream dark:bg-stone-950 dark:border-stone-800 text-stone-800 shadow-xs">
                    <span class="flex mt-8 h-30 w-30 items-center justify-center rounded-md">
                        <x-app-logo-icon class="size-9 fill-current text-black dark:text-white" />
                    </span>    
                    <div class="w-full px-30 py-12">{{ $slot }}</div>
                    </div>
                </div>
            </div>
        </div>
        @fluxScripts
    </body>
</html>
