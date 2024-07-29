<x-app-layout>
    <!-- Navigation Bar -->
    <section class="pt-16 pb-10 sm:pt-32">
        <x-blog-nav-bar />
    </section>
    
    <livewire:categories.show-category :category="$category" />
</x-app-layout>


