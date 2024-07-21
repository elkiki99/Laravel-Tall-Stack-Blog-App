<x-app-layout>
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/5">
            @include('layouts.sidebar')
        </div>
        
        <!-- Main Content -->
        <div class="w-4/5">
            <div class="max-w-5xl min-h-screen p-4 pb-32 mx-auto">
                <h1 class="pt-20 mb-4 text-2xl font-bold sm:pt-36">Admin Panel</h1>
            </div>
        </div>
    </div>
</x-app-layout>