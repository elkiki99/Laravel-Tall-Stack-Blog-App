<nav x-data="{ open: false }" class="fixed top-0 z-50 w-full px-3 mx-auto text-sm font-medium text-center bg-transparent rounded-none sm:rounded-full sm:w-auto sm:top-10 backdrop-filter backdrop-blur-3xl sm:flex dark:text-zinc-200 dark:ring-white/10">
    <!-- Primary Navigation Menu -->
    <div class="flex items-center justify-between h-12 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <!-- Logo -->
        <div class="flex items-center">
            <a href="{{ route('welcome') }}">
                <x-application-logo class="block w-auto text-black fill-current size-8 dark:text-gray-200" />
            </a>
        </div>

        <!-- Hamburguer for mobile -->
        <div class="sm:hidden">
            <button @click="open = !open" class="inline-flex items-center justify-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path :class="{'hidden': open, 'block': !open }" class="block" stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                    <path :class="{'hidden': !open, 'block': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Navigation Links -->
        <div class="hidden sm:flex sm:items-center sm:space-x-8 sm:ml-10">
            <x-nav-link wire:navigate :href="route('about')" :active="request()->routeIs('about')">
                {{ __('About') }}
            </x-nav-link>
            <x-nav-link wire:navigate :href="route('blog.index')" :active="request()->routeIs('blog')">
                {{ __('Blog') }}
            </x-nav-link>
            <x-nav-link wire:navigate :href="route('contact')" :active="request()->routeIs('contact')">
                {{ __('Contact') }}
            </x-nav-link>
                     
            @if(!auth()->check())
                <form class="md:hidden" method="POST" action="{{ route('login') }}">
                    @csrf
                    <x-nav-link :href="route('login')" onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log In') }}
                    </x-nav-link>
                </form>
            @endif

            @if(auth()->check() && auth()->user()->role === 'admin')
                <x-nav-link class="md:hidden" wire:navigate href="{{ route('panel') }}">Panel</x-nav-link>
            @elseif(auth()->check() && auth()->user()->role === 'author')
                <x-nav-link class="md:hidden" wire:navigate href="#">Panel</x-nav-link>
            @elseif(auth()->check() && auth()->user()->role === 'user')
                <x-nav-link class="md:hidden" wire:navigate href="#">Profile</x-nav-link>
            @endif
            
            <x-nav-link wire:navigate :href="route('newsletter')" class="inline-flex items-center px-3 py-1 text-white bg-gray-900 rounded-2xl hover:blur-xs dark:bg-gray-100 dark:text-black hover:text-white hover:border-gray-300 dark:hover:text-black focus:text-white focus:border-gray-300 dark:focus:text-black">
                <div class="flex items-center">
                    {{ __('Newsletter') }}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                </div>
            </x-nav-link>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link wire:navigate :href="route('about')" :active="request()->routeIs('about')">
                {{ __('About') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link wire:navigate :href="route('blog.index')" :active="request()->routeIs('blog')">
                {{ __('Blog') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link wire:navigate :href="route('contact')" :active="request()->routeIs('contact')">
                {{ __('Contact') }}
            </x-responsive-nav-link>
            
            @if(auth()->check() && auth()->user()->role === 'admin')
                <x-responsive-nav-link wire:navigate href="{{ route('panel') }}">Panel</x-nav-link>
            @elseif(auth()->check() && auth()->user()->role === 'author')
                <x-responsive-nav-link wire:navigate href="#">Panel</x-nav-link>
            @elseif(auth()->check() && auth()->user()->role === 'user')
                <x-responsive-nav-link wire:navigate href="#">Profile</x-nav-link>
            @endif
            
            @if(auth()->check())
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            @else
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('login')" onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log In') }}
                    </x-responsive-nav-link>
                </form>
            @endif
            <div class="flex justify-start">
                <x-responsive-nav-link wire:navigate :href="route('newsletter')" class="inline-flex items-center px-3 py-1 text-white bg-gray-900 rounded-2xl hover:blur-xs dark:bg-gray-100 dark:text-black hover:text-white hover:border-gray-300 dark:hover:text-black focus:text-white focus:border-gray-300 dark:focus:text-black" style="width: auto;">
                    <div class="flex items-center">
                        {{ __('Newsletter') }}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                    </div>
                </x-responsive-nav-link>
            </div>
        </div>
    </div>
</nav>