<div>
    @forelse($comments as $comment)
        <div
            wire:loading.remove 
            wire:target='deleteComment({{ $comment->id }})' 
            wire:key="{{ $comment->id }}"
            class="my-10">
            <div class="flex items-start p-4 rounded-lg bg-gray-50">
                <x-avatar class="size-20" :user="$comment->user" />

                <div class="w-full">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            @if ($comment->user->role === 'author')
                                <h3 class="text-lg font-bold">
                                    <a wire:navigate href="{{ route('users.show', $comment->user)}}">{{ $comment->user->name }}</a>
                                </h3>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="ml-2 text-blue-500 size-6">
                                    <path fill-rule="evenodd"
                                        d="M8.603 3.799A4.49 4.49 0 0 1 12 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 0 1 3.498 1.307 4.491 4.491 0 0 1 1.307 3.497A4.49 4.49 0 0 1 21.75 12a4.49 4.49 0 0 1-1.549 3.397 4.491 4.491 0 0 1-1.307 3.497 4.491 4.491 0 0 1-3.497 1.307A4.49 4.49 0 0 1 12 21.75a4.49 4.49 0 0 1-3.397-1.549 4.49 4.49 0 0 1-3.498-1.306 4.491 4.491 0 0 1-1.307-3.498A4.49 4.49 0 0 1 2.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 0 1 1.307-3.497 4.49 4.49 0 0 1 3.497-1.307Zm7.007 6.387a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                                        clip-rule="evenodd" />
                                </svg>
                            @elseif($comment->user->role === 'user')
                                <h3 class="text-lg font-bold">{{ $comment->user->name }}</h3>
                            @endif            
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
                            
                            <x-avatar class="size-20" :user="$childComment->user" />
                            
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
