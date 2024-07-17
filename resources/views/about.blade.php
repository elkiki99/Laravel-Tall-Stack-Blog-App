<x-app-layout>
    <div class="mt-[-80px]">  
        <section class="relative h-screen overflow-hidden">
            <div class="absolute inset-0 px-24 bg-fixed bg-no-repeat bg-cover parallax-bg" style="background-image: url('{{ asset('images/texture6.jpg') }}');">
                <div class="flex flex-col items-center justify-center h-full">
                    <h1 class="py-10 mb-8 font-bold text-white text-8xl"><span class="underline-yellow">Our purpose</span> is to inspire bloggers all over the globe</h1>
                    <button class="inline-flex items-center px-4 py-2 text-xl text-white bg-gray-950 rounded-2xl hover:blur-xs dark:bg-gray-100 dark:text-black hover:text-white hover:border-gray-300 dark:hover:text-black focus:text-white focus:border-gray-300 dark:focus:text-black">
                        <span>Our newsletter</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 ml-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>
        
        <section class="relative min-h-screen overflow-hidden">
            <div class="p-10">
                <div class="flex items-center justify-center h-full py-10">
                    <h1 class="py-2 pt-16 text-6xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-black to-gray-700">
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
        </section>

        <!-- FAQ Section -->
        <section class="relative min-h-screen overflow-hidden">
            <div class="p-16 mx-auto max-w-7xl">
                <h2 class="p-2 my-8 text-6xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-black to-gray-700">Frequently Asked Questions</h2>
                <div class="py-10 space-y-4">
                    <div x-data="{ open: false }" class="border-b border-gray-200">
                        <button @click="open = !open" class="flex items-center justify-between w-full py-4 text-lg font-medium text-gray-600 focus:outline-none">
                          <h4 class="text-xl text-gray-900">What is this website about?</h4>
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'transform rotate-180': open }">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                          </svg>
                        </button>
                        <div x-show="open" x-collapse class="py-2 text-gray-600">
                          <p>This website is designed to help bloggers create beautiful and functional blogs. It's free to use and highly customizable.</p>
                        </div>
                      </div>
                    <div x-data="{ open: false }" class="border-b border-gray-200">
                        <button @click="open = !open" class="flex items-center justify-between w-full py-4 text-lg font-medium text-gray-600 focus:outline-none">
                            <h4 class="text-xl text-gray-900">Is the template free to use?</h4>
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline w-6 h-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'transform rotate-180': open }">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" x-collapse class="py-2 text-gray-600">
                            <p>Yes, our template is completely free to use. You can customize it to fit your needs.</p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="border-b border-gray-200">
                        <button @click="open = !open" class="flex items-center justify-between w-full py-4 text-lg font-medium text-gray-600 focus:outline-none">
                            <h4 class="text-xl text-gray-900">What do I need to use this template?</h4>
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline w-6 h-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'transform rotate-180': open }">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" x-collapse class="py-2 text-gray-600">
                            <p>All you need is a basic understanding of HTML and CSS. Our template is easy to use and comes with comprehensive documentation.</p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="border-b border-gray-200">
                        <button @click="open = !open" class="flex items-center justify-between w-full py-4 text-lg font-medium text-gray-600 focus:outline-none">
                            <h4 class="text-xl text-gray-900">Can I customize the template?</h4>
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline w-6 h-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'transform rotate-180': open }">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" x-collapse class="py-2 text-gray-600">
                            <p>Yes, you can fully customize the template to match your personal or business brand. Modify colors, layouts, and content as needed.</p>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="border-b border-gray-200">
                        <button @click="open = !open" class="flex items-center justify-between w-full py-4 text-lg font-medium text-gray-600 focus:outline-none">
                            <h4 class="text-xl text-gray-900">How do I get started?</h4>
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline w-6 h-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'transform rotate-180': open }">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" x-collapse class="py-2 text-gray-600">
                            <p>To get started, simply download the template, open it in your preferred code editor, and start customizing. You can find detailed instructions in our documentation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
{{-- </x-app-layout> --}}

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