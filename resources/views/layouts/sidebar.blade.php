<div x-data="{ activeSection: 'panel', hoverSection: null }" class="sticky top-0 flex">
    <!-- Sidebar -->
    <div class="flex flex-col w-16 h-screen bg-black">
        <div class="p-2">
            <div class="flex items-center justify-center p-2 hover:cursor-pointer"
                :class="{
                    'blur-xs': hoverSection === 'panel' && activeSection !== 'panel',
                    'bg-gray-800 rounded-md': activeSection === 'panel',
                    '': hoverSection !== 'panel' && activeSection !== 'panel'
                }"              
                @mouseover="hoverSection = 'panel'"
                @mouseleave="hoverSection = null" @click="activeSection = 'panel'; 
                hoverSection = null">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="white" class="size-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
            </div>
            <div class="flex items-center justify-center p-2 hover:cursor-pointer" 
                :class="{
                    'blur-xs': hoverSection === 'blog' && activeSection !== 'blog',
                    'bg-gray-800 rounded-md': activeSection === 'blog',
                    '': hoverSection !== 'blog' && activeSection !== 'blog'
                }"           
                @mouseover="hoverSection = 'blog'"
                @mouseleave="hoverSection = null" 
                @click="activeSection = 'blog'; hoverSection = null">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="white" class="size-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                </svg>
            </div>
            <div class="flex items-center justify-center p-2 hover:cursor-pointer"
                :class="{
                    'blur-xs': hoverSection === 'category' && activeSection !== 'category',
                    'bg-gray-800 rounded-md': activeSection === 'category',
                    '': hoverSection !== 'category' && activeSection !== 'category'
                }"      
                @mouseover="hoverSection = 'category'"
                @mouseleave="hoverSection = null" 
                @click="activeSection = 'category'; hoverSection = null">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="white" class="size-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>
            </div>
            <div class="flex items-center justify-center p-2 hover:cursor-pointer"
                :class="{
                    'blur-xs': hoverSection === 'tag' && activeSection !== 'tag',
                    'bg-gray-800 rounded-md': activeSection === 'tag',
                    '': hoverSection !== 'tag' && activeSection !== 'tag'
                }"      
                @mouseover="hoverSection = 'tag'"
                @mouseleave="hoverSection = null" 
                @click="activeSection = 'tag'; hoverSection = null">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="white" class="size-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                </svg>
            </div>
            <div class="flex items-center justify-center p-2 hover:cursor-pointer"
                :class="{
                    'blur-xs': hoverSection === 'metrics' && activeSection !== 'metrics',
                    'bg-gray-800 rounded-md': activeSection === 'metrics',
                    '': hoverSection !== 'metrics' && activeSection !== 'metrics'
                }"      
                @mouseover="hoverSection = 'metrics'"
                @mouseleave="hoverSection = null" 
                @click="activeSection = 'metrics'; hoverSection = null">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="white" class="size-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                </svg>
            </div>
            <div class="flex items-center justify-center p-2 hover:cursor-pointer"
                :class="{
                    'blur-xs': hoverSection === 'mail' && activeSection !== 'mail',
                    'bg-gray-800 rounded-md': activeSection === 'mail',
                    '': hoverSection !== 'mail' && activeSection !== 'mail'
                }"      
                @mouseover="hoverSection = 'mail'"
                @mouseleave="hoverSection = null" 
                @click="activeSection = 'mail'; hoverSection = null">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="white" class="size-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>
            </div>
            <div class="flex items-center justify-center p-2 hover:cursor-pointer"
                :class="{
                    'blur-xs': hoverSection === 'comments' && activeSection !== 'comments',
                    'bg-gray-800 rounded-md': activeSection === 'comments',
                    '': hoverSection !== 'comments' && activeSection !== 'comments'
                }"      
                @mouseover="hoverSection = 'comments'"
                @mouseleave="hoverSection = null" 
                @click="activeSection = 'comments'; hoverSection = null">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="white" class="size-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                </svg>
            </div>
            <div class="flex items-center justify-center p-2 hover:cursor-pointer" 
                :class="{
                    'blur-xs': hoverSection === 'settings' && activeSection !== 'settings',
                    'bg-gray-800 rounded-md': activeSection === 'settings',
                    '': hoverSection !== 'settings' && activeSection !== 'settings'
                }"      
                @mouseover="hoverSection = 'settings'"
                @mouseleave="hoverSection = null" 
                @click="activeSection = 'settings'; hoverSection = null">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="white" class="size-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </div>
        </div>
    </div>

    <div class="flex-1 px-2 py-5 bg-gradient-to-b from-yellow-100 via-yellow-300 to-white">
        <div x-show="hoverSection === 'panel' || (hoverSection === null && activeSection === 'panel')"
            class="transition-opacity duration-300">
            <a wire:navigate href="#">
                <div
                    class="justify-between p-2 m-2 transition-transform duration-300 bg-transparent rounded-lg hover:cursor-pointer hover:shadow-lg hover:scale-[1.02] backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 font-bold text-black text-md 2xl:text-xl">Admin panel</h3>
                    <p class="text-sm text-black 2xl:text-md">Manage your blog</p>
                </div>
            </a>
            <a wire:navigate href="#">
                <div
                    class="justify-between p-2 m-2 hover:scale-[1.02] transition-transform duration-300 bg-transparent rounded-lg hover:cursor-pointer hover:shadow-lg backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 font-bold text-black text-md 2xl:text-xl">New post</h3>
                    <p class="text-sm text-black 2xl:text-md">Create a new blog post</p>
                </div>
            </a>
            <a wire:navigate href="#">
                <div
                    class="justify-between p-2 m-2 hover:scale-[1.02] transition-transform duration-300 bg-transparent rounded-lg hover:cursor-pointer hover:shadow-lg backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 font-bold text-black text-md 2xl:text-xl">Blog analytics</h3>
                    <p class="text-sm text-black 2xl:text-md">Check out you blog's performance</p>
                </div>
            </a>
        </div>

        <div x-show="hoverSection === 'blog' || (hoverSection === null && activeSection === 'blog')"
            class="transition-opacity duration-300">
            <a wire:navigate href="{{ route('blog.index') }}">
                <div
                    class="justify-between p-2 m-2 transition-transform duration-300 bg-transparent rounded-lg hover:cursor-pointer hover:shadow-lg hover:scale-[1.02] backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 font-bold text-black text-md 2xl:text-xl">Manage posts</h3>
                    <p class="text-sm text-black 2xl:text-md">View all blog posts</p>
                </div>
            </a>
            <a wire:navigate href="{{ route('blog.create') }}">
                <div
                    class="justify-between p-2 m-2 hover:scale-[1.02] transition-transform duration-300 bg-transparent rounded-lg hover:cursor-pointer hover:shadow-lg backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 font-bold text-black text-md 2xl:text-xl">Create new post</h3>
                    <p class="text-sm text-black 2xl:text-md">Create a new blog posts</p>
                </div>
            </a>
            <a wire:navigate href="#">
                <div
                    class="justify-between p-2 m-2 hover:scale-[1.02] transition-transform duration-300 bg-transparent rounded-lg hover:cursor-pointer hover:shadow-lg backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 font-bold text-black text-md 2xl:text-xl">Blog analytics</h3>
                    <p class="text-sm text-black 2xl:text-md">Check out you blog's performance</p>
                </div>
            </a>
            <a wire:navigate href="#">
                <div
                    class="justify-between p-2 m-2 hover:scale-[1.02] transition-transform duration-300 bg-transparent rounded-lg hover:cursor-pointer hover:shadow-lg backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 font-bold text-black text-md 2xl:text-xl">Pending posts</h3>
                    <p class="text-sm text-black 2xl:text-md">View all pending blog posts</p>
                </div>
            </a>
        </div>
        
        <div x-show="hoverSection === 'category' || (hoverSection === null && activeSection === 'category')"
            class="transition-opacity duration-300">
            <a wire:navigate href="{{ route('categories.index') }}">
                <div
                    class="justify-between p-2 m-2 transition-transform duration-300 bg-transparent rounded-lg hover:cursor-pointer hover:shadow-lg hover:scale-[1.02] backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 font-bold text-black text-md 2xl:text-xl">Manage categories</h3>
                    <p class="text-sm text-black 2xl:text-md">View all categories</p>
                </div>
            </a>
            <a wire:navigate href="{{ route('categories.create') }}">
                <div
                    class="justify-between p-2 m-2 hover:scale-[1.02] transition-transform duration-300 bg-transparent rounded-lg hover:cursor-pointer hover:shadow-lg backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 font-bold text-black text-md 2xl:text-xl">Create new category</h3>
                    <p class="text-sm text-black 2xl:text-md">Create a new category</p>
                </div>
            </a>
        </div>

        <div x-show="hoverSection === 'tag' || (hoverSection === null && activeSection === 'tag')"
            class="transition-opacity duration-300">
            <a wire:navigate href="#">
                <div
                    class="justify-between p-2 m-2 transition-transform duration-300 bg-transparent rounded-lg hover:cursor-pointer hover:shadow-lg hover:scale-[1.02] backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 font-bold text-black text-md 2xl:text-xl">Manage tags</h3>
                    <p class="text-sm text-black 2xl:text-md">View all tags</p>
                </div>
            </a>
            <a wire:navigate href="{{ route('tags.create') }}">
                <div
                    class="justify-between p-2 m-2 hover:scale-[1.02] transition-transform duration-300 bg-transparent rounded-lg hover:cursor-pointer hover:shadow-lg backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 font-bold text-black text-md 2xl:text-xl">Create new tag</h3>
                    <p class="text-sm text-black 2xl:text-md">Create a new tag</p>
                </div>
            </a>
        </div>

        <div x-show="hoverSection === 'metrics' || (hoverSection === null && activeSection === 'metrics')"
            class="transition-opacity duration-300">
            <a wire:navigate href="#">
                <div
                    class="justify-between p-2 m-2 transition-transform duration-300 bg-transparent rounded-lg hover:cursor-pointer hover:shadow-lg hover:scale-[1.02] backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 font-bold text-black text-md 2xl:text-xl">Overall metrics</h3>
                    <p class="text-sm text-black 2xl:text-md">View web performance</p>
                </div>
            </a>
            <a wire:navigate href="#">
                <div
                    class="justify-between p-2 m-2 hover:scale-[1.02] transition-transform duration-300 bg-transparent rounded-lg hover:cursor-pointer hover:shadow-lg backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 font-bold text-black text-md 2xl:text-xl">Create new post</h3>
                    <p class="text-sm text-black 2xl:text-md">Create a new blog posts</p>
                </div>
            </a>
            <a wire:navigate href="#">
                <div
                    class="justify-between p-2 m-2 hover:scale-[1.02] transition-transform duration-300 bg-transparent rounded-lg hover:cursor-pointer hover:shadow-lg backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 font-bold text-black text-md 2xl:text-xl">Blog analytics</h3>
                    <p class="text-sm text-black 2xl:text-md">Check out you blog's performance</p>
                </div>
            </a>
        </div>
        
        <div x-show="hoverSection === 'mail' || (hoverSection === null && activeSection === 'mail')"
            class="transition-opacity duration-300">
            <a wire:navigate href="#">
                <div
                    class="justify-between p-2 m-2 transition-transform duration-300 bg-transparent rounded-lg hover:cursor-pointer hover:shadow-lg hover:scale-[1.02] backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 font-bold text-black text-md 2xl:text-xl">New mails</h3>
                    <p class="text-sm text-black 2xl:text-md">View new mails</p>
                </div>
            </a>
            <a wire:navigate href="#">
                <div
                    class="justify-between p-2 m-2 hover:scale-[1.02] transition-transform duration-300 bg-transparent rounded-lg hover:cursor-pointer hover:shadow-lg backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 font-bold text-black text-md 2xl:text-xl">Notifications</h3>
                    <p class="text-sm text-black 2xl:text-md">View notifications</p>
                </div>
            </a>
            <a wire:navigate href="#">
                <div
                    class="justify-between p-2 m-2 hover:scale-[1.02] transition-transform duration-300 bg-transparent rounded-lg hover:cursor-pointer hover:shadow-lg backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 font-bold text-black text-md 2xl:text-xl">Unseen mails</h3>
                    <p class="text-sm text-black 2xl:text-md">View unseen mails</p>
                </div>
            </a>
        </div>

        <div x-show="hoverSection === 'comments' || (hoverSection === null && activeSection === 'comments')"
            class="transition-opacity duration-300">
            <a wire:navigate href="#">
                <div
                    class="justify-between p-2 m-2 transition-transform duration-300 bg-transparent rounded-lg hover:cursor-pointer hover:shadow-lg hover:scale-[1.02] backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 font-bold text-black text-md 2xl:text-xl">New comments</h3>
                    <p class="text-sm text-black 2xl:text-md">View new comments</p>
                </div>
            </a>
            <a wire:navigate href="#">
                <div
                    class="justify-between p-2 m-2 hover:scale-[1.02] transition-transform duration-300 bg-transparent rounded-lg hover:cursor-pointer hover:shadow-lg backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 font-bold text-black text-md 2xl:text-xl">Approve comments</h3>
                    <p class="text-sm text-black 2xl:text-md">Approve new comments</p>
                </div>
            </a>
        </div>

        <div x-show="hoverSection === 'settings' || (hoverSection === null && activeSection === 'settings')"
            class="transition-opacity duration-300">
            <a wire:navigate href="{{ route('profile.edit') }}">
                <div
                    class="justify-between p-2 m-2 transition-transform duration-300 bg-transparent rounded-lg hover:cursor-pointer hover:shadow-lg hover:scale-[1.02] backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 font-bold text-black text-md 2xl:text-xl">Profile</h3>
                    <p class="text-sm text-black 2xl:text-md">View your profile</p>
                </div>
            </a>
            <a wire:navigate href="#">
                <div
                    class="justify-between p-2 m-2 hover:scale-[1.02] transition-transform duration-300 bg-transparent rounded-lg hover:cursor-pointer hover:shadow-lg backdrop-filter backdrop-blur-3xl dark:bg-gray-800">
                    <h3 class="my-2 font-bold text-black text-md 2xl:text-xl">Manage account</h3>
                    <p class="text-sm text-black 2xl:text-md">Manage your account</p>
                </div>
            </a>
        </div>
    </div>
</div>
