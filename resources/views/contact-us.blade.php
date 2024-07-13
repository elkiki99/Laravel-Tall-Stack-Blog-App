<x-app-layout>
    <div class="py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <h1 class="py-5 text-transparent text-7xl bg-clip-text bg-gradient-to-r from-black to-gray-700">
                <span class="font-bold text-black">Contact us.</span>
                We'd love to hear from you
            </h1>

            <div class="relative h-screen overflow-hidden rounded-3xl">
                <div 
                    class="absolute inset-0 bg-fixed bg-no-repeat bg-cover rounded-3xl parallax-bg"
                    style="background-image: url('{{ asset('images/texture1.jpg') }}');">
                </div>
            </div>
            
            <div class="p-4 mt-10 bg-white shadow sm:p-8 dark:bg-gray-800 sm:rounded-lg">
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
                                <x-text-input id="email" name="email" type="text" class="block w-full mt-1" required autofocus autocomplete="email" />
                                <x-input-error :messages="$errors->all('email')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="message" :value="__('Message')" />
                                    <textarea id="message" name="message" placeholder="{{ __('Your message') }}" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600" required></textarea>
                                <x-input-error :messages="$errors->all('message')" class="mt-2" />
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
</x-app-layout>