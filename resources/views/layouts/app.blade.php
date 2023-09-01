<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

        <title>
            @isset($title)
                {{ config('app.name') . ' | ' . $title }}
            @else
                {{ config('app.name'), 'Laravel' }}
            @endisset
        </title>

        <!-- Scripts -->
        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="bg-white">
            @include('layouts.navigation')

            <main class="overflow-hidden px-4 mx-auto sm:px-6 lg:px-14 bg-gray-50 h-screen">
                {{ $slot }}
            </main>
        </div>

        @livewireScriptConfig
        @stack('alpine_script')
        @vite('resources/js/app.js')
        @stack('scripts')
    </body>
</html>
