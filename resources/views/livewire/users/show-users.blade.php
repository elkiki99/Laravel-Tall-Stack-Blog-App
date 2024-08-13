
<div class="min-h-screen mt-5 overflow-x-auto">
    <div class="flex flex-col w-full pb-5 md:flex-row">
        <!-- Search Bar -->
        <div class="w-full mb-4 md:w-1/2 md:mb-0">        
            <form class="flex items-center p-1">
                <x-input-label class="sr-only">Search</x-input-label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <x-text-input wire:model.live="searchUsers" type="text" id="simple-search" class="block w-full p-2 pl-10 text-sm" placeholder="Search users..." required="" />
                </div>
            </form>
        </div>
        <!-- Role Filter -->
        <div class="w-full px-2 md:w-1/2">
            
            <select wire:model.live="searchRole"
            class="block w-full mt-1 text-sm border-gray-300 rounded-md shadow-sm focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600">
                <option hidden>Filter by role</option>
                <option value="all">All</option>
                <option value="user">User</option>
                <option value="author">Author</option>
            </select>
        </div>
    </div>
    
    @if($users->count() > 0)
        <table class="min-w-full bg-white">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-4 font-normal text-left">
                        <div class="inline-flex items-center">
                            Name
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-4 h-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                            </svg>
                        </div>
                    </th>
                    <th class="hidden p-4 font-normal text-left md:table-cell">
                        <div class="inline-flex items-center">
                            Email
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-4 h-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                            </svg>
                        </div>
                    </th>
                    <th class="hidden p-4 font-normal text-left lg:table-cell">
                        <div class="inline-flex items-center">
                            Bio
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-4 h-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                            </svg>
                        </div>
                    </th>
                    <th class="hidden p-4 font-normal text-left sm:table-cell">
                        <div class="inline-flex items-center">
                            Role
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-4 h-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-4 font-normal text-right">
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
                @foreach($users as $user)
                    <tr 
                        wire:target='grantRole({{ $user->id }})'
                        class="bg-white border-b-2"
                    />
                        <td class="p-4 font-bold">
                            @if($user->role === 'author')
                            <a wire:navigate href="{{ route('users.show', $user) }}">
                                {{ $user->name }}
                            </a>
                            @else
                                {{ $user->name }}
                            @endif
                        </td>
                        <td class="hidden p-4 font-medium md:table-cell">
                            {{ $user->email }}
                        </td>
                        <td class="hidden p-4 font-medium lg:table-cell">
                            @if($user->bio)
                                {{ \Illuminate\Support\Str::limit(strip_tags($user->bio), 40) }}
                            @else
                                <p class="text-gray-300">No bio at the time</p>
                            @endif                        
                        </td>
                        <td class="hidden p-4 font-medium sm:flex">
                            {{ ucfirst($user->role) }}
                            @if($user->role === 'author')
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"         fill="currentColor"
                                class="ml-2 text-blue-500 size-6">
                                    <path fill-rule="evenodd"
                                        d="M8.603 3.799A4.49 4.49 0 0 1 12 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 0 1 3.498 1.307 4.491 4.491 0 0 1 1.307 3.497A4.49 4.49 0 0 1 21.75 12a4.49 4.49 0 0 1-1.549 3.397 4.491 4.491 0 0 1-1.307 3.497 4.491 4.491 0 0 1-3.497 1.307A4.49 4.49 0 0 1 12 21.75a4.49 4.49 0 0 1-3.397-1.549 4.49 4.49 0 0 1-3.498-1.306 4.491 4.491 0 0 1-1.307-3.498A4.49 4.49 0 0 1 2.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 0 1 1.307-3.497 4.49 4.49 0 0 1 3.497-1.307Zm7.007 6.387a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                                        clip-rule="evenodd" 
                                    />
                                </svg> --}}
                            @endif
                        </td>
                        <td class="p-4">
                            <div class="flex items-end justify-end h-full">
                                @if($user->role === 'author')
                                    <svg 
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"         fill="currentColor"
                                        class="mx-2 text-blue-500 size-6">
                                        <path fill-rule="evenodd"
                                            d="M8.603 3.799A4.49 4.49 0 0 1 12 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 0 1 3.498 1.307 4.491 4.491 0 0 1 1.307 3.497A4.49 4.49 0 0 1 21.75 12a4.49 4.49 0 0 1-1.549 3.397 4.491 4.491 0 0 1-1.307 3.497 4.491 4.491 0 0 1-3.497 1.307A4.49 4.49 0 0 1 12 21.75a4.49 4.49 0 0 1-3.397-1.549 4.49 4.49 0 0 1-3.498-1.306 4.491 4.491 0 0 1-1.307-3.498A4.49 4.49 0 0 1 2.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 0 1 1.307-3.497 4.49 4.49 0 0 1 3.497-1.307Zm7.007 6.387a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                                            clip-rule="evenodd" 
                                        />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-2 text-gray-300 size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                    </svg>
                                @endif
                                @if($user->role === 'author')                              
                                    <a class="hover:blur-xs" wire:navigate href="{{ route('users.show', $user) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-2 size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                        </svg>                                   
                                    </a>                
                                @else
                                    <a class="text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-2 size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                        </svg>                                   
                                    </a>     
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="justify-end px-1 mt-10">
            <span>{{ $users->links() }}</span>
        </div>
    @else
        <div class="p-6 shadow-md rounded-xl">
            <p class="text-md">No users found.
        </div>
    @endif  
</div>