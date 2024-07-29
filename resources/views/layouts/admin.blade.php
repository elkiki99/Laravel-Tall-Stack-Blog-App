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
        {{-- <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.css" />

        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.min.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.js" defer></script> --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    <body class="font-sans antialiased">
        <div class="bg-white dark:bg-gray-900">
            <div class="flex">
                <div class="z-10 w-1/5">
                    @include('layouts.sidebar')
                </div>
                
                <div class="relative w-4/5">
                    <div class="absolute top-0 right-0 z-20 p-3 mt-10 mr-10">
                        <a class="text-sm hover:blur-xs" href="{{ route('welcome') }}">Go to homepage</a>
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
</html>
