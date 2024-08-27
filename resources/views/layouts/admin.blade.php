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
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        
        
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    <body class="font-sans antialiased">
        <div class="bg-white">
            <div class="flex">
                <div class="z-10 hidden w-1/5 xl:block">
                    @include('layouts.sidebar')
                </div>
                
                <div class="z-30 flex xl:hidden">
                    @include('layouts.small_sidebar')
                </div>
                
                <div class="relative w-full xl:w-4/5">
                    <div class="absolute top-0 right-0 z-20 p-3 mt-10 mr-10">
                        <a class="hidden text-sm md:flex hover:blur-xs" wire:navigate href="{{ route('welcome') }}">Go to homepage</a>
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
