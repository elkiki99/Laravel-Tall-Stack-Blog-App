<form wire:submit.prevent='submit'>
    <div class="mt-4">
        <x-input-label for="title" :value="__('Post title')" />
        <x-text-input 
            id="title" 
            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm"
            type="text"
            wire:model="title"
            placeholder="Your blog post title"
        />
        <x-input-error :messages="$errors->get('title')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="subtitle" :value="__('Subtitle')" />
        <x-text-input 
            id="subtitle" 
            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm"
            type="text"
            wire:model="subtitle"
            placeholder="Your blog post subtitle"
        />
        <x-input-error :messages="$errors->get('subtitle')" class="mt-2" />
    </div>
    
    <div class="mt-4">
        <x-input-label for="body" :value="__('Body')" />
        <livewire:quill :value="$body" />
    </div>
    
    <div class="mt-4">
        <x-input-label for="slug" :value="__('Slug')" />
        <x-text-input 
            id="slug" 
            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm"
            type="text"
            wire:model="slug"
            placeholder="Friendly url slug"
        />
        <x-input-error :messages="$errors->get('slug')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="excerpt" :value="__('Excerpt')" />
        <textarea 
            id="excerpt" 
            wire:model="excerpt" 
            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" 
            rows="3" 
            placeholder="Short summary of the post"
        ></textarea>
        <x-input-error :messages="$errors->get('excerpt')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="meta_description" :value="__('Meta description')" />
        <textarea 
            id="meta_description" 
            wire:model="meta_description" 
            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" 
            rows="3" 
            placeholder="SEO meta description"
        ></textarea>
        <x-input-error :messages="$errors->get('meta_description')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="featured_image" :value="__('Featured Image')" />
        <x-text-input 
            id="featured_image" 
            type="file" 
            wire:model="featured_image" 
            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm"
        />
        @if ($featured_image)
            <div class="mt-4">
                <x-input-label :value="__('Image Preview')" />
                <img src="{{ $featured_image->temporaryUrl() }}" alt="Image Preview" class="w-1/2 mt-2 rounded-md shadow-md"/>
            </div>
        @endif

        <x-input-error :messages="$errors->get('featured_image')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="category_id" :value="__('Category')" />
        <select 
            id="category_id" 
            wire:model="category_id" 
            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm"
        >
            <option hidden>Select a category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
    </div>
    
    <div class="mt-4">
        <x-input-label for="tag_id" :value="__('Tags')" />
        <select 
            id="tag_id" 
            multiple
            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm"
            wire:model='tag_id' 
        >
        <option hidden>Select tags</option>
        @foreach($tags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
        @endforeach
        </select>
        <x-input-error :messages="$errors->get('tag_id')" class="mt-2" />
    </div>

    <x-primary-button type="submit" class="px-4 py-2 my-5">
        Create post
    </x-primary-button>
</form>