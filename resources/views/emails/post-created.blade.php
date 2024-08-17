<x-mail::message>
    # 🎉 New Post Created!

    Dear Admin,
    
    We wanted to inform you that a new blog post has been created by {{ $author }}. Please review the post and take the necessary actions to publish it.
    
    Post Details:
    
    - Title: {{ $title }}
    - Subtitle: {{ $subtitle }}
    - Excerpt: {{ $excerpt }}
    
    [Review Post]({{ $url }})
    
    Thank you for your attention to this matter.
    
    Best regards,  
    {{ config('app.name') }}
</x-mail::message>