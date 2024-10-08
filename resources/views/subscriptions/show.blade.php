<x-admin-layout>
    <div class="max-w-6xl min-h-screen px-4 py-10 pb-32 mx-auto sm:px-10">
        <h2 class="text-2xl font-bold sm:text-3xl">
            {{ __('Current subscription') }}
        </h2>

        <p class="pb-4 mt-2 text-gray-600 text-md">
            {{ __('Manage your current subscription') }}
        </p>

        <livewire:subscriptions.show-subscription />
    </div>
</x-admin-layout>