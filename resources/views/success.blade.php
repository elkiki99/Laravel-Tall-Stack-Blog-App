<x-admin-layout>
    <div class="max-w-6xl min-h-screen px-4 py-10 pb-32 mx-auto sm:px-10">
        @if ($user->subscribed())
            <p>You are subscribed.</p>
        @endif
{{-- 
        @if ($user->subscribedToPrice(''))
            <p>You are subscribed to our yearly plan.</p>
        @endif

        @if ($user->subscribedToPrice(''))
            <p>You are subscribed to our yearly plan.</p>
        @endif

        @if ($user->subscribedToPrice(''))
            <p>You are subscribed to our yearly plan.</p>
        @endif --}}
    </div>
</x-admin-layout>
