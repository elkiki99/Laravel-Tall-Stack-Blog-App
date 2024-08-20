<x-app-layout>
    <div class="min-h-screen">
        <div class="py-12">
            <div class="px-6 mx-auto space-y-6 sm:mt-20 max-w-7xl lg:px-8">
                <h1
                    class="py-5 text-4xl text-transparent sm:text-5xl md:text-7xl lg:text-8xl bg-clip-text bg-gradient-to-r from-black to-gray-800">
                    Get the best of <span class="font-bold text-black underline-yellow">{{ config('app.name') }}</span>
                    in your in-box</h1>
                <p class="pb-5 text-2xl text-gray-800 border-b-2">Stay updated with our latest news and special offers
                    directly in your inbox.</p>

                <section class="py-16" x-data="{ isAnnual: $el.querySelector('#hs-basic-with-description').checked }">
                    <h2 class="text-6xl font-bold">Pricing</h2>
                    <!-- Toggle switch -->
                    <div class="flex py-5 justify-center items-center">
                        <label class="min-w-14 text-sm text-gray-500 me-3 dark:text-neutral-400">Monthly</label>

                        <input type="checkbox" id="hs-basic-with-description"
                            class="relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-yellow-500 disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-yellow-500 checked:border-yellow-500 focus:checked:border-yellow-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-yellow-500 dark:checked:border-yellow-500 dark:focus:ring-offset-gray-600
                    
                            before:inline-block before:size-6 before:bg-white checked:before:bg-white before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-neutral-400 dark:checked:before:bg-white" checked
                            x-model="isAnnual"
                        />

                        <label class="relative min-w-14 text-sm text-gray-500 ms-3 dark:text-neutral-400">
                            Annual
                            <span class="absolute -top-10 start-auto -end-28">
                                <span class="flex items-center">
                                    <svg class="w-14 h-8 -me-6" width="45" height="25" viewBox="0 0 45 25"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M43.2951 3.47877C43.8357 3.59191 44.3656 3.24541 44.4788 2.70484C44.5919 2.16427 44.2454 1.63433 43.7049 1.52119L43.2951 3.47877ZM4.63031 24.4936C4.90293 24.9739 5.51329 25.1423 5.99361 24.8697L13.8208 20.4272C14.3011 20.1546 14.4695 19.5443 14.1969 19.0639C13.9242 18.5836 13.3139 18.4152 12.8336 18.6879L5.87608 22.6367L1.92723 15.6792C1.65462 15.1989 1.04426 15.0305 0.563943 15.3031C0.0836291 15.5757 -0.0847477 16.1861 0.187863 16.6664L4.63031 24.4936ZM43.7049 1.52119C32.7389 -0.77401 23.9595 0.99522 17.3905 5.28788C10.8356 9.57127 6.58742 16.2977 4.53601 23.7341L6.46399 24.2659C8.41258 17.2023 12.4144 10.9287 18.4845 6.96211C24.5405 3.00476 32.7611 1.27399 43.2951 3.47877L43.7049 1.52119Z"
                                            fill="currentColor" class="fill-gray-300 dark:fill-neutral-700" />
                                    </svg>
                                    <span
                                        class="mt-3 inline-block whitespace-nowrap text-[11px] leading-5 font-semibold tracking-wide uppercase bg-yellow-500 text-white rounded-full py-1 px-2.5">Save
                                        up to 10%</span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <div class="justify-center py-16 space-x-6 md:flex">
                        <!-- Foundation Plan -->
                        <div class="w-full p-6 text-center transition bg-gray-100 border rounded-lg shadow-lg md:w-1/3 hover:scale-[1.02]">
                            <div class="flex items-center justify-between text-center">
                                <h2 class="mb-4 text-2xl font-semibold">Foundation Plan</h2>
                                <span class="mb-4 text-2xl font-bold" x-text="isAnnual ? '$49/yr' : '$5/mo'"></span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                                stroke="currentColor" class="size-16 md:size-20">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                            </svg>
                            <ul class="my-2">
                                <li class="flex text-start mb-2"><x-check class="mr-2 size-6" />Monthly newsletters with
                                    key articles</li>
                                <li class="flex text-start mb-2"><x-check class="mr-2 size-6" />Access to all blog posts
                                    and updates</li>
                                <li class="flex text-start mb-2"><x-check class="mr-2 size-6" />Participation in
                                    community discussions</li>
                                <li class="flex text-start mb-2"><x-check class="mr-2 size-6" />Top stories of the week
                                </li>
                                <li class="flex text-start mb-2"><x-check class="mr-2 size-6" />Downloadable resources
                                </li>
                            </ul>
                            <a href="{{ route('checkout', ['plan' => 'price_1PpcFGCjBsuQEGoeUp80iibT']) }}"
                                class="flex items-center justify-center w-full px-4 py-2 my-6 text-gray-100 hover:blur-xs hover:cursor-pointer bg-gray-950">Subscribe
                                now</a>
                        </div>

                        <!-- Structural Plan (Center Highlighted) -->
                        <div
                            class="w-full p-6 text-center transition transform scale-105 bg-black border rounded-lg shadow-lg md:w-1/3 hover:scale-[1.07]">
                            <div class="flex items-center justify-between text-center">
                                <h2 class="mb-4 text-2xl font-semibold text-gray-100">Structural Plan</h2>
                                <span class="mb-4 text-2xl text-gray-100 font-bold" x-text="isAnnual ? '$99/yr' : '$10/mo'"></span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                                stroke="currentColor" class="size-16 text-gray-300 md:size-20">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205 3 1m1.5.5-1.5-.5M6.75 7.364V3h-3v18m3-13.636 10.5-3.819" />
                            </svg>

                            <ul class="my-2">
                                <li class="flex text-start mb-2 text-gray-200"><x-check class="mr-2 size-6" />Weekly
                                    newsletters with curated content</li>
                                <li class="flex text-start mb-2 text-gray-200"><x-check class="mr-2 size-6" />Early
                                    access to new blog posts</li>
                                <li class="flex text-start mb-2 text-gray-200"><x-check class="mr-2 size-6" />Exclusive
                                    monthly architectural design tips</li>
                                <li class="flex text-start mb-2 text-gray-200"><x-check
                                        class="mr-2 size-6" />Downloadable resources</li>
                                <li class="flex text-start mb-2 text-gray-200"><x-check class="mr-2 size-6" />Access to
                                    members-only webinars and Q&A sessions</li>
                                <li class="flex text-start mb-2 text-gray-200"><x-check class="mr-2 size-6" />Discounts
                                    on architectural events and workshops</li>
                            </ul>
                            <a href="{{ route('checkout', ['plan' => 'price_1Ppbr2CjBsuQEGoeCh9Isn65']) }}"
                                class="flex items-center justify-center w-full px-4 py-2 my-6 text-gray-900 bg-gray-100 hover:blur-xs hover:cursor-pointer">Subscribe
                                now</a>
                        </div>

                        <!-- Master Plan -->
                        <div
                            class="w-full p-6 text-center transition bg-gray-100 border rounded-lg shadow-lg md:w-1/3 hover:scale-[1.02]">
                            <div class="flex items-center justify-between">
                                <h2 class="mb-4 text-2xl font-semibold">Master Plan</h2>
                                <span class="mb-4 text-2xl font-bold" x-text="isAnnual ? '$199/yr' : '$20/mo'"></span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                                stroke="currentColor" class="size-16 md:size-20">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                            </svg>


                            <ul class="my-2">
                                <li class="flex text-start mb-2"><x-check class="mr-2 size-6" />Daily newsletters with
                                    latest trends</li>
                                <li class="flex text-start mb-2"><x-check class="mr-2 size-6" />Full access to all
                                    future blog posts</li>
                                <li class="flex text-start mb-2"><x-check class="mr-2 size-6" />Personalized content
                                    recommendations</li>
                                <li class="flex text-start mb-2"><x-check class="mr-2 size-6" />Access to exclusive
                                    architectural case studies</li>
                                <li class="flex text-start mb-2"><x-check class="mr-2 size-6" />Invitations to
                                    exclusive architecture events</li>
                                <li class="flex text-start mb-2"><x-check class="mr-2 size-6" />Access to all future
                                    digital products and courses</li>
                            </ul>
                            <a href="{{ route('checkout', ['plan' => 'price_1PpcFGCjBsuQEGoedB60MSmh']) }}"
                                class="flex items-center justify-center w-full px-4 py-2 my-6 text-gray-100 hover:blur-xs hover:cursor-pointer bg-gray-950">Subscribe
                                now</a>
                        </div>
                    </div>
                    <p class="py-10 text-sm text-center text-gray-500 border-b-2">Local taxes may apply. We reserve the
                        right to change prices or cancel plans at any time.</p>
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
