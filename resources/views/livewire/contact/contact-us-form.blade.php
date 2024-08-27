<form wire:submit.prevent="submit" class="mt-6 space-y-6">
    <div>
        <x-input-label for="email" :value="__('E-mail')" />
        <x-text-input 
            wire:model="email" 
            type="email" 
            class="block w-full mt-1" 
            autocomplete="email" 
            placeholder="{{ __('Your e-mail') }}" 
        />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>
    
    <div>
        <x-input-label for="message" :value="__('Message')" />
        <textarea
            wire:model="message"
            type="text"
            placeholder="{{ __('Your message') }}" 
            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" 
        ></textarea>
        <x-input-error :messages="$errors->get('message')" class="mt-2" />
    </div>
    
    <div class="flex items-center gap-4">
        <x-primary-button type="submit" class="px-4 py-2 text-sm">{{ __('Send') }}</x-primary-button>
    </div>
</form>
