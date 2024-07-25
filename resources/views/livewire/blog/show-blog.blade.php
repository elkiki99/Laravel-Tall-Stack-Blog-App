<div x-data="blogContent()" x-init="initialize()">
    <div class="flex px-4">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <h1 class="pt-10 pb-0 text-4xl font-bold text-black sm:text-5xl md:text-7xl lg:pt-20 lg:pb-10">
                {{ $blog->title }}
            </h1>

            <x-blog-metrics :blog="$blog" />

            <div class="relative overflow-hidden aspect-square sm:aspect-video rounded-3xl">
                <div class="absolute inset-0 bg-fixed bg-no-repeat bg-cover rounded-3xl parallax-bg"
                    style="background-image: url('{{ asset('storage/featured_images/' . $blog->featured_image) }}');">
                </div>
            </div>

            <div class="flex max-w-5xl py-10 mx-auto md:space-x-12">
                <div class="hidden w-1/6 space-x-6 md:block">
                    <div class="sticky block pb-20 space-y-2 top-20" id="nav-bar">
                        <!-- H2 blog links -->
                    </div>
                </div>

                <div class="w-full md:w-5/6">
                    {!! $blog->body !!}

                    <div class="my-16">
                        <x-blog-created-data :blog="$blog" />
                        {{-- <x-blog-tags class="my-5" :blog="$blog" /> --}}
                    </div>
                </div>  
            </div>
        </div>
    </div>

    <script>
        function blogContent() {
            return {
                navBar: null,
                headers: [],
                offset: 125, // Offset value for scrolling

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

                    // Set initial active link
                    this.updateActiveLink();
                },

                setupScroll() {
                    window.addEventListener('scroll', () => this.updateActiveLink());
                },

                updateActiveLink() {
                    let currentId = null;

                    // Check each header to see if it's in the viewport
                    this.headers.forEach((header) => {
                        const rect = header.getBoundingClientRect();
                        const id = header.id;

                        if (rect.top <= window.innerHeight && rect.bottom >= 0) {
                            currentId = id;
                        }
                    });

                    // Set the active link based on the currentId
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