<section class="max-w-xl">
    <header>
        <h2 class="text-2xl font-bold sm:text-3xl">
            {{ __('Avatar') }}
        </h2>

        <p class="pb-4 mt-2 text-gray-600 text-md dark:text-gray-400">
            {{ __("Update your account's avatar.") }}
        </p>
                
        @if(session('success_created'))
            <p
                x-data="{ show: true }"
                x-show="show"
                class="text-green-500"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400"
            >{{ session('success_created') }}</p>
        @endif
    </header>
    
    <form wire:submit.prevent="uploadAvatar">
        <div class="mt-4">
            <x-input-label for="avatar" :value="__('Avatar')" />
            <x-text-input 
                id="avatar" 
                type="file" 
                wire:model="avatar" 
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm"
            />
            @if($avatar)
                <div class="mt-4">
                    <x-input-label :value="__('Image preview')" />
                    <img src="{{ $avatar->temporaryUrl() }}" alt="Image Preview" class="mt-2 rounded-md shadow-md md:w-1/2"/>
                </div>
            @endif
    
            <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
        </div>
    
        <x-secondary-button class="px-4 py-2 my-5" type="submit">
            {{ __('Upload avatar') }}
        </x-secondary-button>
    </form>
</section>