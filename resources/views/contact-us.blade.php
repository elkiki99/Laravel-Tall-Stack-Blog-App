<x-app-layout>
    <div class="py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <h1 class="text-gray-500 text-7xl"><span class="font-bold text-black">Contact us. </span>We'd love to hear from you</h1>

            <div class="flex justify-center">
                <div class="h-64 overflow-y-auto rounded-full max-h-96">
                    <img src="{{ asset('images/texture1.jpg') }}" alt="Contact us" class="rounded-lg">
                </div>
            </div>
            
            <div class="p-4 bg-white shadow sm:p-8 dark:bg-gray-800 sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Give us your email') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __("We'll try to answer as soon as possible, just give us your email") }}
                            </p>
                        </header>

                        <form class="mt-6 space-y-6">
                            <div>
                                <x-input-label for="email" :value="__('E-mail')" />
                                <x-text-input id="email" name="email" type="text" class="block w-full mt-1" required autofocus autocomplete="email" />
                                <x-input-error :messages="$errors->all('email')" class="mt-2" />
                            </div>
                        
                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Send') }}</x-primary-button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>