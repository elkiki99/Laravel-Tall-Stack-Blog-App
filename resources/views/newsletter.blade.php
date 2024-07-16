<x-app-layout>
    <div class="min-h-screen">
        <div class="py-12">
            <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
                <h1 class="py-5 text-transparent text-7xl bg-clip-text bg-gradient-to-r from-black to-gray-700">Get the best of <span class="font-bold text-black underline-yellow">{{ config('app.name')}}</span> in your in-box</h1>
                <p class="pb-5 text-2xl text-gray-800 border-b-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                <div class="flex gap-5">
                    <div class="p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                          </svg>
                          
                        <h3 class="py-2">Daily</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime nesciunt architecto laudantium molestias explicabo quis? Rem placeat saepe, expedita commodi ratione, nihil omnis ipsa debitis, beatae ab ducimus magnam unde.</p>
                    </div>
                    <div class="p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-20">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                          </svg>
                          
                        <h3 class="py-2">Weekly</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime nesciunt architecto laudantium molestias explicabo quis? Rem placeat saepe, expedita commodi ratione, nihil omnis ipsa debitis, beatae ab ducimus magnam unde.</p>
                    </div>
                </div>


                
                <div class="py-16 bg-white dark:bg-gray-800">
                    <div class="max-w-xl">
                        <section>
                            <header>
                                <h2 class="text-4xl font-medium text-gray-900 dark:text-gray-100">
                                    {{ __('Give us your email') }}
                                </h2>
                                <p class="mt-1 text-gray-600 text-md dark:text-gray-400">
                                    {{ __("We'll try to answer as soon as possible, just give us your email") }}
                                </p>
                            </header>
                            
                            <form class="mt-6 space-y-6 ">
                                <div>
                                    <x-input-label for="email" :value="__('E-mail')" />
                                    <x-text-input id="email" name="email" type="text" class="block w-full mt-1" required autocomplete="email" />
                                    <x-input-error :messages="$errors->all('email')" class="mt-2" />
                                </div>
                                <div>
                                    <select class="w-full border-gray-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600" id="newsletter-type" name="newsletter-type">
                                        <option value="apple">Daily</option>
                                        <option value="banana">Weekly</option>
                                      </select>
                                </div>
                                <div class="flex items-center gap-4">
                                    <x-primary-button class="text-sm">{{ __('Send') }}</x-primary-button>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
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