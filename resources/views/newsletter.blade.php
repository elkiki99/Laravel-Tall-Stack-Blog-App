<x-app-layout>
    <div class="min-h-screen">
        <div class="py-12">
            <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
                <h1 class="py-5 text-transparent text-7xl bg-clip-text bg-gradient-to-r from-black to-gray-700">Get the best of <span class="font-bold text-black underline-yellow">{{env('APP_NAME')}}</span> in your in-box</h1>
                <p class="pb-5 text-2xl text-gray-800 border-b-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                <div class="flex gap-5">
                    <div class="p-2">
                        <img class="w-24 h-24"><img>
                        <h3 class="py-2">Daily</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime nesciunt architecto laudantium molestias explicabo quis? Rem placeat saepe, expedita commodi ratione, nihil omnis ipsa debitis, beatae ab ducimus magnam unde.</p>
                    </div>
                    <div class="p-2">
                        <img class="w-24 h-24"><img>
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
    
                            <form class="mt-6 space-y-6">
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