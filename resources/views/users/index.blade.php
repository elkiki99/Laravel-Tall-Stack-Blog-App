
<x-admin-layout>
    <div class="max-w-6xl min-h-screen px-4 py-10 pb-32 mx-auto sm:px-10">
        <h2 class="text-2xl font-bold sm:text-3xl">
            {{ __('Manage users') }}
        </h2>

        <p class="pb-4 mt-2 text-gray-600 text-md dark:text-gray-400">
            {{ __('Manage your users, grant authorizations or remove them') }}
        </p>

        @if(session('author_role_removed'))
            <p
                x-data="{ show: true }"
                x-show="show"
                class="text-red-500"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400"
            >{{ session('author_role_removed') }}</p>
        @endif
        
        {{-- @elseif(session('success_deleted'))
            <p
                x-data="{ show: true }"
                x-show="show"
                class="text-red-500"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400"
            >{{ session('success_deleted') }}</p>

        @elseif(session('success_created'))
            <p
                x-data="{ show: true }"
                x-show="show"
                class="text-green-500"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400"
            >{{ session('success_created') }}</p>
        @endif --}}
        
        <livewire:users.show-users />
    </div>
</x-admin-layout>