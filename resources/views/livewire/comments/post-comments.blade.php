<div>
    <form wire:submit.prevent="addComment" class="mb-4">
        <div class="mt-4">
            <textarea 
                id="comment" 
                wire:model="comment" 
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" 
                rows="3" 
                placeholder="Write a comment"
            ></textarea>
            <x-input-error :messages="$errors->get('comment')" class="mt-2" />

            <x-primary-button type="submit" class="px-4 py-2 mt-4">Add comment</x-primary-button>
        </div>
    </form>

    <div>
        @foreach ($comments as $comment)
            <div class="mb-4">
                <div class="p-4 bg-gray-100 rounded">
                    <strong>{{ $comment->user->name }}</strong> <span>{{ $comment->created_at->diffForHumans() }}</span>
                    <p>{{ $comment->body }}</p>
                    <button wire:click="setParentComment({{ $comment->id }})" class="text-sm text-blue-500">Reply</button>
                </div>

                @if ($comment->children->isNotEmpty())
                    <div class="mt-4 ml-8">
                        @foreach ($comment->children as $childComment)
                            <div class="p-4 bg-gray-200 rounded">
                                <strong>{{ $childComment->user->name }}</strong> <span>{{ $childComment->created_at->diffForHumans() }}</span>
                                <p>{{ $childComment->body }}</p>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</div>