
<x-app-layout>
    <div class="flex flex-col max-w-5xl min-h-screen pt-16 pb-10 mx-auto sm:pt-32 lg:flex-row">
        <section class="w-full px-2 pb-10">
            <h1 class="mb-6 text-4xl font-bold sm:text-5xl xl:text-8xl lg:text-7xl md:text-6xl">My liked posts</h1>
            
            <livewire:likes.show-liked-posts :userId="auth()->user()->id" />
        </section>
    </div>
</x-app-layout>