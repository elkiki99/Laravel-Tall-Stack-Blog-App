
<x-admin-layout>
    <div class="max-w-6xl min-h-screen px-4 py-10 pb-32 mx-auto sm:px-10">
        <h2 class="text-2xl font-bold sm:text-3xl">
            {{ __('View comments') }}
        </h2>

        <p class="pb-4 mt-2 text-gray-600 text-md">
            {{ __('Manage all of your comments') }}
        </p>

        @if(session('success_updated'))
            <p
                x-data="{ show: true }"
                x-show="show"
                class="text-green-500"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600"
            >{{ session('success_created') }}</p>
        @endif

        <livewire:comments.show-comments />
    </div>
</x-admin-layout>