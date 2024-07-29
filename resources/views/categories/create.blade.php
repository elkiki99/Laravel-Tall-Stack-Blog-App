
<x-admin-layout>
    <div class="max-w-6xl min-h-screen p-10 pb-32 mx-auto">
        <h2 class="text-2xl font-bold sm:text-3xl">
            {{ __('Create category') }}
        </h2>

        <p class="pb-4 mt-2 text-gray-600 text-md dark:text-gray-400">
            {{ __('Create a new category') }}
        </p>

        <livewire:categories.create-category />
    </div>
</x-admin-layout>