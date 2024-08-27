<x-app-layout>
    <!-- Navigation Bar -->
    <section class="pt-16 pb-10 sm:pt-32">
        <x-blog-nav-bar />
    </section>

    <div class="flex flex-col max-w-5xl min-h-screen mx-auto lg:flex-row">
        <!-- First Section -->
        <section class="w-full px-2 pb-10 lg:pb-20">
            <div class="grid grid-cols-1 gap-6 py-5">
                @forelse($posts as $post)
                    <div class="flex flex-col pb-10 bg-white rounded-lg 2xl:pb-5 2xl:flex-row dark:bg-gray-800">
                        <div class="w-full overflow-hidden shadow-lg 2xl:w-1/2 2xl:aspect-square aspect-video">
                            <a wire:navigate href="{{ route('posts.show', $post) }}">
                                <img loading="lazy" src="{{ asset('storage/featured_images/' . $post->featured_image) }}"
                                    alt="Blog Image 1"
                                    class="object-cover w-full h-full transition-transform duration-300 transform hover:scale-105 hover:cursor-pointer">
                            </a>
                        </div>
                        <div class="flex flex-col justify-between w-full px-0 py-4 2xl:px-4 2xl:w-1/2">
                            <div>
                                <x-post-metrics :post="$post" />

                                <a wire:navigate href="{{ route('posts.show', $post) }}">
                                    <h2
                                        class="my-5 mb-2 text-2xl font-bold text-gray-900 md:text-4xl hover:cursor-pointer hover:text-gray-800 dark:text-gray-100">
                                        {{ $post->title }}
                                    </h2>
                                </a>

                                <p class="text-lg text-gray-700 dark:text-gray-300">
                                    {{ \Illuminate\Support\Str::limit($post->excerpt, 100) }}</p>
                            </div>

                            <div class="flex items-center justify-center">
                                <div>
                                    <x-post-created-data :post="$post" class="pt-4 text-lg" />
                                    <x-post-tags :post="$post" class="pt-2" />
                                </div>
                                <div class="ml-auto">
                                    @auth
                                        @if (auth()->user()->role === 'admin' || (auth()->user()->role === 'author' && auth()->user()->id === $post->author_id))
                                            <a class="hover:cursor-pointer" href={{ route('posts.edit', $post) }}>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="mx-2 size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                                </svg>
                                            </a>
                                        @endif
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3 class="text-2xl font-medium text-gray-500">No blog posts found</h3>
            @endforelse
        </section>
    </div>
    
    <div class="max-w-5xl mx-auto mb-20">{{ $posts->links() }}</div>
</x-app-layout>
