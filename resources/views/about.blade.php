<x-app-layout>
    <div class="mt-[-120px]">  
        <section id="section1" class="relative h-screen overflow-hidden">
            <div class="absolute inset-0 px-24 bg-fixed bg-no-repeat bg-cover parallax-bg" style="background-image: url('{{ asset('images/texture2.jpg') }}');">
                <div class="flex flex-col items-center justify-center h-full">
                    <h1 class="py-10 mb-8 font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-300 text-8xl">Our purpose is to inspire bloggers all over the globe</h1>
                    <button class="inline-flex items-center px-5 py-2 text-3xl text-white bg-black border-2 border-gray-800 rounded-3xl hover:blur-xs dark:bg-gray-100 dark:text-black hover:text-white hover:border-gray-800 dark:hover:text-black focus:text-white focus:border-gray-700 dark:focus:text-black">
                        <span>Our newsletter</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 ml-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </button>
                </div>
            </div>
            
            <a class="absolute text-white right-8 bottom-8" href="#section2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </a>
        </section>
        
        <section id="section2" class="relative min-h-screen overflow-hidden">
            <a class="absolute top-8 right-8" href="#section1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                </svg>
            </a>
            
            <div class="p-10">
                <div class="flex items-center justify-center h-full py-10">
                    <h1 class="py-2 pt-8 text-6xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-black to-gray-700">
                        Get your website 
                        <span class="underline-yellow">up and running</span>
                    </h1>
                </div>
                
                <div class="pb-10">
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-6">
                        <div class="flex flex-col">
                            <div class="relative w-full pb-full">
                                <div class="absolute inset-0 overflow-hidden rounded-lg shadow-lg">
                                    <img loading="lazy" src="{{ asset('images/blog1.jpg') }}" alt="Blog Image 1" class="object-cover w-full h-full transition-transform duration-300 transform hover:scale-105 hover:cursor-pointer">
                                </div>
                            </div>
                            <h4 class="mt-2 text-xl font-bold hover:cursor-pointer">Best buildings in Netherlands</h4>
                            <x-blog.created-data class="mt-1 text-sm" />
                        </div>
                        <div class="flex flex-col">
                            <div class="relative w-full pb-full">
                                <div class="absolute inset-0 overflow-hidden rounded-lg shadow-lg">
                                    <img loading="lazy" src="{{ asset('images/blog2.jpg') }}" alt="Blog Image 1" class="object-cover w-full h-full transition-transform duration-300 transform hover:scale-105 hover:cursor-pointer">
                                </div>
                            </div>
                            <h4 class="mt-2 text-xl font-bold hover:cursor-pointer">Architecture for modern people</h4>
                            <x-blog.created-data class="mt-1 text-sm" />
                        </div>
                        <div class="flex flex-col">
                            <div class="relative w-full pb-full">
                                <div class="absolute inset-0 overflow-hidden rounded-lg shadow-lg">
                                    {{-- <img loading="lazy" src="{{ asset('images/blog3.jpg') }}" alt="Blog Image 1" class="object-cover w-full h-full transition-transform duration-300 transform hover:scale-105 hover:cursor-pointer"> --}}
                                </div>
                            </div>
                            <h4 class="mt-2 text-xl font-bold hover:cursor-pointer">Guide to classic urbanism</h4>
                            <x-blog.created-data class="mt-1 text-sm" />
                        </div>
                        <div class="flex flex-col">
                            <div class="relative w-full pb-full">
                                <div class="absolute inset-0 overflow-hidden rounded-lg shadow-lg">
                                    {{-- <img loading="lazy" src="{{ asset('images/blog4.jpg') }}" alt="Blog Image 1" class="object-cover w-full h-full transition-transform duration-300 transform hover:scale-105 hover:cursor-pointer"> --}}
                                </div>
                            </div>
                            <h4 class="mt-2 text-xl font-bold hover:cursor-pointer">The ancient architecture</h4>
                            <x-blog.created-data class="mt-1 text-sm" />
                        </div>
                        <div class="flex flex-col">
                            <div class="relative w-full pb-full">
                                <div class="absolute inset-0 overflow-hidden rounded-lg shadow-lg">
                                    {{-- <img loading="lazy" src="{{ asset('images/blog4.jpg') }}" alt="Blog Image 1" class="object-cover w-full h-full transition-transform duration-300 transform hover:scale-105 hover:cursor-pointer"> --}}
                                </div>
                            </div>
                            <h4 class="mt-2 text-xl font-bold hover:cursor-pointer">Corporis magni eius ipsum</h4>
                            <x-blog.created-data class="mt-1 text-sm" />
                        </div>
                        <div class="flex flex-col">
                            <div class="relative w-full pb-full">
                                <div class="absolute inset-0 overflow-hidden rounded-lg shadow-lg">
                                    {{-- <img loading="lazy" src="{{ asset('images/blog4.jpg') }}" alt="Blog Image 1" class="object-cover w-full h-full transition-transform duration-300 transform hover:scale-105 hover:cursor-pointer"> --}}
                                </div>
                            </div>
                            <h4 class="mt-2 text-xl font-bold hover:cursor-pointer">Corporis magni eius ipsum</h4>
                            <x-blog.created-data class="mt-1 text-sm" />
                        </div>
                    </div>
                </div>
            </div>  

            <a class="absolute right-8 bottom-8" href="#section3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </a>
        </section>

        <section id="section3" class="min-h-screen">
            <a class="absolute text-white top-8 right-8" href="#section2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                </svg>
            </a>
            
            <div class="h-screen px-24 mb-10 bg-fixed bg-no-repeat bg-cover" style="background-image: url('{{ asset('images/texture3.jpg') }}');">
                <div class="flex flex-col items-center justify-center h-full">
                    <h1 class="py-10 mb-8 font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-300 text-8xl">Oh! Yeah, did we mention? It's completely free to use</h1>
                    <a wire:navigate href="{{ route('blog.index') }}" class="inline-flex items-center px-5 py-2 text-3xl text-white bg-black border-2 border-gray-900 rounded-3xl hover:blur-xs dark:bg-gray-100 dark:text-black hover:text-white hover:border-gray-800 dark:hover:text-black focus:text-white focus:border-gray-700 dark:focus:text-black">
                        <span>Our work</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 ml-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>
    </div>

    <style>
        .underline-yellow {
            text-decoration: underline;
            text-decoration-color: yellow;
        }
        .pb-full {
            padding-bottom: 100%;
        }
    </style>
</x-app-layout>