
<x-admin-layout>
    <div class="max-w-6xl min-h-screen p-10 pb-32 mx-auto">
        <h2 class="text-2xl font-bold sm:text-3xl">
            @if(auth()->user()->role === 'admin')
            {{ __('Manage all posts') }}
            @elseif(auth()->user()->role === 'author')
            {{ __('Manage your posts') }}
            @endif
        </h2>

        <p class="pb-4 mt-2 text-gray-600 text-md dark:text-gray-400">
            @if(auth()->user()->role === 'admin')
            {{ __('Manage all posts, update or delete them') }}
            @elseif(auth()->user()->role === 'author')
            {{ __('Manage your posts, update or delete them') }}
            @endif
        </p>
            
        @if(session('success_deleted'))
            <p
                x-data="{ show: true }"
                x-show="show"
                class="text-red-500"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400"
            >{{ session('success_deleted') }}</p>
        @elseif(session('success_published'))
            <p
                x-data="{ show: true }"
                x-show="show"
                class="text-green-500"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400"
            >{{ session('success_published') }}</p>
        @endif

        <livewire:posts.show-posts />
    </div>
</x-admin-layout>