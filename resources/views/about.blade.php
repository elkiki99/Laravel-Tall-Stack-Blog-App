<x-app-layout>
    <div class="absolute inset-0">
        <nav class="fixed z-40">
            <ul>
                <li><a href="#section1">Our purpose</a></li>
                <li><a href="#section2">What we offer</a></li>
                <li><a href="#section3">Completely free</a></li>
            </ul>
        </nav>
        
        <section id="section1" class="relative h-screen overflow-hidden">
            <div class="absolute inset-0 px-10 bg-fixed bg-no-repeat bg-cover parallax-bg" style="background-image: url('{{ asset('images/texture3.jpg') }}');">
                <div class="flex items-center justify-center h-full">
                    <h1 class="text-center text-white text-8xl">
                        <span class="font-bold text-black">Our purpose</span> is to inspire bloggers all over the globe through our beautiful UI
                    </h1>
                </div>
            </div>
        </section>

        <section id="section2" class="relative h-screen overflow-hidden">
            <div>
                <div class="flex items-center justify-center h-full">
                    <h1 class="m-10 text-gray-500 text-7xl">
                        <span class="font-bold text-black">What we offer</span> is a starting point for all bloggers outt there
                    </h1>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
