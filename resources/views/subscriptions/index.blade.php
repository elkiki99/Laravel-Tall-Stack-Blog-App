
<x-admin-layout>
    <div class="max-w-6xl min-h-screen px-4 py-10 pb-32 mx-auto sm:px-10">
        <h2 class="text-2xl font-bold sm:text-3xl">
            {{ __('All subscriptions') }}
        </h2>

        <p class="pb-4 mt-2 text-gray-600 text-md dark:text-gray-400">
            {{ __('Manage all subscription options') }}
        </p>

        {{-- @if($user()->subscribed())
            You are subscribed to yearly subscription
            {{ $subscription->stripe_status }}
            {{ $subscription->trial_ends_at}}
        @else
            You are not subscribed
        @endif --}}
    </div>
</x-admin-layout>