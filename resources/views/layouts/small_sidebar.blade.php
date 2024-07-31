@php
    $routeName = Request::route()->getName();
@endphp

<div class="sticky top-0 flex" x-data="{ openMenuIndex: null }" @click.outside="openMenuIndex = null">
    <div class="relative flex flex-col w-16 h-full bg-black">
        <div class="p-2">        
            <div class="flex items-center justify-center hover:blur-xs">
                <button 
                    @click="openMenuIndex = openMenuIndex === 1 ? null : 1"
                    class="{{str_contains($routeName, 'panel') ? 'bg-gray-800 rounded-md' : ''}}"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="white" class="m-2 size-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                </button>
            </div>

            <div class="flex items-center justify-center hover:blur-xs">
                <button 
                    @click="openMenuIndex = openMenuIndex === 2 ? null : 2" 
                    class="{{str_contains($routeName, 'post') ? 'bg-gray-800 rounded-md' : ''}}"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="white" class="m-2 size-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                    </svg>
                </button>
            </div>

            <div class="flex items-center justify-center hover:blur-xs">
                <button 
                    @click="openMenuIndex = openMenuIndex === 3 ? null : 3"
                    class="{{str_contains($routeName, 'categories') ? 'bg-gray-800 rounded-md' : ''}}"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="m-2 size-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-2.25-1.313M21 7.5v2.25m0-2.25-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3 2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75 2.25-1.313M12 21.75V19.5m0 2.25-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-2.25" />
                    </svg>
                </button>
            </div>

            <div class="flex items-center justify-center hover:blur-xs">
                <button 
                    @click="openMenuIndex = openMenuIndex === 4 ? null : 4"
                    class="{{str_contains($routeName, 'tags') ? 'bg-gray-800 rounded-md' : ''}}"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="m-2 size-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                    </svg>
                </button>
            </div>

            <div class="flex items-center justify-center hover:blur-xs">
                <button @click="openMenuIndex = openMenuIndex === 5 ? null : 5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="white" class="m-2 size-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                    </svg>
                </button>
            </div>

            <div class="flex items-center justify-center hover:blur-xs">
                <button @click="openMenuIndex = openMenuIndex === 6 ? null : 6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="white" class="m-2 size-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                </button>
            </div>

            <div class="flex items-center justify-center hover:blur-xs">
                <button @click="openMenuIndex = openMenuIndex === 7 ? null : 7">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="white" class="m-2 size-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                    </svg>
                </button>
            </div>

            <div class="flex items-center justify-center hover:blur-xs">
                <button @click="openMenuIndex = openMenuIndex === 8 ? null : 8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="white" class="m-2 size-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                </button>
            </div>
        </div>
        
        <div x-show="openMenuIndex === 1"
            class="absolute z-40 w-56 mt-2 bg-white rounded-md shadow-lg -right-60 backdrop-filter backdrop-blur-3xl">
            <a wire:navigate href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-200">Admin panel</a>
            <a wire:navigate href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-200">Analytics</a>
        </div>

        <div x-show="openMenuIndex === 2"
            class="absolute z-40 w-56 mt-2 bg-white rounded-md shadow-lg -right-60 backdrop-filter backdrop-blur-3xl">
            <a wire:navigate href="{{ route('posts.index') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-200">Manage posts</a>
            <a wire:navigate href="{{ route('posts.create') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-200">Create new post</a>
            <a wire:navigate href="{{ route('posts.pending') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-200">Pending posts</a>
        </div>

        <div x-show="openMenuIndex === 3"
            class="absolute z-40 w-56 mt-2 bg-white rounded-md shadow-lg -right-60 backdrop-filter backdrop-blur-3xl">
            <a wire:navigate href="{{ route('categories.index') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-200">Manage categories</a>
            <a wire:navigate href="{{ route('categories.create') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-200">Create new category</a>
        </div>
        
        <div x-show="openMenuIndex === 4"
            class="absolute z-40 w-56 mt-2 bg-white rounded-md shadow-lg -right-60 backdrop-filter backdrop-blur-3xl">
            <a wire:navigate href="{{ route('tags.index') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-200">Manage tags</a>
            <a wire:navigate href="{{ route('tags.create') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-200">Create new tag</a>
        </div>
        
        <div x-show="openMenuIndex === 5"
            class="absolute z-40 w-56 mt-2 bg-white rounded-md shadow-lg -right-60 backdrop-filter backdrop-blur-3xl">
            <a wire:navigate href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-200">Overall metrics</a>
            <a wire:navigate href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-200">View web perfmormance</a>
        </div>
                
        <div x-show="openMenuIndex === 6"
            class="absolute z-40 w-56 mt-2 bg-white rounded-md shadow-lg -right-60 backdrop-filter backdrop-blur-3xl">
            <a wire:navigate href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-200">My inbox</a>
            <a wire:navigate href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-200">Unread mails</a>
            <a wire:navigate href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-200">Notifications</a>
        </div>
                
        <div x-show="openMenuIndex === 7"
            class="absolute z-40 w-56 mt-2 bg-white rounded-md shadow-lg -right-60 backdrop-filter backdrop-blur-3xl">
            <a wire:navigate href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-200">New comments</a>
            <a wire:navigate href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-200">Approve comments</a>
        </div>
                        
        <div x-show="openMenuIndex === 8"
            class="absolute z-40 w-56 mt-2 bg-white rounded-md shadow-lg -right-60 backdrop-filter backdrop-blur-3xl">
            <a wire:navigate href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-200">Profile</a>
            <a wire:navigate href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-200">Manage account</a>
        </div>
    </div>
</div>