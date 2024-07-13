<nav class="items-center justify-center mx-auto text-sm font-medium bg-transparent backdrop-filter backdrop-blur-3xl sm:w-auto sm:flex dark:text-zinc-200 dark:ring-white/10">
    <div class="w-full">
        <div class="overflow-hidden">
            <div class="relative flex items-center justify-center p-4">
                <input type="text" placeholder="Search..." class="p-4 pl-12 text-sm text-gray-700 bg-white border rounded-full focus:outline-none focus:ring-2 focus:ring-gray-800">
                <svg class="absolute w-6 h-6 text-gray-500 left-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M18.07 10.93A7.07 7.07 0 1110.93 4.93a7.07 7.07 0 017.14 6z"></path>
                </svg>
            </div>
            
            <ul class="p-4 text-gray-900 dark:text-gray-100">
                <li class="w-full py-1">
                    <a {{-- href="{{ route('blog.category', ['category' => 'modern-design']) }}" --}}
                        class="px-3 text-xl text-black transition-all duration-300 hover:cursor-pointer hover:text-gray-300 dark:hover:text-gray-100">
                        Modern Design
                    </a>
                </li>
                <li class="w-full py-1">
                    <a {{-- href="{{ route('blog.category', ['category' => 'sustainable-architecture']) }}" --}}
                        class="px-3 text-xl text-black transition-all duration-300 hover:cursor-pointer hover:text-gray-300 dark:hover:text-gray-100">
                        Sustainable Architecture
                    </a>
                </li>
                <li class="w-full py-1">
                    <a {{-- href="{{ route('blog.category', ['category' => 'urban-planning']) }}" --}}
                        class="px-3 text-xl text-black transition-all duration-300 hover:cursor-pointer hover:text-gray-300 dark:hover:text-gray-100">
                        Urban Planning
                    </a>
                </li>
                <li class="w-full py-1">
                    <a {{-- href="{{ route('blog.category', ['category' => 'historic-preservation']) }}" --}}
                        class="px-3 text-xl text-black transition-all duration-300 hover:cursor-pointer hover:text-gray-300 dark:hover:text-gray-100">
                        Historic Preservation
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>