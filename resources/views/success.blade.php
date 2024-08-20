<x-admin-layout>
    <div class="max-w-6xl min-h-screen px-4 py-10 pb-32 mx-auto sm:px-10">
        <h2 class="text-2xl font-bold sm:text-3xl">Your plans</h2>
         
        @if (auth()->user()->subscribed())
            <p class="pb-4 mt-2 text-gray-600 text-md dark:text-gray-400">You are subscribed.</p>
        @else
            <p class="pb-4 mt-2 text-gray-600 text-md dark:text-gray-400">You are not subscribed to any packages yet.</p>
        @endif
    </div>
</x-admin-layout>
