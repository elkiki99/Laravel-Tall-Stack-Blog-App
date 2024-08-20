<x-admin-layout>
    <div class="max-w-6xl min-h-screen px-4 py-10 pb-32 mx-auto sm:px-10">
        <h2 class="text-2xl font-bold sm:text-3xl">
            {{ __('Current subscription') }}
        </h2>

        <p class="pb-4 mt-2 text-gray-600 text-md dark:text-gray-400">
            {{ __('Manage your current subscription') }}
        </p>

        @if(auth()->user()->subscribed())
            <p>You are subscribed.</p>
        @endif

        @if (auth()->user()->subscribedToProduct(config('pricing.plans.foundation_plan.product_id')))
            <p>You are subscribed to our Foundation product.</p>
        @endif

        @if (auth()->user()->subscribedToPrice(config('pricing.plans.foundation_plan.prices.monthly')))
            <p>You are subscribed to our monthly Foundation plan.</p>
        @elseif(auth()->user()->subscribedToPrice(config('pricing.plans.foundation_plan.prices.annual')))
            <p>You are subscribed to our annual Foundation plan.</p>
        @endif

        @if (auth()->user()->subscribedToProduct(config('pricing.plans.structure_plan.product_id')))
            <p>You are subscribed to our Structure product.</p>
        @endif

        @if (auth()->user()->subscribedToPrice(config('pricing.plans.structure_plan.prices.monthly')))
            <p>You are subscribed to our monthly Structure plan.</p>
        @elseif (auth()->user()->subscribedToPrice(config('pricing.plans.structure_plan.prices.annual')))
            <p>You are subscribed to our annual Structure plan.</p>
        @endif

        @if (auth()->user()->subscribedToProduct(config('pricing.plans.master_plan.product_id')))
            <p>You are subscribed to our Master product.</p>
        @endif

        @if (auth()->user()->subscribedToPrice(config('pricing.plans.master_plan.prices.monthly')))
            <p>You are subscribed to our monthly Master plan.</p>
        @elseif (auth()->user()->subscribedToPrice(config('pricing.plans.master_plan.prices.annual')))
            <p>You are subscribed to our annual Master plan.</p>
        @endif
    </div>
</x-admin-layout>