<div x-data="{ 
    likesCount: @json($post->likes->count()), 
    isLiked: @json(auth()->user()->likes->contains('post_id', $post->id)),
    toggleLike: function() {
        // Optimistically update the frontend
        if (this.isLiked) {
            this.likesCount--;
            this.isLiked = false;
        } else {
            this.likesCount++;
            this.isLiked = true;
        }

        // Call backend to sync the like state
        $wire.toggleLike().then(response => {
            // Adjust if there's any discrepancy
            this.isLiked = response.isLiked;
            this.likesCount = response.likesCount;
        });
    }
}">

    <a href="#" @click.prevent="toggleLike()">
        <span :class="isLiked ? 'text-red-500' : 'text-gray-400'">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
            </svg>
        </span>

        <span x-text="likesCount"></span>
    </a>
</div>