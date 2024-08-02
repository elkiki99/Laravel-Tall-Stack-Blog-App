<div class="my-10">
    @forelse($comments as $comment)
        <div wire:loading.remove wire:target='deleteComment({{ $comment->id }})' class="mb-4" wire:key="{{ $comment->id }}">
            <div class="flex items-start p-4 bg-gray-100 rounded-lg">
                @if ($comment->user->profile_pic)
                    <img src="{{ asset('storage/' . $comment->user->profile_pic) }}" alt="Profile picture"
                        class="mr-4 rounded-full size-12">
                @else
                    <svg class="mr-4 text-gray-400 rounded-full size-12" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd"
                            d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                            clip-rule="evenodd" />
                    </svg>
                @endif

                <div>
                    <strong>{{ $comment->user->name }}</strong> <span>{{ $comment->created_at->diffForHumans() }}</span>
                    <p>{{ $comment->body }}</p>
                    <button wire:click="setParentComment({{ $comment->id }})"
                        class="text-sm text-blue-500">Reply</button>
                    @if(auth()->check() && auth()->user()->id === $comment->user_id)
                        <button wire:click="deleteComment({{ $comment->id }})"
                            class="ml-4 text-sm text-red-500">Delete</button>
                    @endif

                    @if($parentCommentId === $comment->id)
                        <form wire:submit.prevent="addReply" class="mt-4">
                            <textarea 
                                rows="3"
                                id="reply" 
                                wire:model.defer="reply" 
                                placeholder="Write a reply"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" 
                            ></textarea>
                            <x-input-error :messages="$errors->get('reply')" class="mt-2" />

                            <x-primary-button type="submit" class="px-4 py-2 mt-4">Reply</x-primary-button>
                        </form>
                    @endif
                </div>
            </div>

            @if($comment->children->isNotEmpty())
                <div class="mt-4 ml-8">
                    @foreach ($comment->children as $childComment)
                        <div wire:loading.remove wire:target='deleteComment({{ $childComment->id }})' wire:key='{{ $comment->id }}' class="flex items-start p-4 mb-4 bg-gray-200 rounded">
                            @if ($childComment->user->profile_pic)
                                <img src="{{ asset('storage/' . $childComment->user->profile_pic) }}"
                                    alt="Profile picture" class="mr-4 rounded-full size-12">
                            @else
                                <svg class="mr-4 text-gray-400 rounded-full size-12" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                            @endif
                            
                            <div>
                                <strong>{{ $childComment->user->name }}</strong>
                                <span>{{ $childComment->created_at->diffForHumans() }}</span>
                                <p>{{ $childComment->body }}</p>
                                
                                @if(auth()->check() && auth()->user()->id === $childComment->user_id)
                                    <button wire:click="deleteComment({{ $childComment->id }})"
                                        class="text-sm text-red-500">Delete</button>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    @empty
        @auth
            <div class="py-4">
                <p>No comments yet. Be the first one to leave one!</p>
            </div>
        @endauth
    @endforelse
    
    @auth
        <form wire:submit.prevent="addComment" class="mb-4">
            <div class="mt-4">
                <textarea id="comment" wire:model.defer="comment" 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" 
                    rows="3" placeholder="Write a comment"></textarea>
                <x-input-error :messages="$errors->get('comment')" class="mt-2" />

                <x-primary-button type="submit" class="px-4 py-2 mt-4">Comment</x-primary-button>
            </div>
        </form>
    @else
        <div class="py-4">
            <p>Please <a class="text-yellow-500" href="{{ route('login') }}">log in</a> to leave a comment.</p>
        </div>
    @endauth
</div>
