<div>
    <button wire:click="toggleLike" class="focus:outline-none">
        @if($isLiked)
            <span class="text-red-500">❤️</span> 
        @else
            <span class="text-gray-500">♡</span> 
        @endif
    </button>
    
    @if($post->likes()->count() === 0)
        <span>0 likes</span>
    @elseif($post->likes()->count() === 1)
        <span>1 like</span>
    @elseif($post->likes()->count() > 1)
        <span>{{ $post->likes()->count() }} likes</span>
    @endif
</div>
