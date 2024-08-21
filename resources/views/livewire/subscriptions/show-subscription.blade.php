<div>
    @foreach($plans as $planName => $plan)
        @if(auth()->user()->subscribedToPrice($plan['prices']['monthly']))
            <p>Congratulations! You are subscribed to our monthly {{ ucfirst($planName) }} plan.</p>
        @elseif(auth()->user()->subscribedToPrice($plan['prices']['annual']))
            <p>Congratulations! You are subscribed to our annual {{ ucfirst($planName) }} plan.</p>
        @endif
    @endforeach
</div>
