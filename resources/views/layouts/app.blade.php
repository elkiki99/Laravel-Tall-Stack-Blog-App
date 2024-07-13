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

        <script>
            window.addEventListener('scroll', function () {
                const parallaxElements = 
                    document.querySelectorAll('.parallax-bg');
                parallaxElements.forEach(function (element) {
                    let scrollPosition = window.pageYOffset;
                    element.style.transform = 
                        'translateY(' + scrollPosition * 0.3 + 'px)';
                });
            });
            
            window.onload = function() {
                window.scrollTo(0, 0);
            };
        </script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white dark:bg-gray-900">
            <div class="flex justify-center p-10">
                @include('layouts.navigation')
            </div>
        
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</html>
