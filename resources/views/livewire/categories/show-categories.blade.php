<div class="min-h-screen mt-5 overflow-x-auto">
    <div class="w-full mb-5 md:w-1/2">
        <form class="flex items-center p-1">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input wire:model.live="searchCategory" type="text" id="simple-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500" placeholder="Search categories..." required="">
            </div>
        </form>
    </div>
    
    @if($categories->count() > 0)
        <table class="min-w-full bg-white">
            <thead class="bg-gray-100">
                <tr class="">
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
                            Slug
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-4 h-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                            </svg>
                        </div>
                    </th>
                    <th class="hidden p-4 font-normal text-left lg:table-cell">
                        <div class="inline-flex items-center">
                            Description
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
                @foreach($categories as $category)
                    <tr 
                        wire:loading.remove 
                        wire:target='deleteCategory({{ $category->id }})'
                        class="bg-white border-b-2"
                    />
                        <td class="p-4 font-bold">
                            <a wire:navigate href="{{ route('categories.show', $category) }}">
                                {{ $category->name }}
                            </a>
                        </td>
                        <td class="hidden p-4 font-medium md:table-cell">
                            {{ $category->slug }}
                        </td>
                        <td class="hidden p-4 font-medium lg:table-cell">
                            {{ \Illuminate\Support\Str::limit($category->description, 40) }}
                        </td>
                        <td class="p-4">
                            <div class="flex items-end justify-end">
                                <a class="hover:blur-xs" wire:navigate href="{{ route('categories.edit', $category) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-2 size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                    </svg>      
                                </a>                                   
                                <a class="hover:blur-xs" wire:navigate href="{{ route('categories.show', $category) }}">
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
            <span>{{ $categories->links() }}</span>
        </div>
    @else
        <div class="p-6 shadow-md rounded-xl">
            <p class="text-md">No categories found.
        </div>
    @endif
</div>