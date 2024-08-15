<div>
    <section>
        <x-avatar :user="$user" class="sm:size-44 size-32" />

        {{-- @if($user->role === 'author') --}}
            <div class="flex justify-between">
                <div class="flex items-center">
                    <h2 class="my-2 text-2xl font-bold sm:text-3xl">
                        {{ $user->name }}
                    </h2>
                </div>
                
                @if(auth()->user()->role === 'admin')
                    <button 
                        class="flex items-center text-green-500 hover:blur-xs" 
                        x-on:click.prevent="$dispatch('open-modal', 'grant-author-role')"
                    >
                        <p>Grant author role</p>
                        <x-verified class="mx-2 text-green-500 size-6" />
                    </button>  
                @endif
            </div>
        {{-- @endif --}}

        <p class="text-gray-700">
            &#64;{{ $user->nickname }}
            &#9679;
            User
        </p>

        <div class="flex my-4 space-x-4">
            <a target="_blank" rel="noopener noreferrer" href="mailto:{{ $user->email }}" class="text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>
            </a>

            <a target="_blank" rel="noopener noreferrer" href="{{ $user->website }}" class="text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                </svg>
            </a>

            <a target="_blank" rel="noopener noreferrer" href="{{ $user->linkedin_profile }}" class="text-gray-800">
                <svg class="size-6" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 256 256">
                    <path
                        d="M218.123 218.127h-37.931v-59.403c0-14.165-.253-32.4-19.728-32.4-19.756 0-22.779 15.434-22.779 31.369v60.43h-37.93V95.967h36.413v16.694h.51a39.907 39.907 0 0 1 35.928-19.733c38.445 0 45.533 25.288 45.533 58.186l-.016 67.013ZM56.955 79.27c-12.157.002-22.014-9.852-22.016-22.009-.002-12.157 9.851-22.014 22.008-22.016 12.157-.003 22.014 9.851 22.016 22.008A22.013 22.013 0 0 1 56.955 79.27m18.966 138.858H37.95V95.967h37.97v122.16ZM237.033.018H18.89C8.58-.098.125 8.161-.001 18.471v219.053c.122 10.315 8.576 18.582 18.89 18.474h318.144c10.336.128 18.823-8.139 18.966-18.474V18.454c-.147-10.33-8.635-18.588-18.966-18.453"
                        fill="#1F2937" />
                </svg>
            </a>
        </div>

        <p class="text-gray-600 text-md dark:text-gray-400">
            {!! $user->bio !!}
        </p>
    </section>

    <section class="py-24 space-y-4">
        <h3 class="text-4xl font-bold">Liked blog posts</h3>

        @forelse($posts as $post)
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
                            @auth
                                @if(auth()->user()->role === 'admin' || auth()->user()->role === 'author' && auth()->user()->id === $post->author_id)
                                    <a class="hover:cursor-pointer" href={{ route('posts.edit', $post) }}>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-2 size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                        </svg>
                                    </a>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-600 text-md dark:text-gray-400">
                No liked posts yet
            </p>
        @endforelse

        {{ $posts->links() }}
    </section>

    <x-modal name="grant-author-role">
        <div class="p-6">
            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Are you sure you want to grant author privileges to this user?') }}
            </h3>
            
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('This user will become an author and will be able to create new blog posts.') }}
            </p>
            
            <div class="flex justify-end mt-6">
                <x-secondary-button class="px-4 py-2" x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button 
                    class="px-4 py-2 bg-green-500 ms-3" 
                    wire:click="grantAuthorRole({{ $user->id }})"
                >
                    {{ __('Yes, grant') }}
                </x-danger-button>            
            </div>
        </div>
    </x-modal>
</div>
