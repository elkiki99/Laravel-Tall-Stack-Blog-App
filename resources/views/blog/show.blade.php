<x-app-layout>
    <div class="flex px-4">
        <section class="w-1/6 py-10">
            <x-blog.nav-bar />
        </section>

        <div class="w-4/6 space-y-6 sm:px-6 lg:px-8">
            {{-- <a href="{{ route('blog.index') }}">Back to blog</a> --}}
            <h1 class="pt-10 pb-0 text-6xl font-bold text-black lg:pt-20 lg:pb-10">
                Architectural Wonders of the Netherlands: A Journey Through Time and Design
            </h1>

            <x-blog.metrics />

            <div class="relative min-h-screen overflow-hidden rounded-3xl">
                <div class="absolute inset-0 bg-fixed bg-no-repeat bg-cover rounded-3xl parallax-bg"
                    style="background-image: url('{{ asset('images/blog1.jpg') }}');">
                </div>
            </div>

            <div class="flex py-10 space-x-12">
                <div class="w-1/6 space-x-6">
                    <div class="sticky block pb-20 space-y-2 top-20">
                        <a class="block w-full py-1" href="#section1">Canal Houses</a>
                        <a class="block w-full py-1" href="#section2">Rotterdam</a>
                        <a class="block w-full py-1" href="#section3">Utrecht's Medieval Towers</a>
                        <a class="block w-full py-1" href="#section4">The Hague</a>
                    </div>
                </div>

                <div class="w-5/6 max-w-2xl mx-auto">
                    <h2 class="p-4 mb-6 text-4xl font-bold text-gray-900 border-b-2">
                        Exploring the Architectural Marvels of the Netherlands
                    </h2>
                    <p class="text-lg leading-relaxed text-gray-700" id="section1">
                        The Netherlands boasts a rich architectural heritage that spans centuries, blending traditional
                        Dutch aesthetics with innovative modern designs. In this blog post, we delve deep into some of
                        the most iconic buildings that define the architectural landscape of the Netherlands.
                    </p>

                    <h3 class="mt-8 mb-4 text-2xl font-bold text-gray-900">
                        The Historic Charm of Amsterdam's Canal Houses
                    </h3>
                    <p class="text-lg leading-relaxed text-gray-700">
                        Amsterdam's canal houses are renowned for their unique architectural style characterized by
                        narrow, tall facades and ornate gables. These houses reflect the city's rich history and its
                        prosperous Golden Age.
                    </p>
                    <img loading="lazy" src="{{ asset('images/canal-houses.jpg') }}" alt="Amsterdam canal houses"
                        class="my-5">
                    <p class="text-lg leading-relaxed text-gray-700">
                        During the 17th century, Amsterdam was a major trading hub, attracting merchants from all over
                        the world. The wealth generated from trade led to the construction of grand canal houses, which
                        served as both residences and warehouses. These houses were built along the iconic canals,
                        creating a picturesque and functional urban layout.
                    </p>
                    <p class="mt-2 text-lg leading-relaxed text-gray-700" id="section2">
                        One of the most striking features of these houses is their narrow width, a result of the city
                        taxing properties based on the width of the street-facing facade. This led to the development of
                        tall, narrow houses with deep interiors and multiple floors. The facades are often adorned with
                        ornate gables, each reflecting the unique style of the period in which they were built.
                    </p>

                    <h3 class="mt-8 mb-4 text-2xl font-bold text-gray-900">
                        Rotterdam's Modern Architectural Marvels
                    </h3>
                    <p class="text-lg leading-relaxed text-gray-700">
                        Rotterdam, known for its bold and innovative architecture, showcases a blend of modern
                        skyscrapers, such as the Erasmus Bridge and the Cube Houses, which redefine urban living and
                        design.
                    </p>
                    <img loading="lazy" src="{{ asset('images/rotterdam.jpg') }}" alt="Rotterdam" class="my-5">
                    <p class="mt-2 text-lg leading-relaxed text-gray-700">
                        The Erasmus Bridge, nicknamed "The Swan" for its graceful, asymmetrical shape, is a striking
                        symbol of the city. Spanning the Nieuwe Maas River, this bridge connects the northern and
                        southern parts of Rotterdam, facilitating both pedestrian and vehicular traffic. Its sleek,
                        white design and impressive engineering make it a focal point of the city's skyline.
                    </p>
                    <p class="text-lg leading-relaxed text-gray-700" id="section3">
                        Another architectural gem in Rotterdam is the Cube Houses, designed by the Dutch architect Piet
                        Blom. These distinctive houses are tilted at a 45-degree angle, creating a unique and
                        eye-catching appearance. The innovative design maximizes space and light, offering a fresh
                        perspective on urban housing. Visitors can explore one of the houses, which has been converted
                        into a museum, to get an inside look at the unconventional layout.
                    </p>

                    <h3 class="mt-8 mb-4 text-2xl font-bold text-gray-900">
                        Utrecht's Hidden Gems: Medieval Towers and Modern Integration
                    </h3>
                    <p class="text-lg leading-relaxed text-gray-700">
                        Utrecht, often overshadowed by Amsterdam and Rotterdam, boasts a blend of medieval charm and
                        contemporary integration in its architectural landscape. The city's skyline is punctuated by the
                        Dom Tower, a Gothic masterpiece that dominates the skyline and offers panoramic views of the
                        city and surrounding countryside from its observation deck.
                    </p>
                    <img loading="lazy" src="{{ asset('images/towers.jpg') }}" alt="Ultrecht's Medieval towers"
                        class="my-5">
                    <p class="text-lg leading-relaxed text-gray-700" id="section4">
                        Beyond its historical towers, Utrecht has embraced modern architecture with sustainable urban
                        planning initiatives and innovative building designs that harmoniously blend with its
                        centuries-old heritage.
                    </p>

                    <h3 class="mt-8 mb-4 text-2xl font-bold text-gray-900">
                        The Hague: Architectural Diversity and International Influence
                    </h3>
                    <p class="text-lg leading-relaxed text-gray-700">
                        The Hague, known as the political heart of the Netherlands, showcases a diverse architectural
                        landscape influenced by its international community and diplomatic presence. The city's
                        Binnenhof complex, dating back to the 13th century, serves as the seat of the Dutch Parliament
                        and showcases Gothic and Renaissance architectural styles.
                    </p>
                    <img loading="lazy" src="{{ asset('images/hauge.jpg') }}" alt="The hauge" class="my-5">
                    <p class="text-lg leading-relaxed text-gray-700">
                        In contrast, contemporary additions such as the Peace Palace, home to the International Court of
                        Justice, highlight The Hague's commitment to global diplomacy and modern architectural
                        excellence. Exploring The Hague offers a glimpse into the intersection of history, politics, and
                        architecture in the heart of the Netherlands.
                    </p>

                    <div class="my-16">
                        <x-blog.created-data />
                        <x-blog.tags />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
