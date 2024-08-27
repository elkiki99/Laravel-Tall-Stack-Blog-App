<x-admin-layout>
    <div class="max-w-6xl min-h-screen px-4 py-10 pb-32 mx-auto sm:px-10">
        <h2 class="text-2xl font-bold sm:text-3xl">
            {{ __('Edit blog post') }}
        </h2>

        <p class="pb-4 mt-2 text-gray-600 text-md">
            {{ __('Edit the current blog post') }}
        </p>

        <livewire:posts.edit-post :postId="$post->id" />
    </div>
</x-admin-layout>   