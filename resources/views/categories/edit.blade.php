
<x-admin-layout>
    <div class="max-w-6xl min-h-screen p-10 pb-32 mx-auto">
        <h1 class="pb-5 mb-4 text-2xl font-bold sm:text-3xl">Edit category</h1>

        <livewire:categories.edit-category :id="$category->id" />
    </div>
</x-admin-layout>