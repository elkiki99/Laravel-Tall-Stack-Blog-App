<div class="min-h-screen mt-5 overflow-x-auto">
    <div class="w-full mb-5 md:w-1/2">
        <form class="flex items-center p-1">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input wire:model.live="searchComments" type="text" id="simple-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search comments..." required="">
            </div>
        </form>
    </div>
    
    @if($comments->count() > 0)
        <table class="min-w-full bg-white">
            <thead class="bg-gray-100">
                <tr class="">
                    <th class="p-4 font-normal text-left">
                        <div class="inline-flex items-center">
                            Avatar
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-4 h-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-4 font-normal text-left">
                        <div class="inline-flex items-center">
                            Comment
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-4 h-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                            </svg>
                        </div>
                    </th>
                    <th class="hidden p-4 font-normal text-left md:table-cell">
                        <div class="inline-flex items-center">
                            User
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-4 h-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                            </svg>
                        </div>
                    </th>
                    <th class="hidden p-4 font-normal text-left lg:table-cell">
                        <div class="inline-flex items-center">
                            Created
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-4 h-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-4 font-normal text-right ">
                        <div class="inline-flex items-center">
                            Manage
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-4 h-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                            </svg>
                        </div>
                    </th>                
                </tr>
            </thead>
            
            <tbody>
                @foreach($comments as $comment)
                    <tr 
                        wire:loading.remove 
                        wire:target='deleteComment({{ $comment->id }})' 
                        wire:key="{{ $comment->id }}"
                        class="bg-white border-b-2"
                    />
                        <td>
                            @if($comment->user->role === 'author')
                                <x-avatar class="m-1 border-blue-500 size-16" :user="$comment->user" />
                            @else
                                <x-avatar class="m-1 size-16" :user="$comment->user" />
                            @endif
                        </td>
                        <td class="p-4 font-bold rounded-lg">
                            <a  wire:navigate href="{{ route('posts.show', $comment->post) }}">
                                {{ \Illuminate\Support\Str::limit($comment->body, 40) }}
                            </a>
                        </td>
                        <td class="hidden p-4 font-medium md:table-cell">
                            @if($comment->user->id === $comment->post->author_id)
                                <div class="flex items-center">
                                    <h3 class="text-lg font-bold">
                                        <a wire:navigate
                                            href="{{ route('users.show', $comment->user) }}">{{ $comment->user->name }}
                                        </a>
                                    </h3>
                                    <x-verified class="ml-2 size-6" />
                                <div>
                            @elseif($comment->user->role === 'author')
                                <a wire:navigate
                                    href="{{ route('users.show', $comment->user) }}">{{ $comment->user->name }}
                                </a>
                            @else
                                <h3 class="text-lg font-bold">{{ $comment->user->name }}</h3>
                            @endif                      
                        </td>
                        <td class="hidden p-4 font-medium lg:table-cell">
                            {{ $comment->created_at->diffForHumans() }}
                        </td>
                        <td class="p-4">
                            <div class="flex items-end justify-end">
                                <button 
                                    class="hover:blur-xs"
                                    wire:click="deleteComment({{ $comment->id }})"                       
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-2 size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>                                          
                                    </button>
                                                               
                                <a class="hover:blur-xs" wire:navigate href="{{ route('posts.show', $comment->post) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-2 size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                    </svg>                                   
                                </a>                    
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="justify-end px-1 mt-10">
            <span>{{ $comments->links() }}</span>
        </div>
    @else
        <div class="p-6 shadow-md rounded-xl">
            <p class="text-md">No active comments found.
        </div>
    @endif
</div>