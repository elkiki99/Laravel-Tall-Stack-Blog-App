<div x-data="postContent()" x-init="initialize()">
    <div class="flex px-4 mb-20">
        <div class="container mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <h1 class="mt-10 text-4xl font-bold text-black lg:mt-0 sm:text-5xl md:text-7xl lg:pt-20">
                {{ $post->title }} 
            </h1>
            <h3 class="pb-0 font-light text-black text-md lg:pb-10 sm:text-xl md:text-2xl">{{ $post->subtitle }}</h3>

            <div class="flex items-center justify-center">   
                <div>
                    <x-post-metrics :post="$post" />
                    
                    <div class="flex pt-2">
                        <a class="flex items-center text-xl text-gray-900 hover:blur-xs" wire:navigate href="{{ route('categories.show', $post->category) }}">
                            {{ $post->category->name}}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-2 size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>
                        </a>
                    </div>                    
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

            <div class="relative overflow-hidden aspect-square sm:aspect-video rounded-3xl">
                <div class="absolute inset-0 bg-fixed bg-no-repeat bg-cover rounded-3xl parallax-bg"
                    style="background-image: url('{{ asset('storage/featured_images/' . $post->featured_image) }}');">
                </div>
            </div>

            <div class="flex max-w-5xl py-10 mx-auto md:space-x-12">
                <div class="hidden w-1/6 space-x-6 md:block">
                    <div class="sticky block pb-20 space-y-2 top-20" id="nav-bar">
                        <!-- H2 post links -->
                    </div>
                </div>

                <div class="w-full md:w-5/6">                    
                    {!! $post->body !!}
                        
                    @if(auth()->check() && auth()->user()->role === 'admin')
                        <div class="flex">
                            <div class="mt-10">
                                <x-post-created-data :post="$post" />
                                <x-post-tags class="my-5" :post="$post" />
                            </div>
                            
                            @if($post->status === 'draft')
                                <div class="flex items-center justify-center gap-2 ml-auto">
                                    <div class="mt-6">
                                        <x-primary-button
                                            x-on:click.prevent="$dispatch('open-modal', 'publish-post')"
                                            class="px-4 py-2">Publish
                                        </x-primary-button>
                                    </div>
                            
                                    <div class="mt-6">
                                        <x-danger-button 
                                            class="px-4 py-2 ml-auto"
                                            x-on:click.prevent="$dispatch('open-modal', 'confirm-post-deletion')">
                                            
                                            {{ __('Delete post') }}
                                        </x-danger-button>
                                    </div>
                                </div>
                            @elseif($post->status === 'published')
                                <div class="flex items-center justify-center gap-2 ml-auto">
                                    <div class="mt-6">
                                        <x-primary-button
                                            x-on:click.prevent="$dispatch('open-modal', 'move-to-drafts')"
                                            class="px-4 py-2">Move to drafts
                                        </x-primary-button>
                                    </div>
                            
                                    <div class="mt-6">
                                        <x-danger-button 
                                            class="px-4 py-2 ml-auto"
                                            x-on:click.prevent="$dispatch('open-modal', 'confirm-post-deletion')">
                                            
                                            {{ __('Delete post') }}
                                        </x-danger-button>
                                    </div>
                                </div>
                            @endif
                        </div>  
                    @else
                        <div class="flex justify-between mt-10">
                            <div>                                
                                <x-post-created-data :post="$post" />
                                <x-post-tags class="my-5" :post="$post" />
                            </div>
                            <div>
                                <livewire:likes.toggle-like :post="$post" />
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            
            <div class="max-w-5xl pt-24 mx-auto">
                <h3 class="text-6xl font-bold">{{ __('Comments') }}</h3>

                <livewire:comments.post-comments :post="$post" />
            </div>
        </div>

        <x-modal name="publish-post">
            <div class="p-6">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __('Are you sure you want to publish this post?') }}
                </h3>
                
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('This post will go live for everyone to see!') }}
                </p>
                
                <div class="flex justify-end mt-6">
                    <x-secondary-button class="px-4 py-2" x-on:click="$dispatch('close')">
                        {{ __('Cancel') }}
                    </x-secondary-button>
    
                    <x-primary-button 
                        class="px-4 py-2 ms-3" 
                        wire:click="publishPost({{ $post->id }})"
                    >
                        {{ __('Yes, publish post') }}
                    </x-primary-button>
                </div>
            </div>
        </x-modal>
    
        <x-modal name="move-to-drafts">
            <div class="p-6">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __('Are you sure you want to move this post to drafts?') }}
                </h3>
                
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('This post will move to drafts until you publish it again!') }}
                </p>
                
                <div class="flex justify-end mt-6">
                    <x-secondary-button class="px-4 py-2" x-on:click="$dispatch('close')">
                        {{ __('Cancel') }}
                    </x-secondary-button>
    
                    <x-primary-button 
                        class="px-4 py-2 ms-3" 
                        wire:click="moveToDrafts({{ $post->id }})"
                    >
                        {{ __('Yes, move to drafts') }}
                    </x-primary-button>
                </div>
            </div>
        </x-modal>

        <x-modal name="confirm-post-deletion">
            <div class="p-6">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __('Are you sure you want to delete this post?') }}
                </h3>
                
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('You won\'t be able to revert this.') }}
                </p>
                
                <div class="flex justify-end mt-6">
                    <x-secondary-button class="px-4 py-2" x-on:click="$dispatch('close')">
                        {{ __('Cancel') }}
                    </x-secondary-button>
                    
                    <livewire:posts.delete-post :postId="$post->id" />
                </div>           
            </div>
        </x-modal>
    </div>
    
    <script>
        function postContent() {
            return {
                navBar: null,
                headers: [],
                offset: 125,

                initialize() {
                    this.navBar = document.getElementById('nav-bar');
                    this.updateNavBar();
                    this.setupScroll();
                },

                updateNavBar() {
                    const headers = document.querySelectorAll('h2');
                    this.headers = Array.from(headers);

                    this.navBar.innerHTML = '';

                    this.headers.forEach(header => {
                        let text = header.innerText;
                        let id = text.toLowerCase().replace(/\s+/g, '-');

                        header.id = id;

                        let link = document.createElement('a');
                        link.classList.add('block', 'w-full', 'py-1', 'hover:blur-xs', 'transition', 'duration-300', 'ease-in-out');
                        link.href = `#${id}`;
                        link.innerText = text;
                        link.setAttribute('data-id', id);

                        this.navBar.appendChild(link);

                        link.addEventListener('click', (event) => {
                            event.preventDefault();
                            const targetElement = document.getElementById(id);
                            window.scrollTo({
                                top: targetElement.offsetTop - this.offset,
                                behavior: 'smooth'
                            });
                        });
                    });

                    this.updateActiveLink();
                },

                setupScroll() {
                    window.addEventListener('scroll', () => this.updateActiveLink());
                },

                updateActiveLink() {
                    let currentId = null;

                    this.headers.forEach((header) => {
                        const rect = header.getBoundingClientRect();
                        const id = header.id;

                        if (rect.top <= window.innerHeight && rect.bottom >= 0) {
                            currentId = id;
                        }
                    });

                    this.setActiveLink(currentId);
                },

                setActiveLink(id) {
                    this.navBar.querySelectorAll('a').forEach(link => {
                        if (link.getAttribute('data-id') === id) {
                            link.classList.add('font-bold');
                        } else {
                            link.classList.remove('font-bold');
                        }
                    });
                }
            }
        }
    </script>
</div>