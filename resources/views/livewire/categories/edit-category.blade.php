<div>
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

        <div class="flex items-center justify-center">
            <!-- Submit Button -->
            <div class="mt-6 mr-auto">
                <x-primary-button type="submit" class="px-4 py-2">Update category</x-primary-button>
            </div>
            
            <!-- Delete Button -->
            <div class="mt-6">
                <x-danger-button 
                    class="px-4 py-2 ml-auto"
                    x-on:click.prevent="$dispatch('open-modal', 'confirm-category-deletion')">
                    
                    {{ __('Delete category') }}
                </x-danger-button>
            </div>
        </div>
    </form>
    
    <x-modal name="confirm-category-deletion">
        <div class="p-6">
            <h3 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to delete this category?') }}
            </h3>
            
            <p class="mt-1 text-sm text-gray-600">
                {{ __('All of your blog posts which are associated with this category will be reasigned to uncategorized.') }}
            </p>
            
            <div class="flex justify-end mt-6">
                <x-secondary-button class="px-4 py-2" x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>
                
                <livewire:categories.delete-category :categoryId="$category->id" />       
            </div>
        </div>
    </x-modal>
</div>


