<x-app-layout>
    <section class="relative min-h-screen overflow-hidden">
        <div class="absolute inset-0 px-6 pt-10 bg-fixed bg-no-repeat bg-cover parallax-bg" style="background-image: url('{{ asset('images/texture6.jpg') }}');">
            <div class="z-10 flex flex-col items-center justify-center h-full py-10 mx-auto sm:py-0 max-w-7xl">
                <h1 class="mt-0 mb-8 text-6xl font-bold text-center text-white sm:mt-20 sm:text-7xl md:text-8xl"><span class="underline-yellow">Our purpose</span> is to inspire bloggers all over the globe</h1>
                <button class="inline-flex items-center px-4 py-1 my-5 text-xl text-white bg-gray-950 rounded-2xl hover:blur-xs dark:bg-gray-100 dark:text-black hover:text-white hover:border-gray-300 dark:hover:text-black focus:text-white focus:border-gray-300 dark:focus:text-black">
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
                <h2 class="py-1 pt-4 text-6xl font-bold text-center text-transparent sm:text-5xl md:text-7xl sm:pt-16 bg-clip-text bg-gradient-to-r from-black to-gray-700">
                    Our
                    <span class="underline-yellow">templates</span>
                </h2>
            </div>
            
            <div class="pb-10">
                <div class="grid grid-cols-1 gap-5 py-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                    <div class="flex flex-col">
                        <div class="relative w-full pb-full">
                            <div class="absolute inset-0 overflow-hidden rounded-lg shadow-lg">
                                <img loading="lazy" src="{{ asset('images/blog1.jpg') }}" alt="Blog Image 1" class="object-cover w-full h-full transition-transform duration-300 transform hover:scale-105 hover:cursor-pointer">
                            </div>
                        </div>
                        <h4 class="mt-2 text-xl font-bold hover:cursor-pointer">Best buildings in Netherlands</h4>
                        <div class="my-1 mt-auto">
                            <p dark:text-gray-300">by <span class="font-bold text-black">Bruno </span>| 2 days ago</p>
                        </div>                    
                    </div>
                    
                    <div class="flex flex-col">
                        <div class="relative w-full pb-full">
                            <div class="absolute inset-0 overflow-hidden rounded-lg shadow-lg">
                                <img loading="lazy" src="{{ asset('images/blog2.jpg') }}" alt="Blog Image 1" class="object-cover w-full h-full transition-transform duration-300 transform hover:scale-105 hover:cursor-pointer">
                            </div>
                        </div>
                        <h4 class="mt-2 text-xl font-bold hover:cursor-pointer">Architecture for modern people</h4>
                        <div class="my-1 mt-auto">
                            <p dark:text-gray-300">by <span class="font-bold text-black">Bruno </span>| 2 days ago</p>
                        </div>                    
                    </div>
                    
                    <div class="flex flex-col">
                        <!-- Placeholder Image -->
                        <div class="relative w-full pb-full">
                            <div class="absolute inset-0 overflow-hidden bg-gray-200 rounded-lg shadow-lg"></div>
                        </div>
                        
                        <!-- Placeholder Title -->
                        <div class="w-3/4 h-6 mt-2 bg-gray-300"></div>
                        
                        <!-- Placeholder Created Data -->
                        <div class="w-1/2 h-4 mt-1 bg-gray-200"></div>
                    </div>
                    <div class="flex flex-col">
                        <!-- Placeholder Image -->
                        <div class="relative w-full pb-full">
                            <div class="absolute inset-0 overflow-hidden bg-gray-200 rounded-lg shadow-lg"></div>
                        </div>
                        
                        <!-- Placeholder Title -->
                        <div class="w-3/4 h-6 mt-2 bg-gray-300"></div>
                        
                        <!-- Placeholder Created Data -->
                        <div class="w-1/2 h-4 mt-1 bg-gray-200"></div>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 gap-10 py-5 md:grid-cols-2">
                    <div class="flex flex-col bg-white rounded-lg dark:bg-gray-700 2xl:flex-row">
                        <!-- Placeholder Image -->
                        <div class="w-full overflow-hidden bg-gray-200 2xl:w-1/2 2xl:aspect-square aspect-video"></div>
                        
                        <div class="flex flex-col justify-between w-full px-0 py-4 2xl:px-4 2xl:w-1/2">
                            <div>
                                <!-- Placeholder Metrics -->
                                <div class="w-48 h-4 mb-4 bg-gray-300"></div>
    
                                <!-- Placeholder Title -->
                                <div class="w-64 h-8 mb-4 bg-gray-300"></div>
    
                                <!-- Placeholder Paragraph -->
                                <div class="w-full h-4 mb-2 bg-gray-200"></div>
                                <div class="w-full h-4 mb-2 bg-gray-200"></div>
                                <div class="w-1/2 h-4 bg-gray-200"></div>
                            </div>
    
                            <!-- Placeholder Created Data -->
                            <div class="w-32 h-4 mt-5 mb-4 bg-gray-300 2xl:mt-auto"></div>
    
                            <!-- Placeholder Tags -->
                            <div class="flex space-x-2">
                                <div class="w-24 h-4 px-2 py-1 text-gray-800 bg-gray-200"></div>
                                <div class="w-24 h-4 px-2 py-1 text-gray-800 bg-gray-200"></div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col py-6">
                        <div class="pb-5 border-b-2 border-gray-300">
                            <!-- Placeholder Metrics -->
                            <div class="w-32 h-4 mb-4 bg-gray-200"></div>
                            
                            <!-- Placeholder Title -->
                            <div class="w-48 h-6 mb-2 bg-gray-300"></div>
                            
                            <!-- Placeholder Paragraph -->
                            <div class="w-full h-4 mb-2 bg-gray-200"></div>
                            <div class="w-full h-4 mb-2 bg-gray-200"></div>
                            <div class="w-1/2 h-4 mb-4 bg-gray-200"></div>
                            
                            <!-- Placeholder Created Data -->
                            <div class="w-24 h-4 mb-5 bg-gray-200"></div>
                        
                            <!-- Placeholder Tags and Action -->
                            <div class="flex pt-2">
                                <div class="flex space-x-2">
                                    <div class="w-24 h-4 px-2 py-1 text-gray-800 bg-gray-200"></div>
                                    <div class="w-24 h-4 px-2 py-1 text-gray-800 bg-gray-200"></div>
                                </div>
                                <div class="ml-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="hidden pb-5 mt-10 border-b-2 border-gray-300 md:block"">
                            <!-- Placeholder Metrics -->
                            <div class="w-32 h-4 mb-4 bg-gray-200"></div>
                            
                            <!-- Placeholder Title -->
                            <div class="w-48 h-6 mb-2 bg-gray-300"></div>
                            
                            <!-- Placeholder Paragraph -->
                            <div class="w-full h-4 mb-2 bg-gray-200"></div>
                            <div class="w-full h-4 mb-2 bg-gray-200"></div>
                            <div class="w-1/2 h-4 mb-4 bg-gray-200"></div>
                            
                            <!-- Placeholder Created Data -->
                            <div class="w-24 h-4 mb-5 bg-gray-200"></div>
                        
                            <!-- Placeholder Tags and Action -->
                            <div class="flex pt-2">
                                <div class="flex space-x-2">
                                    <div class="w-24 h-4 px-2 py-1 text-gray-800 bg-gray-200"></div>
                                    <div class="w-24 h-4 px-2 py-1 text-gray-800 bg-gray-200"></div>
                                </div>
                                <div class="ml-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative min-h-screen overflow-hidden">
        <div class="p-4 mx-auto sm:p-16 max-w-7xl">
            <h2 class="hidden p-1 pt-16 text-6xl font-bold text-center text-transparent md:text-7xl sm:block bg-clip-text bg-gradient-to-r from-black to-gray-700">Frequently Asked <span class="underline-yellow">Questions</span></h2>
            <h2 class="p-1 pt-16 text-6xl font-bold text-center text-transparent sm:hidden bg-clip-text bg-gradient-to-r from-black to-gray-700 underline-yellow">FAQs</h2>
            
            <div class="py-10 space-y-4">
                <div x-data="{ open: false }" class="border-b border-gray-200">
                    <button @click="open = !open" class="flex items-center justify-between w-full py-4 text-lg font-medium text-gray-600 focus:outline-none">
                        <h4 class="text-sm font-semibold text-gray-900 sm:text-xl">What is this website about?</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'transform rotate-180': open }">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="py-2 text-gray-600">
                        <p class="pb-2 text-sm sm:text-xl">This website is designed to help bloggers create beautiful and functional blogs. It's free to use and highly customizable.</p>
                    </div>
                    </div>
                <div x-data="{ open: false }" class="border-b border-gray-200">
                    <button @click="open = !open" class="flex items-center justify-between w-full py-4 text-lg font-medium text-gray-600 focus:outline-none">
                        <h4 class="text-sm font-semibold text-gray-900 sm:text-xl">Is the template free to use?</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline w-6 h-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'transform rotate-180': open }">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="py-2 text-gray-600">
                        <p class="pb-2 text-sm sm:text-xl">Yes, our template is completely free to use. You can customize it to fit your needs.</p>
                    </div>
                </div>
                <div x-data="{ open: false }" class="border-b border-gray-200">
                    <button @click="open = !open" class="flex items-center justify-between w-full py-4 text-lg font-medium text-gray-600 focus:outline-none">
                        <h4 class="text-sm font-semibold text-gray-900 sm:text-xl">What do I need to use this template?</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline w-6 h-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'transform rotate-180': open }">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="py-2 text-gray-600">
                        <p class="pb-2 text-sm sm:text-xl">All you need is a basic understanding of HTML and CSS. Our template is easy to use and comes with comprehensive documentation.</p>
                    </div>
                </div>
                <div x-data="{ open: false }" class="border-b border-gray-200">
                    <button @click="open = !open" class="flex items-center justify-between w-full py-4 text-lg font-medium text-gray-600 focus:outline-none">
                        <h4 class="text-sm font-semibold text-gray-900 sm:text-xl">Can I customize the template?</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline w-6 h-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'transform rotate-180': open }">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="py-2 text-gray-600">
                        <p class="pb-2 text-sm sm:text-xl">Yes, you can fully customize the template to match your personal or business brand. Modify colors, layouts, and content as needed.</p>
                    </div>
                </div>
                <div x-data="{ open: false }" class="border-b border-gray-200">
                    <button @click="open = !open" class="flex items-center justify-between w-full py-4 text-lg font-medium text-gray-600 focus:outline-none">
                        <h4 class="text-sm font-semibold text-gray-900 sm:text-xl">How do I get started?</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline w-6 h-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'transform rotate-180': open }">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="py-2 text-gray-600">
                        <p class="pb-2 text-sm sm:text-xl">To get started, simply download the template, open it in your preferred code editor, and start customizing. You can find detailed instructions in our documentation.</p>
                    </div>
                </div>
                <div x-data="{ open: false }" class="border-b border-gray-200">
                    <button @click="open = !open" class="flex items-center justify-between w-full py-4 text-lg font-medium text-gray-600 focus:outline-none">
                        <h4 class="text-sm font-semibold text-gray-900 sm:text-xl">Can I use it for commercial purposes?</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline w-6 h-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" :class="{ 'transform rotate-180': open }">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="py-2 text-gray-600">
                        <p class="pb-2 text-sm sm:text-xl">Absolutely! Our template is highly customizable and can be used for both personal and business purposes.</p>
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