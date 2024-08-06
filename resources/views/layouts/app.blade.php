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
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="bg-white dark:bg-gray-900">
            <div class="flex justify-center">
                @include('layouts.navigation')
                            
                @guest
                    <form class="absolute top-0 right-0 z-20 hidden pt-4 pr-4 mt-10 ml-auto mr-10 md:flex" method="POST" action="{{ route('login') }}">
                        @csrf
                        <x-nav-link :href="route('login')" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log In') }}
                        </x-nav-link>
                    </form>
                @else
                    @if(auth()->user()->role === 'admin')
                        <div class="absolute top-0 right-0 z-20 p-3 mt-10 mr-10">
                            <a class="hidden text-sm md:flex hover:blur-xs" wire:navigate href="{{ route('posts.index') }}">Panel</a>
                        </div>
                    @elseif(auth()->user()->role === 'author')
                        <div class="absolute top-0 right-0 z-20 p-3 mt-10 mr-10">
                            <a class="hidden text-sm md:flex hover:blur-xs" wire:navigate href="{{ route('posts.index') }}">Panel</a>
                        </div>
                    @elseif(auth()->user()->role === 'user')
                        <div class="absolute top-0 right-0 z-20 p-3 mt-10 mr-10">
                            <a class="hidden text-sm md:flex hover:blur-xs" wire:navigate href="{{ route('profile.edit') }}">Profile</a>
                        </div>
                    @endif
                @endguest
            </div>
            
            <main class="relative z-10 pb-20 bg-white">
                {{ $slot }}
            </main>
            
            <div class="sticky bottom-0">
                <x-footer />
            </div>
        </div>
    </body>

    @livewireScripts
</html>
