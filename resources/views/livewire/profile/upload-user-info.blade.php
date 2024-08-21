<section class="max-w-xl">
    <header>
        <h2 class="text-2xl font-bold sm:text-3xl">
            {{ __('User information') }}
        </h2>

        <p class="pb-4 mt-2 text-gray-600 text-md dark:text-gray-400">
            {{ __("Update your account's user information.") }}
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
    
    <form wire:submit.prevent="uploadUserInfo">
        <div class="mb-4">
            <x-input-label for="linkedin_profile" :value="__('Linkedin profile')" />
            <x-text-input 
                type="text" 
                wire:model='linkedin_profile'
                placeholder="Your linkedin profile url"
                id="linkedin_profile"  
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
            </x-text-input>

            <x-input-error :messages="$errors->get('linkedin_profile')" class="mt-2" />
        </div>

        <div class="mb-4">
            <x-input-label for="website" :value="__('Website')" />
            <x-text-input 
                type="text" 
                wire:model='website'
                placeholder="Your website url"
                id="website"  
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
            </x-text-input>

            <x-input-error :messages="$errors->get('website')" class="mt-2" />
        </div>

        <div class="mb-4">
            <x-input-label for="bio" :value="__('Profile bio')" />
            <div wire:ignore>
                <textarea 
                    id="bio"
                    wire:model="bio"
                    placeholder="Tell us your story!">
                {{ $bio }}</textarea>
            </div>

            <x-input-error :messages="$errors->get('bio')" class="mt-2" />
        </div>

        <div class="mb-4">
            <div class="inline-flex items-center">
                <x-input-label for="nickname" :value="__('Nickname')" />
                <span class="ml-1 text-xl text-red-500">*</span>
            </div>
            @if(!auth()->user()->nickname)
                <p class="my-1 text-gray-500">{{ __('By adding a nickname, you will unlock a public user page.') }}</p>
            @endif
            <x-text-input 
                type="text" 
                wire:model.live='nickname'
                placeholder="Your nickname"
                id="nickname"  
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
            </x-text-input>

            <x-input-error :messages="$errors->get('nickname')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="avatar" :value="__('Avatar')" />

            <x-text-input 
                id="avatar" 
                type="file" 
                wire:model="avatar" 
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm"
            />
            {{-- <livewire:dropzone
                id="avatar"
                wire:model="avatar"
                :rules="['image','mimes:png,jpeg','max:2048']"
            /> --}}

            @if($avatar)
                <div class="mt-4">
                    <x-input-label :value="__('Image preview')" />
                    <img src="{{ $avatar->temporaryUrl() }}" alt="Image Preview" class="object-cover p-1 mr-2 rounded-full shadow size-32"/>
                </div>
            @endif

            <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
        </div>
    
        <x-secondary-button class="px-4 py-2 my-5" type="submit">
            {{ __('Upload info') }}
        </x-secondary-button>
    </form>
</section>

@script
    <script>
        ClassicEditor
            .create(document.querySelector('#bio'))
            .then(bio => {
                bio.model.document.on('change:data', () => {
                @this.set('bio', bio.getData());
                })
        })
            .catch(error => {
                console.error(error);
            });
    </script>
@endscript
