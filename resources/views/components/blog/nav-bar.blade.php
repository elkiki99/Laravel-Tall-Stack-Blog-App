<nav class="items-center justify-center mx-auto text-sm font-medium">
    <div class="w-full">
        <div class="overflow-hidden">            
            <ul class="p-4 text-gray-900 dark:text-gray-100">
                <div class="relative max-w-xs my-4">
                    <input type="text" placeholder="Search for blogs..." class="p-4 pl-12 text-sm text-gray-700 bg-white border rounded-full ">
                    <svg class="absolute w-6 h-6 text-gray-500 transform -translate-y-1/2 top-1/2 left-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M18.07 10.93A7.07 7.07 0 1110.93 4.93a7.07 7.07 0 017.14 6z"></path>
                    </svg>
                </div>
                
                <li class="w-full py-1">
                    <a {{-- href="{{ route('blog.category', ['category' => 'modern-design']) }}" --}}
                        class="px-3 text-xl font-light text-gray-700 transition-all duration-300 hover:cursor-pointer hover:text-black dark:hover:text-gray-100">
                        Modern Design
                    </a>
                </li>
                <li class="w-full py-1">
                    <a {{-- href="{{ route('blog.category', ['category' => 'sustainable-architecture']) }}" --}}
                        class="px-3 text-xl font-light text-gray-700 transition-all duration-300 hover:cursor-pointer hover:text-black dark:hover:text-gray-100">
                        Sustainability
                    </a>
                </li>
                <li class="w-full py-1">
                    <a {{-- href="{{ route('blog.category', ['category' => 'urban-planning']) }}" --}}
                        class="px-3 text-xl font-light text-gray-700 transition-all duration-300 hover:cursor-pointer hover:text-black dark:hover:text-gray-100">
                        Urban Planning
                    </a>
                </li>
                <li class="w-full py-1">
                    <a {{-- href="{{ route('blog.category', ['category' => 'historic-preservation']) }}" --}}
                        class="px-3 text-xl font-light text-gray-700 transition-all duration-300 hover:cursor-pointer hover:text-black dark:hover:text-gray-100">
                        Preservation
                    </a>
                </li>
                <li class="w-full py-1">
                    <a {{-- href="{{ route('blog.category', ['category' => 'historic-preservation']) }}" --}}
                        class="px-3 text-xl font-light text-gray-700 transition-all duration-300 hover:cursor-pointer hover:text-black dark:hover:text-gray-100">
                        Interior
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>