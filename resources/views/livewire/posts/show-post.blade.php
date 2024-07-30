<div x-data="postContent()" x-init="initialize()">
    <div class="flex px-4 mb-20">
        <div class="container mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <h1 class="pt-10 pb-0 text-4xl font-bold text-black sm:text-5xl md:text-7xl lg:pt-20 lg:pb-10">
                {{ $post->title }} 
            </h1>
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
                    
                    @if(auth()->user()->role === 'admin')
                        <div class="flex">
                            <div>
                                <x-post-created-data :post="$post" />
                                <x-post-tags class="my-5" :post="$post" />
                            </div>
                            
                            @if($post->status === 'draft')
                                <div class="ml-auto">
                                    <x-primary-button
                                        class="px-4 py-2"
                                        
                                    >Publish</x-primary-button>
                                </div>
                            @elseif($post->status === 'published')
                                <div class="ml-auto">
                                    <x-primary-button
                                        class="px-4 py-2"
                                        
                                    >Move to drafts</x-primary-button>
                                </div>
                            @endif
                        </div>  
                    @else
                        <div>
                            <x-post-created-data :post="$post" />
                            <x-post-tags class="my-5" :post="$post" />
                        </div>
                    @endif
                </div>
            </div>
        </div>
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

                        // Add smooth scroll with offset
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