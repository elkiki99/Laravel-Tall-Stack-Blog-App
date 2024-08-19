<x-mail::message>
    <x-mail::panel>
        # New contact message from {{ $userName }}
    </x-mail::panel>

    Message:

    {{ $message }}

    @auth
        User details:

        - Email: {{ $userEmail }}
        - Nickname: {{ $nickname }}
        - Role: {{ ucfirst($userRole) }}

        View user profile - {{ $url }}
    @else
        - Email: {{ $email }}
        - User not registered
    @endif

    Sent on: {{ now()->format('F j, Y \a\t g:i A') }}

    Thanks for staying connected, 
    {{ config('app.name') }} Team
</x-mail::message>
