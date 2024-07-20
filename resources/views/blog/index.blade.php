<x-app-layout>
    <!-- First Section -->
    <section class="pt-36">
        <x-blog.nav-bar />
    </section>
    
    <div class="flex w-full px-4 py-10 pt-16 max-w-7 sm:pt-32">
        <!-- Second Section -->
        <section class="w-full lg:p-2 md:w-5/6 lg:w-4/6 xl:w-3/6">
            <h1 class="py-5 text-6xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-black to-gray-700">
                All our blog <span class="underline-yellow">posts</span>
            </h1>

            <div class="grid grid-cols-1 gap-6 py-5">
                {{-- @foreach ($posts as $post) --}}
                <div class="flex flex-col bg-white rounded-lg shadow-sm 2xl:flex-row dark:bg-gray-800">
                    <div class="w-full overflow-hidden shadow-lg 2xl:w-1/2 aspect-square">
                        <a wire:navigate href="{{ route('blog.show') }}">
                            <img loading="lazy" src="{{ asset('images/blog1.jpg') }}" alt="Blog Image 1" class="object-cover w-full h-full transition-transform duration-300 transform hover:scale-105 hover:cursor-pointer">
                        </a>
                    </div>
                    <div class="flex flex-col justify-between w-full p-4 2xl:w-1/2">
                        <div>
                            <x-blog.metrics />

                            <h2 class="my-5 mb-2 text-2xl font-bold text-gray-900 md:text-4xl hover:cursor-pointer hover:text-gray-800 dark:text-gray-100">
                                Netherlands: A Journey Through Time and Design
                            </h2>
                            <p class="text-lg text-gray-700 dark:text-gray-300">We dive into the different types of buildings in the Netherlands and its overall design system.</p>
                        </div>

                        <x-blog.tags />
                        <x-blog.created-data class="text-lg" />
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>

            <div class="grid grid-cols-1 gap-6 py-5">
                {{-- @foreach ($posts as $post) --}}
                <div class="flex flex-col bg-white rounded-lg shadow-sm 2xl:flex-row dark:bg-gray-800">
                    <div class="w-full overflow-hidden shadow-lg 2xl:w-1/2 aspect-square">
                        <img loading="lazy" src="{{ asset('images/blog4.jpg') }}" alt="Blog Image 1" class="object-cover w-full h-full transition-transform duration-300 transform hover:scale-105 hover:cursor-pointer">
                    </div>
                    <div class="flex flex-col justify-between w-full p-4 2xl:w-1/2">
                        <div>
                            <x-blog.metrics />

                            <h2 class="my-5 mb-2 text-2xl font-bold text-gray-900 md:text-4xl hover:cursor-pointer hover:text-gray-800 dark:text-gray-100">
                                Best buildings in Netherlands
                            </h2>
                            <p class="text-lg text-gray-700 dark:text-gray-300">In this post, we dive into the different types of buildings in the Netherlands and its overall design system. What makes them unique?</p>
                        </div>

                        <x-blog.tags />
                        <x-blog.created-data class="text-lg" />
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
        </section>

        <!-- Third Section -->
        <section class="hidden w-0 min-h-screen md:w-1/6 pg-5 lg:p-2 lg:w-1/6 lg:block xl:w-2/6">
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

    <style>
        .underline-yellow {
            text-decoration: underline;
            text-decoration-color: yellow;
        }
    </style>
</x-app-layout>
