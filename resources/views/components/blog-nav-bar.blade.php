<nav x-data="{ open: false }" class="relative">
    
    <!-- Primary Navigation Menu -->
    <div class="flex justify-center">
        <div class="absolute inset-x-0 w-full h-px mx-auto bg-gray-300 lg:bottom-1 bottom-[-2px] max-w-7xl"></div>
    </div>
    <div class="items-center justify-center hidden space-x-4 lg:flex">
        <a wire:navigate href="{{ route('blog') }}" class="px-1 font-medium hover:text-black  relative pb-2 {{ request()->routeIs('blog') ? 'text-black border-b-4  border-gray-700' : 'text-gray-600' }}">All</a>
        @foreach(App\Models\Category::where('name', '!=', 'Uncategorized')->get() as $category)
            <a 
                wire:navigate 
                href="{{ route('categories.show', $category) }}" 
                class="px-1 font-medium hover:text-black relative pb-2 {{ request()->routeIs('categories.show') && request()->route('category')->slug === $category->slug ? 'text-black border-b-4 border-gray-700' : 'text-gray-600' }}">
                {{ $category->name }}
            </a>
        @endforeach
        
        <form action="{{ route('search', ['query' => '']) }}" method="GET" id="search-form">
            <div class="relative pb-2">
                <input type="text" name="query" placeholder="Search..." class="py-2 pl-10 pr-4 text-sm font-medium text-gray-600 bg-white border-none focus:outline-none focus:ring-0" id="search-input">
                <svg class="absolute pb-2 text-gray-500 transform -translate-y-1/2 w-7 h-7 top-1/2 left-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M18.07 10.93A7.07 7.07 0 1110.93 4.93a7.07 7.07 0 017.14 6z"></path>
                </svg>
            </div>
        </form>
    </div>

    <!-- Dropdown for smaller screens -->
    <div class="flex items-center justify-between px-5 lg:hidden">
        <form action="{{ route('search', ['query' => '']) }}" method="GET" id="search-form">
            <div class="relative flex-1">
                <input name="query" type="text" placeholder="Search..." class="w-full py-2 pl-10 pr-4 text-sm font-medium text-gray-600 bg-white border-none focus:outline-none focus:ring-0">
                <svg class="absolute text-gray-500 transform -translate-y-1/2 top-1/2 left-2 w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M18.07 10.93A7.07 7.07 0 1110.93 4.93a7.07 7.07 0 017.14 6z"></path>
                </svg>  
            </div>
        </form>

        
        <button @click="open = !open" class="text-gray-600 hover:text-black focus:outline-none">     
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-2.25-1.313M21 7.5v2.25m0-2.25-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3 2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75 2.25-1.313M12 21.75V19.5m0 2.25-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-2.25" />
            </svg>               
        </button>
    </div>
    
    <!-- Responsive Navigation Menu -->
    <div x-show="open" @click.away="open = false" class="absolute z-40 w-56 mt-2 bg-transparent rounded-md shadow-lg right-2 backdrop-filter backdrop-blur-3xl xl:hidden">
        <a wire:navigate href="{{ route('blog') }}" class="block px-4 py-2 text-sm text-black hover:blur-xs ">All</a>
        @foreach(App\Models\Category::all() as $category)
            <a wire:navigate href="{{ route('categories.show', $category) }}" class="block px-4 py-2 text-sm text-black hover:blur-xs ">{{ $category->name }}</a>
        @endforeach
    </div>
</nav>