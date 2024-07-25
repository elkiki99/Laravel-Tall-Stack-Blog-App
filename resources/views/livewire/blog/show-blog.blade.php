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
                offset: 125,

                initialize() {
                    this.navBar = document.getElementById('nav-bar');
                    this.updateNavBar();
                    this.setupScroll();
                },

                updateNavBar() {
                    const headers = document.querySelectorAll('h2');

                    this.navBar.innerHTML = '';

                    headers.forEach(header => {
                        let text = header.innerText;
                        let id = text.toLowerCase().replace(/\s+/g, '-');

                        header.id = id;

                        let link = document.createElement('a');
                        link.classList.add('block', 'w-full', 'py-1');
                        link.href = `#${id}`;
                        link.innerText = text;

                        this.navBar.appendChild(link);
                    });
                },

                setupScroll() {
                    this.navBar.addEventListener('click', (event) => {
                        if (event.target.tagName === 'A') {
                            event.preventDefault();
                            const targetId = event.target.getAttribute('href').substring(1);
                            const targetElement = document.getElementById(targetId);

                            if (targetElement) {
                                const elementPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
                                window.scrollTo({
                                    top: elementPosition - this.offset,
                                    behavior: 'smooth'
                                });
                            }
                        }
                    });
                }
            }
        }
    </script>
</div>