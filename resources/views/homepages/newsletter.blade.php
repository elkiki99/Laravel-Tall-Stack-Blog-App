<x-app-layout>
    <div class="min-h-screen">
        <div class="py-12">
            <div class="px-6 mx-auto space-y-6 sm:mt-20 max-w-7xl lg:px-8">
                <h1 class="py-5 text-4xl text-transparent sm:text-5xl md:text-7xl lg:text-8xl bg-clip-text bg-gradient-to-r from-black to-gray-800">
                    Get the best of <span class="font-bold text-black underline-yellow">{{ config('app.name') }}</span>
                    in your in-box</h1>
                <p class="pb-5 text-2xl text-gray-800 border-b-2">Stay updated with our latest news and special offers
                    directly in your inbox.</p>

                <section>
                    <div class="justify-center px-8 py-16 space-x-6 md:flex">
                        <!-- Daily Plan -->
                        <div class="w-full p-6 text-center transition bg-gray-100 border rounded-lg shadow-lg md:w-1/3 hover:scale-105">
                            <div class="flex items-center justify-between">
                                <h2 class="mb-4 text-2xl font-semibold">Daily</h2>
                                <span class="mb-4 text-2xl font-bold">$29.99</span>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                                stroke="currentColor" class="size-16 md:size-20">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                            </svg>
                            <ul class="my-2">
                                <li class="flex items-center mb-2"><x-check class="mr-2 size-6" />Curated daily content</li>
                                <li class="flex items-center mb-2"><x-check class="mr-2 size-6" />Featured news</li>
                                <li class="flex items-center mb-2"><x-check class="mr-2 size-6" />Daily alerts</li>
                                <li class="flex items-center mb-2"><x-check class="mr-2 size-6" />Exclusive interviews</li>
                                <li class="flex items-center mb-2"><x-check class="mr-2 size-6" />Breaking news updates</li>
                                <li class="flex items-center mb-2"><x-check class="mr-2 size-6" />Special offers and discounts</li>
                            </ul>
                            
                            <x-primary-button class="flex items-center justify-center w-full px-4 py-2 my-6">Subscribe now</x-primary-button>
                        </div>

                        <!-- Weekly Plan (Center Highlighted) -->
                        <div class="w-full p-6 text-center transition transform scale-105 bg-black border rounded-lg shadow-lg md:w-1/3 hover:scale-110">
                            <div class="flex items-center justify-between text-center">
                                <h2 class="mb-4 text-2xl font-semibold text-gray-100">Weekly</h2>
                                <span class="mb-4 text-2xl font-bold text-gray-100">$19.99</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                                stroke="currentColor" class="text-gray-300 size-16 md:size-20">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <ul class="my-2">
                                <li class="flex items-center mb-2 text-gray-300"><x-check class="mr-2 size-6" />Curated weekly content</li>
                                <li class="flex items-center mb-2 text-gray-300"><x-check class="mr-2 size-6" />In-depth articles</li>
                                <li class="flex items-center mb-2 text-gray-300"><x-check class="mr-2 size-6" />Expert insights</li>
                                <li class="flex items-center mb-2 text-gray-300"><x-check class="mr-2 size-6" />Exclusive content</li>
                                <li class="flex items-center mb-2 text-gray-300"><x-check class="mr-2 size-6" />Top stories of the week</li>
                                <li class="flex items-center mb-2 text-gray-300"><x-check class="mr-2 size-6" />Friday delivery</li>
                            </ul>
                            
                            <x-secondary-button class="flex items-center justify-center w-full px-4 py-2 my-6 ">Subscribe now</x-secondary-button>
                        </div>

                        <!-- Monthly Plan -->
                        <div class="w-full p-6 text-center transition bg-gray-100 border rounded-lg shadow-lg md:w-1/3 hover:scale-105">
                            <div class="flex items-center justify-between text-center">
                                <h2 class="mb-4 text-2xl font-semibold">Monthly</h2>
                                <span class="mb-4 text-2xl font-bold">$9.99</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-16 md:size-20">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0   0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                            </svg>
                            <ul class="my-2">
                                <li class="flex items-center mb-2"><x-check class="mr-2 size-6" />Monthly content roundup</li>
                                <li class="flex items-center mb-2"><x-check class="mr-2 size-6" />Exclusive long-form articles</li>
                                <li class="flex items-center mb-2"><x-check class="mr-2 size-6" />Deep dives into trends</li>
                                <li class="flex items-center mb-2"><x-check class="mr-2 size-6" />Expert analysis</li>
                                <li class="flex items-center mb-2"><x-check class="mr-2 size-6" />Subscriber-only reports</li>
                                </ul>
                              
                            <x-primary-button class="flex items-center justify-center w-full px-4 py-2 my-6">
                                Subscribe now
                            </x-primary-button>                        
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <style>
        .underline-yellow {
            text-decoration: underline;
            text-decoration-color: yellow;
        }
    </style>
</x-app-layout>
