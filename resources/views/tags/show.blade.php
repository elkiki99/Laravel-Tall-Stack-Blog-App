<x-app-layout>
    <!-- Navigation Bar -->
    <section class="pt-16 pb-10 sm:pt-32">
        <x-blog-nav-bar />
    </section>
    
    <livewire:tags.show-tag :tag="$tag" />
</x-app-layout>


