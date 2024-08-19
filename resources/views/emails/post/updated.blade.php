<x-mail::message>
    <x-mail::panel>
        # 🎉 Post Updated!
    </x-mail::panel>

    Dear Admin,
    
    We wanted to inform you that a blog post by {{ $author }} has been updated. This means that it has become a draft until you review the post and take the necessary actions to publish it.
    
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