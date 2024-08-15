<div>
    <button wire:click="toggleLike" class="focus:outline-none">
        @if($isLiked)
            <span class="text-red-500">❤️</span> <!-- Si el usuario ha dado "like" -->
        @else
            <span class="text-gray-500">♡</span> <!-- Si el usuario no ha dado "like" -->
        @endif
    </button>
    <span>{{ $post->likes()->count() }} Likes</span>
</div>
