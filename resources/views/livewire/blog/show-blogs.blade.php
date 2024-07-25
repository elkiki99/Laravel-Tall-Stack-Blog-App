
<div class="flex flex-col min-h-screen mx-auto max-w-7xl lg:flex-row">
    <!-- First Section -->
    <section class="w-full px-2 pb-10 lg:pb-20 lg:w-4/6">
        <div class="grid grid-cols-1 gap-6 py-5">
            @foreach($blogs as $blog)
                <div class="flex flex-col pb-10 bg-white rounded-lg 2xl:pb-5 2xl:flex-row dark:bg-gray-800">
                    <div class="w-full overflow-hidden shadow-lg 2xl:w-1/2 2xl:aspect-square aspect-video">
                        <a wire:navigate href="{{ route('blog.show', $blog) }}">
                            <img loading="lazy" src="{{ asset('storage/featured_images/' . $blog->featured_image) }}" alt="Blog Image 1" class="object-cover w-full h-full transition-transform duration-300 transform hover:scale-105 hover:cursor-pointer">
                        </a>
                    </div>
                    <div class="flex flex-col justify-between w-full px-0 py-4 2xl:px-4 2xl:w-1/2">
                        <div>
                            <x-blog-metrics :blog="$blog" />

                            <h2 class="my-5 mb-2 text-2xl font-bold text-gray-900 md:text-4xl hover:cursor-pointer hover:text-gray-800 dark:text-gray-100">
                                {{ $blog->title }}
                            </h2>
                            <p class="text-lg text-gray-700 dark:text-gray-300">{{ $blog->excerpt }}</p>
                        </div>

                        <x-blog-created-data :blog="$blog" class="pt-4 text-lg" />
                        {{-- <x-blog-tags :blog="$blog" class="pt-2" /> --}}
                    </div>
                </div>
            @endforeach

            <!-- Placeholder Blog Post -->
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
        </div>
    </section>

    <!-- Second Section -->
    <section class="px-2 pb-20 mt-5 lg:px-5 lg:w-2/6 lg:mt-0">
        <div class="py-6 pb-5 border-b-2 border-gray-300">
            <x-blog-metrics :blog="$blog" />
            <h2 class="my-2 text-2xl font-bold text-gray-900 hover:cursor-pointer dark:text-gray-100">Best buildings in Netherlands</h2>
            <p>Explore the architectural gems of the Netherlands, from the sleek modern designs of Amsterdam's skyline to the historic charm of Utrecht's medieval structures.</p>

            <x-blog-created-data :blog="$blog" class="pt-5" />

            <div class="flex pt-2">
                {{-- <x-blog-tags :blog="$blog"  /> --}}
                
                <a href="#" class="ml-auto hover:cursor-pointer">  
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                    </svg> 
                </a>
            </div>
        </div>
        
        <div class="py-6 pb-5 border-b-2 border-gray-300">
            <x-blog-metrics :blog="$blog" />
            <h2 class="my-2 text-2xl font-bold text-gray-900 hover:cursor-pointer dark:text-gray-100">The Seven Wonders of the Ancient World</h2>
            <p>Uncover the marvels of the ancient world with our guide to the Seven Wonders, each a testament to the ingenuity and craftsmanship of past civilizations.</p>
            
            <x-blog-created-data :blog="$blog" class="pt-5" />

            <div class="flex pt-2">
                {{-- <x-blog-tags :blog="$blog"  /> --}}
                
                <a href="#" class="ml-auto hover:cursor-pointer">  
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                    </svg> 
                </a>
            </div>
        </div>

        <div class="py-6 pb-5 border-b-2 border-gray-300">
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

        <div class="py-6 pb-5 border-b-2 border-gray-300">
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

        <div class="py-6 pb-5 border-b-2 border-gray-300">
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
    </section>
</div>
