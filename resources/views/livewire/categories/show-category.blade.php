<div class="flex flex-col min-h-screen mx-auto max-w-7xl lg:flex-row">
    <!-- First Section -->
    <section class="w-full px-2 pb-10 lg:pb-20 lg:w-4/6">
        <div class="grid grid-cols-1 gap-6 py-5">
            @foreach($posts as $post)
                <div class="flex flex-col pb-10 bg-white rounded-lg 2xl:pb-5 2xl:flex-row dark:bg-gray-800">
                    <div class="w-full overflow-hidden shadow-lg 2xl:w-1/2 2xl:aspect-square aspect-video">
                        <a wire:navigate href="{{ route('posts.show', $post) }}">
                            <img loading="lazy" src="{{ asset('storage/featured_images/' . $post->featured_image) }}" alt="Blog Image 1" class="object-cover w-full h-full transition-transform duration-300 transform hover:scale-105 hover:cursor-pointer">
                        </a>
                    </div>
                        <div class="flex flex-col justify-between w-full px-0 py-4 2xl:px-4 2xl:w-1/2">
                            <div>
                                <x-post-metrics :post="$post" />
                                
                                <a wire:navigate href="{{ route('posts.show', $post) }}">
                                    <h2 class="my-5 mb-2 text-2xl font-bold text-gray-900 md:text-4xl hover:cursor-pointer hover:text-gray-800 dark:text-gray-100">
                                            {{ $post->title }}
                                    </h2>
                                </a>

                                <p class="text-lg text-gray-700 dark:text-gray-300">{{ \Illuminate\Support\Str::limit($post->excerpt, 100) }}</p>
                            </div>
                            
                            <div class="flex items-center justify-center">    
                                <div>
                                    <x-post-created-data :post="$post" class="pt-4 text-lg" />
                                    <x-post-tags :post="$post" class="pt-2" />
                                </div>
                            <div class="ml-auto">
                                @if(auth()->user()->role === 'admin')
                                    <a class="hover:cursor-pointer" href={{ route('posts.edit', $post) }}>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-2 size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        </div>
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
        @foreach($posts as $post)
            <div class="py-6 pb-5 border-b-2 border-gray-300">

                <div class="flex items-center justify-center">
                    <x-post-metrics :post="$post" />
                    
                    <div class="ml-auto">
                        @if(auth()->user()->role === 'admin')
                        <a class="hover:cursor-pointer" href={{ route('posts.edit', $post) }}>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-2 size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                            </svg>
                        </a>
                        @endif
                    </div>
                </div>
                
                <a wire:navigate href="{{ route('posts.show', $post) }}">
                    <h2 class="my-2 text-2xl font-bold text-gray-900 hover:cursor-pointer dark:text-gray-100">{{ $post->title }}</h2>
                </a>
                
                <p class="text-lg text-gray-700 dark:text-gray-300">{{ \Illuminate\Support\Str::limit($post->meta_description, 100) }}</p>
                
                <x-post-created-data :post="$post" class="pt-5" />

                <div class="flex pt-2">
                    <x-post-tags :post="$post"  />
                    
                    <a wire:navigate href="#" class="ml-auto hover:cursor-pointer">  
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                        </svg> 
                    </a>
                </div>
            </div>
        @endforeach

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
