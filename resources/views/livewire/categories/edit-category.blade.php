<form wire:submit.prevent="submit">
    <!-- Name -->   
    <div class="mb-4">
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input 
            type="text" 
            placeholder="Category name"
            wire:model='name'
            id="name" 
            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
        </x-text-input>
        @error('name')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Slug -->
    <div class="mb-4">
        <x-input-label for="slug" :value="__('Slug')" />
        <x-text-input 
            type="text" 
            wire:model='slug'
            placeholder="Category slug"
            id="slug"  
            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
        </x-text-input>
        @error('slug')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Description -->
    <div class="mb-4">
        <x-input-label for="description" :value="__('Description')" />
        <textarea 
            id="description" 
            wire:model='description'
            placeholder="Category description"
            rows="4" 
            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" 
            ></textarea>
        @error('description')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Submit Button -->
    <div class="mt-6">
        <x-primary-button type="submit" class="px-4 py-2 rounded-lg">Edit category</x-primary-button>
    </div>
</form>
