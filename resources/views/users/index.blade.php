
<x-admin-layout>
    <div class="max-w-6xl min-h-screen px-4 py-10 pb-32 mx-auto sm:px-10">
        <h2 class="text-2xl font-bold sm:text-3xl">
            {{ __('Manage users') }}
        </h2>

        <p class="pb-4 mt-2 text-gray-600 text-md">
            {{ __('Manage your users, grant authorizations or remove them') }}
        </p>

        @if(session('author_role_removed'))
            <p
                x-data="{ show: true }"
                x-show="show"
                class="text-red-500"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600"
                >{{ session('author_role_removed') }}
            </p>
        @elseif(session('author_role_granted'))
            <p
                x-data="{ show: true }"
                x-show="show"
                class="text-green-500"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600"
                >{{ session('author_role_granted') }}
            </p>
        @endif
        <livewire:users.show-users />
    </div>
</x-admin-layout>