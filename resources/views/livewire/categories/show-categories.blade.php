<div class="mt-5 overflow-x-auto">
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
                    <th class="p-4 font-normal text-left">
                        <div class="inline-flex items-center">
                            Slug
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-4 h-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-4 font-normal text-left">
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
                        class="odd:bg-white even:bg-gray-100"
                    />
                        <td class="p-4 font-bold rounded-lg">
                            <a wire:navigate href="{{ route('categories.show', $category) }}">
                                {{ $category->name }}
                            </a>
                        </td>
                        <td class="p-4 font-medium">
                            {{ $category->slug }}
                        </td>
                        <td class="p-4 font-medium">
                            {{ \Illuminate\Support\Str::limit($category->description, 80) }}
                        </td>
                        <td class="p-4 rounded-lg">
                            <div class="flex items-end justify-end">
                                <a wire:navigate href="{{ route('categories.edit', $category) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-2 size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                    </svg>      
                                </a>                                   
                                <a wire:navigate href="{{ route('categories.show', $category) }}">
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
    @else
        <div class="p-6 bg-gray-100 shadow-md rounded-xl">
            <p class="text-lg">No categories created yet. 
                <a wire:navigate href="{{ route('categories.create') }}" class="font-medium text-yellow-500 hover:cursor-pointer">Create a new category!</a>
            </p>
        </div>
    @endif
</div>