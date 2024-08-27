<x-admin-layout>
    <div class="max-w-6xl min-h-screen px-4 py-10 pb-32 mx-auto sm:px-10">
        <h2 class="text-2xl font-bold sm:text-3xl">
            {{ __('Admin Panel') }}
        </h2>

        <p class="pb-4 mt-2 text-gray-600 text-md">
            {{ __('Manage your whole application!') }}
        </p>

        <livewire:panel.admin-panel />
    </div>
</x-admin-layout>
