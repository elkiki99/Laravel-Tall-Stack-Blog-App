<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="bg-white dark:bg-gray-900">
            <div class="flex justify-center py-10">
                @include('layouts.navigation')
            </div>
            
            <main class="relative z-10 pt-10 pb-20 bg-white">
                {{ $slot }}
            </main>
            
            <div class="sticky bottom-0">
                <x-footer />
            </div>
        </div>
    </body>
</html>
