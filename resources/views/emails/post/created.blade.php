<x-mail::message>
    <x-mail::panel>
        # 🎉 New Post Created!
    </x-mail::panel>

    Dear Admin,
    
    We wanted to inform you that a new blog post has been created by {{ $author }}. Please review the post and take the necessary actions to publish it.
    
    Post Details:
    
    - Title: {{ $title }}
    - Subtitle: {{ $subtitle }}
    - Excerpt: {{ $excerpt }}
    
    Review Post - {{ $url }}
    
    Thank you for your attention to this matter.

    Sent on: {{ now()->format('F j, Y \a\t g:i A') }}
    
    Best regards,  
    {{ config('app.name') }}
</x-mail::message>