<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="icon" href="{{ asset('favicon.svg') }}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Scripts -->
        
        <!-- Alpine Plugins -->
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
        <!-- Alpine Core -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    <body class="font-sans antialiased">
        <div class="bg-white dark:bg-gray-900">
            <div class="flex">
                <div class="z-10 hidden w-1/5 xl:block">
                    @include('layouts.sidebar')
                </div>
                
                <div class="z-30 flex xl:hidden">
                    @include('layouts.small_sidebar')
                </div>
                
                <div class="relative w-full xl:w-4/5">
                    <div class="absolute top-0 right-0 z-20 p-3 mt-10 mr-10">
                        <a class="hidden text-sm md:flex hover:blur-xs" href="{{ route('welcome') }}">Go to homepage</a>
                    </div>
                    
                    <main class="relative z-10 pb-20 bg-white">
                        {{ $slot }}
                    </main>
                </div>
            </div>
            
            <div class="sticky bottom-0">
                <x-footer />
            </div>
        </div>
    </body>
    
    @livewireScripts
</html>
