<x-app-layout>
    <section class="pt-16 sm:pt-32">
        <x-blog-nav-bar />
    </section>
    
    <livewire:posts.show-post :post="$post" />
</x-app-layout>
