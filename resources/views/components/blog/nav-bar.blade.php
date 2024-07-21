<nav x-data="{ open: false }" class="relative">
    
    <!-- Primary Navigation Menu -->
    <div class="flex justify-center">
        <div class="absolute inset-x-0 w-full h-px mx-auto bg-gray-300 lg:bottom-1 bottom-[-2px] max-w-7xl"></div>
    </div>
    <div class="items-center justify-center hidden space-x-4 lg:flex">
        <a wire:navigate href="{{ route('blog.index') }}" class="px-1 font-medium hover:text-black  relative pb-2 {{ request()->routeIs('blog.index') ? 'text-black border-b-4  border-gray-700' : 'text-gray-600' }}">All</a>
        <a href="#" class="px-1 font-medium hover:text-black  relative pb-2 {{ request()->routeIs('modern') ? 'text-black border-b-4  border-gray-700' : 'text-gray-600' }}">Modern</a>
        <a href="#" class="px-1 font-medium hover:text-black  relative pb-2 {{ request()->routeIs('gothic') ? 'text-gray-900 border-b-4 border-gray-700' : 'text-gray-600' }}">Gothic</a>
        <a href="#" class="px-1 font-medium hover:text-black  relative pb-2 {{ request()->routeIs('baroque') ? 'text-black border-b-4 border-gray-700' : 'text-gray-600' }}">Baroque</a>
        <a href="#" class="px-1 font-medium hover:text-black  relative pb-2 {{ request()->routeIs('renaissance') ? 'text-black border-b-4 border-gray-700' : 'text-gray-600' }}">Renaissance</a>
        <a href="#" class="px-1 font-medium hover:text-black  relative pb-2 {{ request()->routeIs('industrial') ? 'text-black border-b-4 border-gray-700' : 'text-gray-600' }}">Industrial</a>
        <a href="#" class="px-1 font-medium hover:text-black  relative pb-2 {{ request()->routeIs('sustainable') ? 'text-black border-b-4 border-gray-700' : 'text-gray-600' }}">Sustainable</a>
        <a href="#" class="px-1 font-medium hover:text-black  relative pb-2 {{ request()->routeIs('minimalist') ? 'text-black border-b-4 border-gray-700' : 'text-gray-600' }}">Minimalist</a>
        <a href="#" class="px-1 font-medium hover:text-black  relative pb-2 {{ request()->routeIs('classical') ? 'text-black border-b-4 border-gray-700' : 'text-gray-600' }}">Classical</a>

        <div class="relative pb-2">
            <input type="text" placeholder="Search..." class="py-2 pl-10 pr-4 text-sm font-medium text-gray-600 bg-white border-none focus:outline-none focus:ring-0">
            <svg class="absolute pb-2 text-gray-500 transform -translate-y-1/2 w-7 h-7 top-1/2 left-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M18.07 10.93A7.07 7.07 0 1110.93 4.93a7.07 7.07 0 017.14 6z"></path>
            </svg>
        </div>
    </div>

    <!-- Dropdown for smaller screens -->
    <div class="flex items-center justify-between px-5 lg:hidden">
        <div class="relative flex-1">
            <input type="text" placeholder="Search..." class="w-full py-2 pl-10 pr-4 text-sm font-medium text-gray-600 bg-white border-none focus:outline-none focus:ring-0">
            <svg class="absolute text-gray-500 transform -translate-y-1/2 top-1/2 left-2 w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M18.07 10.93A7.07 7.07 0 1110.93 4.93a7.07 7.07 0 017.14 6z"></path>
            </svg>  
        </div>
        
        <button @click="open = !open" class="text-gray-600 hover:text-black focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
            </svg>                         
        </button>
    </div>
    
    <!-- Responsive Navigation Menu -->
    <div x-show="open" @click.away="open = false" class="absolute z-40 w-56 mt-2 bg-transparent rounded-md shadow-lg right-2 backdrop-filter backdrop-blur-3xl xl:hidden">
        <a wire:navigate href="{{ route('blog.index') }}" class="block px-4 py-2 text-sm text-black hover:blur-xs ">All</a>
        <a href="#" class="block px-4 py-2 text-sm text-black hover:blur-xs">Modern</a>
        <a href="#" class="block px-4 py-2 text-sm text-black hover:blur-xs">Gothic</a>
        <a href="#" class="block px-4 py-2 text-sm text-black hover:blur-xs">Baroque</a>
        <a href="#" class="block px-4 py-2 text-sm text-black hover:blur-xs">Renaissance</a>
        <a href="#" class="block px-4 py-2 text-sm text-black hover:blur-xs">Industrial</a>
        <a href="#" class="block px-4 py-2 text-sm text-black hover:blur-xs">Sustainable</a>
        <a href="#" class="block px-4 py-2 text-sm text-black hover:blur-xs">Minimalist</a>
        <a href="#" class="block px-4 py-2 text-sm text-black hover:blur-xs">Classical</a>
    </div>
</nav>