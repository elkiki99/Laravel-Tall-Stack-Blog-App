<x-app-layout>
    <div class="min-h-screen">
        <div class="py-12">
            <div class="mx-auto space-y-6 sm:px-6 sm:mt-20 max-w-7xl lg:px-8">
                <h1 class="px-6 py-5 text-4xl text-transparent sm:px-0 sm:text-5xl md:text-7xl lg:text-8xl bg-clip-text bg-gradient-to-r from-black to-gray-800">
                    <span class="font-bold text-black underline-yellow">Contact us.</span>
                    We'd love to hear from you
                </h1>

                <div class="relative min-h-screen overflow-hidden rounded-3xl">
                    <div 
                        class="absolute inset-0 bg-fixed bg-no-repeat bg-cover rounded-3xl parallax-bg"
                        style="background-image: url('{{ asset('images/contact.jpg') }}');">
                    </div>
                </div>
                
                <div class="px-6 py-16 bg-white sm:px-0 dark:bg-gray-800">
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

                            @if(session('message-sent'))
                                <p
                                    x-data="{ show: true }"
                                    x-show="show"
                                    class="text-sm text-green-500"
                                    x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    {{-- class="text-sm text-gray-600 dark:text-gray-400" --}}
                                    >{{ session('message-sent') }}
                                </p>
                            @endif

                            <livewire:contact.contact-us-form />
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