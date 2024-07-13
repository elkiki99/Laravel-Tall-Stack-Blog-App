<x-app-layout>
    <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
        <h1 class="pt-10 pb-0 font-bold text-black lg:pt-20 lg:pb-10 text-7xl">
            Best buildings in Netherlands
        </h1>

        <div class="relative min-h-[70vh] overflow-hidden rounded-3xl">
            <div 
                class="absolute inset-0 bg-fixed bg-no-repeat bg-cover rounded-3xl parallax-bg"
                style="background-image: url('{{ asset('images/blog1.jpg') }}');">
            </div>
        </div>

        <div class="max-w-3xl mx-auto">
            <h2 class="mt-12 mb-6 text-4xl font-bold text-gray-900">
                Exploring the Architectural Marvels of the Netherlands
            </h2>
            <p class="text-lg leading-relaxed text-gray-700">
                The Netherlands boasts a rich architectural heritage that spans centuries, blending traditional Dutch aesthetics with innovative modern designs. In this blog post, we delve deep into some of the most iconic buildings that define the architectural landscape of the Netherlands.
            </p>

            <h3 class="mt-8 mb-4 text-2xl font-bold text-gray-900">
                The Historic Charm of Amsterdam's Canal Houses
            </h3>
            <p class="text-lg leading-relaxed text-gray-700">
                Amsterdam's canal houses are renowned for their unique architectural style characterized by narrow, tall facades and ornate gables. These houses reflect the city's rich history and its prosperous Golden Age.
            </p>

            <h3 class="mt-8 mb-4 text-2xl font-bold text-gray-900">
                Rotterdam's Modern Architectural Marvels
            </h3>
            <p class="text-lg leading-relaxed text-gray-700">
                Rotterdam, known for its bold and innovative architecture, showcases a blend of modern skyscrapers, such as the Erasmus Bridge and the Cube Houses, which redefine urban living and design.
            </p>

            <h3 class="mt-8 mb-4 text-2xl font-bold text-gray-900">
                Utrecht's Hidden Gems: Medieval Towers and Modern Integration
            </h3>
            <p class="text-lg leading-relaxed text-gray-700">
                Utrecht, often overshadowed by Amsterdam and Rotterdam, boasts a blend of medieval charm and contemporary integration in its architectural landscape. The city's skyline is punctuated by the Dom Tower, a Gothic masterpiece that dominates the skyline and offers panoramic views of the city and surrounding countryside from its observation deck.             
            </p>
            <p class="mt-2 text-lg leading-relaxed text-gray-700">
                Beyond its historical towers, Utrecht has embraced modern architecture with sustainable urban planning initiatives and innovative building designs that harmoniously blend with its centuries-old heritage.
            </p>
            
            <h3 class="mt-8 mb-4 text-2xl font-bold text-gray-900">
                The Hague: Architectural Diversity and International Influence
            </h3>
            <p class="text-lg leading-relaxed text-gray-700">
                The Hague, known as the political heart of the Netherlands, showcases a diverse architectural landscape influenced by its international community and diplomatic presence. The city's Binnenhof complex, dating back to the 13th century, serves as the seat of the Dutch Parliament and showcases Gothic and Renaissance architectural styles. 
            </p>
            <p class="mt-2 text-lg leading-relaxed text-gray-700">
                In contrast, contemporary additions such as the Peace Palace, home to the International Court of Justice, highlight The Hague's commitment to global diplomacy and modern architectural excellence. Exploring The Hague offers a glimpse into the intersection of history, politics, and architecture in the heart of the Netherlands.
            </p>

            {{-- <div class="flex justify-center mt-12">
                <a href="{{ route('blog.index') }}" class="px-6 py-3 font-bold text-white transition duration-300 bg-gray-900 rounded hover:bg-gray-800">Back to Blog</a>
            </div> --}}
        </div>
    </div>
</x-app-layout>