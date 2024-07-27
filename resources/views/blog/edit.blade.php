<x-admin-layout>
    <div class="max-w-6xl min-h-screen p-10 pb-32 mx-auto">
        <h1 class="mb-4 text-2xl font-bold sm:text-3xl pb-5">Edit blog</h1>

        <livewire:blog.edit-blog :id="$blog->id" />
    </div>
</x-admin-layout>   