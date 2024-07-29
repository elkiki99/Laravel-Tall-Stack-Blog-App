<x-app-layout>
    <!-- Navigation Bar -->
    <section class="pt-16 pb-10 sm:pt-32">
        <x-blog-nav-bar />
    </section>
    
    <livewire:categories.show-category :category="$category" />

    <style>
        .underline-yellow {
            text-decoration: underline;
            text-decoration-color: yellow;
        }
    </style>
</x-app-layout>


