<x-app-layout>
    <div class="flex justify-between w-full px-4 py-10">
        <!-- First Section -->
        <section class="sticky w-1/6 top-20">
            <x-blog.nav-bar />
        </section>

        <!-- Second Section -->
        <section class="w-3/6 min-h-screen mx-auto">
            <h1 class="py-10 text-6xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-black to-gray-700">
                All our blog <span class="underline-yellow">posts</span>
            </h1>

            <div class="grid grid-cols-1 gap-6 py-5">
                {{-- @foreach ($posts as $post) --}}
                <div class="flex bg-white rounded-lg shadow-sm dark:bg-gray-800">
                    <div class="w-1/2 overflow-hidden shadow-lg aspect-square">
                        <a wire:navigate href="{{ route('blog.show') }}">
                            <img loading="lazy" src="{{ asset('images/blog1.jpg') }}" alt="Blog Image 1" class="object-cover w-full h-full transition-transform duration-300 transform hover:scale-105 hover:cursor-pointer">
                        </a>
                    </div>
                    <div class="flex flex-col justify-between w-1/2 p-4">
                        <div>
                            <x-blog.metrics />
                            
                            <a wire:navigate href="{{ route('blog.show') }}">
                                <h2 class="my-5 mb-2 text-4xl font-bold text-gray-900 hover:cursor-pointer hover:text-gray-800 dark:text-gray-100">Netherlands: A Journey Through Time and Design</h2>
                            </a>    
                            <p class="text-lg text-gray-700 dark:text-gray-300">We dive into the different types of buildings in the Netherlands and its overall design system.   </p>
                        </div>
                        
                        <x-blog.tags />
                        <x-blog.created-data class="text-lg" />
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>

            <div class="grid grid-cols-1 gap-6 py-5">
                {{-- @foreach ($posts as $post) --}}
                <div class="flex bg-white rounded-lg shadow-sm dark:bg-gray-800">
                    <div class="w-1/2 overflow-hidden shadow-lg aspect-square">
                        <img loading="lazy" src="{{ asset('images/blog4.jpg') }}" alt="Blog Image 1" class="object-cover w-full h-full transition-transform duration-300 transform hover:scale-105 hover:cursor-pointer">
                    </div>
                    <div class="flex flex-col justify-between w-1/2 p-4">
                        <div>
                            <x-blog.metrics />
                            
                            <h2 class="my-5 mb-2 text-4xl font-bold text-gray-900 hover:cursor-pointer hover:text-gray-800 dark:text-gray-100">Best buildings in Netherlands</h2>
                            <p class="text-lg text-gray-700 dark:text-gray-300">In this post, we dive into the different types of buildings in the Netherlands and its overall design system. What makes them unique?</p>
                        </div>
                        
                        <x-blog.tags />
                        <x-blog.created-data class="text-lg" />
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
        </section>

        <!-- Second Section -->
        <section class="w-1/5 min-h-screen pl-5 mx-auto">
            <h2 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-black to-gray-700">
                Featured
            </h2>
            
            <div class="grid grid-cols-1 gap-6 py-5">
                {{-- @foreach ($posts as $post) --}}
                <div class="items-center bg-white rounded-lg shadow-sm dark:bg-gray-800">
                    <div class="overflow-hidden shadow-lg aspect-square">
                        <img loading="lazy" src="{{ asset('images/blog3.jpg') }}" alt="Blog Image 1" class="object-cover w-full h-full transition-transform duration-300 transform hover:scale-105 hover:cursor-pointer">
                    </div>
                    <div class="p-4 ">
                        <h2 class="mb-2 text-2xl font-bold text-gray-900 hover:cursor-pointer dark:text-gray-100">Best buildings in Netherlands</h2>
                        
                        <x-blog.metrics />
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>

            <div class="grid grid-cols-1 gap-6 py-5">
                {{-- @foreach ($posts as $post) --}}
                <div class="items-center bg-white rounded-lg shadow-sm dark:bg-gray-800">
                    <div class="overflow-hidden shadow-lg aspect-square">
                        <img loading="lazy" src="{{ asset('images/blog2.jpg') }}" alt="Blog Image 1" class="object-cover w-full h-full transition-transform duration-300 transform hover:scale-105 hover:cursor-pointer">
                    </div>
                    <div class="p-4 ">
                        <h2 class="mb-2 text-2xl font-bold text-gray-900 hover:cursor-pointer dark:text-gray-100">Best buildings in Netherlands</h2>
                        
                        <x-blog.metrics />
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
        </section>
    </div>
{{-- </x-app-layout> --}}

    <style>
        .underline-yellow {
            text-decoration: underline;
            text-decoration-color: yellow;
        }
    </style>
</x-app-layout>
