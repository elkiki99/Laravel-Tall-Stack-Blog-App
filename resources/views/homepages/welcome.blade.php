<x-app-layout>
    <section class="flex items-center justify-center min-h-screen sm:pt-24 bg-gradient-to-b bg from-white via-yellow-300 to-white">
        <div class="px-6 mx-auto sm:space-y-6 max-w-7xl lg:px-8">
            <h1 class="py-10 mt-10 text-5xl text-center text-transparent sm:text-6xl sm:mt-0 sm:py-4 md:text-7xl bg-clip-text bg-gradient-to-r from-black to-gray-700">
                <span class="font-bold text-black underline-yellow">{{ config('app.name') }}</span>, an elegant blog template with integrated features
            </h1>
            <p class="py-2 text-xl text-center md:text-2xl">
                Welcome to The Ediffice Gazette, an elegant template to elevate your brand. It's built with the TALL stack, TailwindCSS, Alpine.js, Livewire and Laravel.
            </p>

            <div class="flex flex-col items-center justify-center py-5 space-y-3 sm:flex-row sm:space-y-0 sm:space-x-3">
                <a href="https://github.com/elkiki99/Laravel-Tall-Stack-Blog-App">
                    <x-primary-button class="px-4 py-2 text-2xl rounded-lg">
                        Get started
                        <svg viewBox="0 0 256 250" width="256" height="250" class="ml-2 text-white size-6" fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid">
                            <path d="M128.001 0C57.317 0 0 57.307 0 128.001c0 56.554 36.676 104.535 87.535 121.46 6.397 1.185 8.746-2.777 8.746-6.158 0-3.052-.12-13.135-.174-23.83-35.61 7.742-43.124-15.103-43.124-15.103-5.823-14.795-14.213-18.73-14.213-18.73-11.613-7.944.876-7.78.876-7.78 12.853.902 19.621 13.19 19.621 13.19 11.417 19.568 29.945 13.911 37.249 10.64 1.149-8.272 4.466-13.92 8.127-17.116-28.431-3.236-58.318-14.212-58.318-63.258 0-13.975 5-25.394 13.188-34.358-1.329-3.224-5.71-16.242 1.24-33.874 0 0 10.749-3.44 35.21 13.121 10.21-2.836 21.16-4.258 32.038-4.307 10.878.049 21.837 1.47 32.066 4.307 24.431-16.56 35.165-13.12 35.165-13.12 6.967 17.63 2.584 30.65 1.255 33.873 8.207 8.964 13.173 20.383 13.173 34.358 0 49.163-29.944 59.988-58.447 63.157 4.591 3.972 8.682 11.762 8.682 23.704 0 17.126-.148 30.91-.148 35.126 0 3.407 2.304 7.398 8.792 6.14C219.37 232.5 256 184.537 256 128.002 256 57.307 198.691 0 128.001 0Zm-80.06 182.34c-.282.636-1.283.827-2.194.39-.929-.417-1.45-1.284-1.15-1.922.276-.655 1.279-.838 2.205-.399.93.418 1.46 1.293 1.139 1.931Zm6.296 5.618c-.61.566-1.804.303-2.614-.591-.837-.892-.994-2.086-.375-2.66.63-.566 1.787-.301 2.626.591.838.903 1 2.088.363 2.66Zm4.32 7.188c-.785.545-2.067.034-2.86-1.104-.784-1.138-.784-2.503.017-3.05.795-.547 2.058-.055 2.861 1.075.782 1.157.782 2.522-.019 3.08Zm7.304 8.325c-.701.774-2.196.566-3.29-.49-1.119-1.032-1.43-2.496-.726-3.27.71-.776 2.213-.558 3.315.49 1.11 1.03 1.45 2.505.701 3.27Zm9.442 2.81c-.31 1.003-1.75 1.459-3.199 1.033-1.448-.439-2.395-1.613-2.103-2.626.301-1.01 1.747-1.484 3.207-1.028 1.446.436 2.396 1.602 2.095 2.622Zm10.744 1.193c.036 1.055-1.193 1.93-2.715 1.95-1.53.034-2.769-.82-2.786-1.86 0-1.065 1.202-1.932 2.733-1.958 1.522-.03 2.768.818 2.768 1.868Zm10.555-.405c.182 1.03-.875 2.088-2.387 2.37-1.485.271-2.861-.365-3.05-1.386-.184-1.056.893-2.114 2.376-2.387 1.514-.263 2.868.356 3.061 1.403Z" />
                        </svg>
                    </x-primary-button>
                </a>
                <a wire:navigate href="{{ route('about') }}">
                    <x-secondary-button class="px-4 py-2 mx-1 text-2xl font-thin rounded-lg">
                        Learn more
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-2 size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </x-secondary-button>
                </a>
            </div>
        </div>
    </section>

    <section class="flex items-center justify-center min-h-screen bg-fixed bg-no-repeat bg-cover"
        style="background-image: url('{{ asset('images/texture3.jpg') }}');">
        <div class="px-6 py-6 mx-auto max-w-7xl lg:px-8 lg:py-8">
            <div class="grid grid-cols-1 gap-4 py-24 md:grid-cols-2 lg:grid-cols-3">
                <div
                    class="justify-between p-6 transition-transform duration-300 bg-transparent rounded-lg shadow-lg hover:scale-105 backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 text-3xl font-bold text-gray-300">SEO Optimized</h3>
                    <svg class="w-12 h-12 mb-2 text-gray-100" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                    </svg>
                    <p class="text-gray-400">Built-in SEO features to help your blog rank higher on search engines.</p>
                </div>

                <div
                    class="justify-between p-6 transition-transform duration-300 bg-transparent rounded-lg shadow-lg hover:scale-105 backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 text-3xl font-bold text-gray-300">Responsive Design</h3>
                    <svg class="w-12 h-12 mb-2 text-gray-100" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                    </svg>
                    <p class="text-gray-400">Fully responsive design to ensure your blog looks great on all devices.</p>
                </div>

                <div
                    class="justify-between p-6 transition-transform duration-300 bg-transparent rounded-lg shadow-lg hover:scale-105 backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 text-3xl font-bold text-gray-300">Customizable</h3>
                    <svg class="w-12 h-12 mb-2 text-gray-100" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 7.5-2.25-1.313M21 7.5v2.25m0-2.25-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3 2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75 2.25-1.313M12 21.75V19.5m0 2.25-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-2.25" />
                    </svg>

                    <p class="text-gray-400">Easily customizable to fit your brand's style and requirements.</p>
                </div>
                <div
                    class="justify-between p-6 transition-transform duration-300 bg-transparent rounded-lg shadow-lg hover:scale-105 backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 text-3xl font-bold text-gray-300">Built with TALL Stack</h3>
                    <svg class="w-12 h-12 mb-2 text-gray-100" viewBox="0 0 316 316" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" stroke="currentColor">
                        <path
                            d="M305.8 81.125C305.77 80.995 305.69 80.885 305.65 80.755C305.56 80.525 305.49 80.285 305.37 80.075C305.29 79.935 305.17 79.815 305.07 79.685C304.94 79.515 304.83 79.325 304.68 79.175C304.55 79.045 304.39 78.955 304.25 78.845C304.09 78.715 303.95 78.575 303.77 78.475L251.32 48.275C249.97 47.495 248.31 47.495 246.96 48.275L194.51 78.475C194.33 78.575 194.19 78.725 194.03 78.845C193.89 78.955 193.73 79.045 193.6 79.175C193.45 79.325 193.34 79.515 193.21 79.685C193.11 79.815 192.99 79.935 192.91 80.075C192.79 80.285 192.71 80.525 192.63 80.755C192.58 80.875 192.51 80.995 192.48 81.125C192.38 81.495 192.33 81.875 192.33 82.265V139.625L148.62 164.795V52.575C148.62 52.185 148.57 51.805 148.47 51.435C148.44 51.305 148.36 51.195 148.32 51.065C148.23 50.835 148.16 50.595 148.04 50.385C147.96 50.245 147.84 50.125 147.74 49.995C147.61 49.825 147.5 49.635 147.35 49.485C147.22 49.355 147.06 49.265 146.92 49.155C146.76 49.025 146.62 48.885 146.44 48.785L93.99 18.585C92.64 17.805 90.98 17.805 89.63 18.585L37.18 48.785C37 48.885 36.86 49.035 36.7 49.155C36.56 49.265 36.4 49.355 36.27 49.485C36.12 49.635 36.01 49.825 35.88 49.995C35.78 50.125 35.66 50.245 35.58 50.385C35.46 50.595 35.38 50.835 35.3 51.065C35.25 51.185 35.18 51.305 35.15 51.435C35.05 51.805 35 52.185 35 52.575V232.235C35 233.795 35.84 235.245 37.19 236.025L142.1 296.425C142.33 296.555 142.58 296.635 142.82 296.725C142.93 296.765 143.04 296.835 143.16 296.865C143.53 296.965 143.9 297.015 144.28 297.015C144.66 297.015 145.03 296.965 145.4 296.865C145.5 296.835 145.59 296.775 145.69 296.745C145.95 296.655 146.21 296.565 146.45 296.435L251.36 236.035C252.72 235.255 253.55 233.815 253.55 232.245V174.885L303.81 145.945C305.17 145.165 306 143.725 306 142.155V82.265C305.95 81.875 305.89 81.495 305.8 81.125ZM144.2 227.205L100.57 202.515L146.39 176.135L196.66 147.195L240.33 172.335L208.29 190.625L144.2 227.205ZM244.75 114.995V164.795L226.39 154.225L201.03 139.625V89.825L219.39 100.395L244.75 114.995ZM249.12 57.105L292.81 82.265L249.12 107.425L205.43 82.265L249.12 57.105ZM114.49 184.425L96.13 194.995V85.305L121.49 70.705L139.85 60.135V169.815L114.49 184.425ZM91.76 27.425L135.45 52.585L91.76 77.745L48.07 52.585L91.76 27.425ZM43.67 60.135L62.03 70.705L87.39 85.305V202.545V202.555V202.565C87.39 202.735 87.44 202.895 87.46 203.055C87.49 203.265 87.49 203.485 87.55 203.695V203.705C87.6 203.875 87.69 204.035 87.76 204.195C87.84 204.375 87.89 204.575 87.99 204.745C87.99 204.745 87.99 204.755 88 204.755C88.09 204.905 88.22 205.035 88.33 205.175C88.45 205.335 88.55 205.495 88.69 205.635L88.7 205.645C88.82 205.765 88.98 205.855 89.12 205.965C89.28 206.085 89.42 206.225 89.59 206.325C89.6 206.325 89.6 206.325 89.61 206.335C89.62 206.335 89.62 206.345 89.63 206.345L139.87 234.775V285.065L43.67 229.705V60.135ZM244.75 229.705L148.58 285.075V234.775L219.8 194.115L244.75 179.875V229.705ZM297.2 139.625L253.49 164.795V114.995L278.85 100.395L297.21 89.825V139.625H297.2Z" />
                    </svg>
                    <p class="text-gray-400">Combining TailwindCSS, Alpine.js, Livewire, and Laravel for a seamless
                        development experience.</p>
                </div>
                <div
                    class="justify-between p-6 transition-transform duration-300 bg-transparent rounded-lg shadow-lg hover:scale-105 backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 text-3xl font-bold text-gray-300">User Comments</h3>
                    <svg class="w-12 h-12 mb-2 text-gray-100" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                    </svg>

                    <p class="text-gray-400">Integrated comments section to engage with your readers.</p>
                </div>
                <div
                    class="justify-between p-6 transition-transform duration-300 bg-transparent rounded-lg shadow-lg hover:scale-105 backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 text-3xl font-bold text-gray-300">Analytics</h3>
                    <svg class="w-12 h-12 mb-2 text-gray-100" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                    </svg>

                    <p class="text-gray-400">Built-in metrics and analytics to track your blog's performance.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="flex flex-col min-h-screen p-4 md:p-10 dark:bg-gray-900">
        <h2 class="relative py-5 my-12 text-6xl font-bold text-center sm:mt-24 md:text-7xl">Get your website 
            <span class="underline-yellow">up and running</span>
        </h2>
    
        <div class="flex flex-col justify-center space-y-6 lg:flex-row lg:space-x-6 lg:space-y-0">
            <div class="w-full lg:w-1/2 ">
                {{-- @foreach ($posts as $post) --}}
                <div class="bg-white rounded-lg dark:bg-gray-800">
                    <div class="flex flex-col justify-between">
                        <div>
                            <x-blog.metrics />
    
                            <a wire:navigate href="#">
                                <h2 class="my-5 mb-2 text-2xl font-bold text-gray-900 md:text-4xl hover:cursor-pointer hover:text-gray-800 dark:text-gray-100">
                                    Netherlands: A Journey Through Time and Design
                                </h2>
                            </a>
                            <p class="py-2 text-lg text-gray-700 dark:text-gray-300">We dive into the different types of buildings in the Netherlands and its overall design system.</p>
                        </div>
                    </div>
    
                    <div class="overflow-hidden aspect-square">
                        <a wire:navigate href="#">
                            <img loading="lazy" src="{{ asset('images/blog1.jpg') }}" alt="Blog Image 1" class="object-cover w-full h-full transition-transform duration-300 transform rounded-3xl hover:scale-105 hover:cursor-pointer">
                        </a>
                    </div>
                    <x-blog.tags class="py-5" />
                    <x-blog.created-data class="text-lg" />
    
                    <div class="grid grid-cols-1 gap-6 py-10">
                        {{-- @foreach ($posts as $post) --}}
                        <div class="flex flex-col bg-white rounded-lg shadow-sm 2xl:flex-row dark:bg-gray-800">
                            <div class="w-full overflow-hidden shadow-lg 2xl:w-1/2 aspect-square">
                                <img loading="lazy" src="{{ asset('images/blog4.jpg') }}" alt="Blog Image 1" class="object-cover w-full h-full transition-transform duration-300 transform hover:scale-105 hover:cursor-pointer">
                            </div>
                            <div class="flex flex-col justify-between w-full p-4 2xl:w-1/2">
                                <div>
                                    <x-blog.metrics />
    
                                    <h2 class="my-5 mb-2 text-2xl font-bold text-gray-900 md:text-4xl hover:cursor-pointer hover:text-gray-800 dark:text-gray-100">
                                        Best buildings in Netherlands
                                    </h2>
                                    <p class="text-lg text-gray-700 dark:text-gray-300">In this post, we dive into the different types of buildings in the Netherlands and its overall design system. What makes them unique?</p>
                                </div>
    
                                <x-blog.tags class="py-5" />
                                <x-blog.created-data class="text-lg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="w-full lg:w-1/2">
                <div class="flex flex-col py-10 space-y-10 md:flex-row md:space-y-0 md:space-x-12">
                    <div class="w-full mx-auto">
                        <h2 class="pb-5 mb-6 text-2xl font-bold text-gray-900 border-b-2 md:text-4xl">
                            Exploring the Architectural Marvels of the Netherlands
                        </h2>
                        <p class="text-lg leading-relaxed text-gray-700">
                            The Netherlands boasts a rich architectural heritage that spans centuries, blending traditional Dutch aesthetics with innovative modern designs. In this blog post, we delve deep into some of the most iconic buildings that define the architectural landscape of the Netherlands.
                        </p>
    
                        <h3 class="mt-8 mb-4 text-xl font-bold text-gray-900 md:text-2xl">
                            The Historic Charm of Amsterdam's Canal Houses
                        </h3>
                        <p class="text-lg leading-relaxed text-gray-700">
                            Amsterdam's canal houses are renowned for their unique architectural style characterized by narrow, tall facades and ornate gables. These houses reflect the city's rich history and its prosperous Golden Age.
                        </p>
                        <img loading="lazy" src="{{ asset('images/canal-houses.jpg') }}" alt="Amsterdam canal houses" class="my-5">
                        <p class="text-lg leading-relaxed text-gray-700">
                            During the 17th century, Amsterdam was a major trading hub, attracting merchants from all over the world. The wealth generated from trade led to the construction of grand canal houses, which served as both residences and warehouses. These houses were built along the iconic canals, creating a picturesque and functional urban layout.
                        </p>
                        <p class="mt-2 text-lg leading-relaxed text-gray-700">
                            One of the most striking features of these houses is their narrow width, a result of the city taxing properties based on the width of the street-facing facade. This led to the development of tall, narrow houses with deep interiors and multiple floors. The facades are often adorned with ornate gables, each reflecting the unique style of the period in which they were built.
                        </p>
                        <div class="fade-container">
                            <h3 class="mt-8 mb-4 text-xl font-bold text-gray-900 md:text-2xl">
                                Rotterdam's Modern Architectural Marvels
                            </h3>
                            <p class="text-lg leading-relaxed text-gray-700">
                                Rotterdam, known for its bold and innovative architecture, showcases a blend of modern skyscrapers, such as the Erasmus Bridge and the Cube Houses, which redefine urban living and design.
                            </p>
                            <p class="mt-2 text-lg leading-relaxed text-gray-700">
                                The Erasmus Bridge, nicknamed "The Swan" for its graceful, asymmetrical shape, is a striking
                                symbol of the city. Spanning the Nieuwe Maas River, this bridge connects the northern and
                                southern parts of Rotterdam, facilitating both pedestrian and vehicular traffic. Its sleek,
                                white design and impressive engineering make it a focal point of the city's skyline.
                            </p>
                        </div>
                        <div class="flex items-end justify-end py-10">
                            <a wire:navigate href="{{ route('blog.index') }}">
                                <x-primary-button class="flex items-center px-4 py-1 mx-1 text-2xl rounded-lg">
                                    Blog
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                    </svg>
                                </x-primary-button>
                            </a>
                        </div>
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

        .fade-container {
            position: relative;
        }

        .fade-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
            pointer-events: none;
        }
    </style>
</x-app-layout>
