<div>
    @forelse($comments as $comment)
        <div 
            wire:loading.remove 
            wire:target='deleteComment({{ $comment->id }})' 
            wire:key="{{ $comment->id }}"
            class="my-10">
            <div class="flex items-start p-4 rounded-lg bg-gray-50">
                <x-avatar :user="$comment->user" />

                <div class="w-full">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="font-semibold">{{ $comment->user->name }}</p>
                        </div>
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 19.5-15-15m0 0v11.25m0-11.25h11.25" />
                              </svg>                              
                            {{ $comment->created_at->diffForHumans() }}
                        </div>
                    </div>
                        
                    <p class="mr-24">{{ $comment->body }}</p>
                    @auth
                        <button wire:click="setParentComment({{ $comment->id }})"
                            class="text-sm text-blue-500">Reply</button>
                        @if(auth()->user()->id === $comment->user_id || auth()->user()->role === 'admin')
                            <button wire:click="deleteComment({{ $comment->id }})"
                                class="ml-4 text-sm text-red-500">Delete</button>
                        @endif
                    @endauth

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
                        <div wire:loading.remove wire:target='deleteComment({{ $childComment->id }})' wire:key='{{ $comment->id }}' class="flex items-start p-4 bg-gray-100 rounded-lg">
                            
                            <x-avatar :user="$childComment->user" />
                            
                            <div class="w-full">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="font-semibold">{{ $childComment->user->name }}</p>
                                    </div>
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 19.5-15-15m0 0v11.25m0-11.25h11.25" />
                                          </svg>                              
                                        {{ $comment->created_at->diffForHumans() }}
                                    </div>
                                </div>
                                
                                <p class="mr-24"><span class="text-gray-400">&#64;{{ $comment->user->name }} </span> {{ $childComment->body }}</p>
                                
                                @auth
                                    @if(auth()->user()->id === $childComment->user_id || auth()->user()->role === 'admin')
                                        <button wire:click="deleteComment({{ $childComment->id }})"
                                            class="text-sm text-red-500">Delete
                                        </button>
                                    @endif
                                @endauth
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
    
    <div class="justify-end px-1 mt-10">
        <span>{{ $comments->links() }}</span>
    </div>
    
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
