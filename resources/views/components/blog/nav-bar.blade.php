<nav class="relative">
    <div class="flex justify-center">
        <div class="absolute inset-x-0 w-full h-px mx-auto bg-gray-300 bottom-1 max-w-7xl"></div>
    </div>
    <div class="flex items-center justify-center space-x-4">
        <a href="#" class="font-medium hover:text-gray-800  relative pb-2 {{ request()->routeIs('blog.index') ? 'text-black border-b-2  border-gray-700' : 'text-gray-600' }}">Modern</a>
        <a href="#" class="font-medium hover:text-gray-800  relative pb-2 {{ request()->routeIs('gothic') ? 'text-gray-900 border-b-2 border-gray-700' : 'text-gray-600' }}">Gothic</a>
        <a href="#" class="font-medium hover:text-gray-800  relative pb-2 {{ request()->routeIs('baroque') ? 'text-black border-b-2 border-gray-700' : 'text-gray-600' }}">Baroque</a>
        <a href="#" class="font-medium hover:text-gray-800  relative pb-2 {{ request()->routeIs('renaissance') ? 'text-black border-b-2 border-gray-700' : 'text-gray-600' }}">Renaissance</a>
        <a href="#" class="font-medium hover:text-gray-800  relative pb-2 {{ request()->routeIs('industrial') ? 'text-black border-b-2 border-gray-700' : 'text-gray-600' }}">Industrial</a>
        <a href="#" class="font-medium hover:text-gray-800  relative pb-2 {{ request()->routeIs('sustainable') ? 'text-black border-b-2 border-gray-700' : 'text-gray-600' }}">Sustainable</a>
        <a href="#" class="font-medium hover:text-gray-800  relative pb-2 {{ request()->routeIs('minimalist') ? 'text-black border-b-2 border-gray-700' : 'text-gray-600' }}">Minimalist</a>
        <a href="#" class="font-medium hover:text-gray-800  relative pb-2 {{ request()->routeIs('classical') ? 'text-black border-b-2 border-gray-700' : 'text-gray-600' }}">Classical</a>

        <div class="relative pb-2">
            <input type="text" placeholder="Search..." class="py-2 pl-10 pr-4 text-sm font-medium text-gray-600 bg-white border-none rounded-full focus:outline-none focus:ring-0">
            <svg class="absolute pb-2 text-gray-500 transform -translate-y-1/2 w-7 h-7 top-1/2 left-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M18.07 10.93A7.07 7.07 0 1110.93 4.93a7.07 7.07 0 017.14 6z"></path>
            </svg>
        </div>
    </div>
</nav>