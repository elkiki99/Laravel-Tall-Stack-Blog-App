<x-app-layout>
    <section class="relative min-h-screen overflow-hidden">
        <div class="absolute inset-0 px-6 bg-fixed bg-no-repeat bg-cover parallax-bg " style="background-image: url('{{ asset('images/texture6.jpg') }}');">
            <div class="flex flex-col items-center justify-center h-full py-10 mx-auto sm:py-0 max-w-7xl">
                <h1 class="mt-0 mb-8 text-6xl font-bold text-center text-white sm:mt-20 sm:text-7xl md:text-8xl"><span class="underline-yellow">Our purpose</span> is to inspire bloggers all over the globe</h1>
                <button class="inline-flex items-center px-4 py-2 my-5 text-xl text-white bg-gray-950 rounded-2xl hover:blur-xs dark:bg-gray-100 dark:text-black hover:text-white hover:border-gray-300 dark:hover:text-black focus:text-white focus:border-gray-300 dark:focus:text-black">
                    <a class="flex" wire:navigate href="{{ route('newsletter') }}">
                        <span class="inline-flex items-center">Our newsletter</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 ml-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                </button>
            </div>
        </div>
    </section>
    
    <section class="relative min-h-screen overflow-hidden">
        <div class="p-10">
            <div class="flex items-center justify-center h-full py-10">
                <h2 class="py-1 pt-4 text-6xl font-bold text-transparent sm:pt-16 bg-clip-text bg-gradient-to-r from-black to-gray-700">
                    Get your website 
                    <span class="underline-yellow">up and running</span>
                </h2>
            </div>
            
            <div class="pb-10">
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-6">
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
    </section>

    <section class="relative min-h-screen overflow-hidden">
        <div class="p-4 mx-auto sm:p-16 max-w-7xl">
            <h2 class="hidden p-1 pt-16 text-6xl font-bold text-center text-transparent sm:block bg-clip-text bg-gradient-to-r from-black to-gray-700">Frequently Asked <span class="underline-yellow">Questions</span></h2>
            <h2 class="p-1 pt-16 text-6xl font-bold text-center text-transparent sm:hidden bg-clip-text bg-gradient-to-r from-black to-gray-700 underline-yellow">FAQs</h2>
            
            <div class="py-10 space-y-4">
                <div x-data="{ open: false }" class="border-b border-gray-200">
                    <button @click="open = !open" class="flex items-center justify-between w-full py-4 text-lg font-medium text-gray-600 focus:outline-none">
                        <h4 class="text-sm text-gray-900 sm:text-xl">What is this website about?</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'transform rotate-180': open }">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="py-2 text-gray-600">
                        <p class="pb-2 text-sm">This website is designed to help bloggers create beautiful and functional blogs. It's free to use and highly customizable.</p>
                    </div>
                    </div>
                <div x-data="{ open: false }" class="border-b border-gray-200">
                    <button @click="open = !open" class="flex items-center justify-between w-full py-4 text-lg font-medium text-gray-600 focus:outline-none">
                        <h4 class="text-sm text-gray-900 sm:text-xl">Is the template free to use?</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline w-6 h-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'transform rotate-180': open }">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="py-2 text-gray-600">
                        <p class="pb-2 text-sm">Yes, our template is completely free to use. You can customize it to fit your needs.</p>
                    </div>
                </div>
                <div x-data="{ open: false }" class="border-b border-gray-200">
                    <button @click="open = !open" class="flex items-center justify-between w-full py-4 text-lg font-medium text-gray-600 focus:outline-none">
                        <h4 class="text-sm text-gray-900 sm:text-xl">What do I need to use this template?</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline w-6 h-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'transform rotate-180': open }">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="py-2 text-gray-600">
                        <p class="pb-2 text-sm">All you need is a basic understanding of HTML and CSS. Our template is easy to use and comes with comprehensive documentation.</p>
                    </div>
                </div>
                <div x-data="{ open: false }" class="border-b border-gray-200">
                    <button @click="open = !open" class="flex items-center justify-between w-full py-4 text-lg font-medium text-gray-600 focus:outline-none">
                        <h4 class="text-sm text-gray-900 sm:text-xl">Can I customize the template?</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline w-6 h-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'transform rotate-180': open }">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="py-2 text-gray-600">
                        <p class="pb-2 text-sm">Yes, you can fully customize the template to match your personal or business brand. Modify colors, layouts, and content as needed.</p>
                    </div>
                </div>
                <div x-data="{ open: false }" class="border-b border-gray-200">
                    <button @click="open = !open" class="flex items-center justify-between w-full py-4 text-lg font-medium text-gray-600 focus:outline-none">
                        <h4 class="text-sm text-gray-900 sm:text-xl">How do I get started?</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline w-6 h-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'transform rotate-180': open }">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="py-2 text-gray-600">
                        <p class="pb-2 text-sm">To get started, simply download the template, open it in your preferred code editor, and start customizing. You can find detailed instructions in our documentation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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