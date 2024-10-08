
<x-admin-layout>
    <div class="max-w-6xl min-h-screen px-4 py-10 pb-32 mx-auto sm:px-10">
        <h2 class="text-2xl font-bold sm:text-3xl">
            {{ __('Manage categories') }}
        </h2>

        <p class="pb-4 mt-2 text-gray-600 text-md">
            {{ __('Manage your categories, update or delete them') }}
        </p>

        @if(session('success_updated'))
            <p
                x-data="{ show: true }"
                x-show="show"
                class="text-green-500"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600"
            >{{ session('success_updated') }}</p>
            
        @elseif(session('success_deleted'))
            <p
                x-data="{ show: true }"
                x-show="show"
                class="text-red-500"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600"
            >{{ session('success_deleted') }}</p>

        @elseif(session('success_created'))
            <p
                x-data="{ show: true }"
                x-show="show"
                class="text-green-500"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600"
            >{{ session('success_created') }}</p>
        @endif

        <livewire:categories.show-categories />
    </div>
</x-admin-layout>