<x-admin-layout>
    <div class="max-w-6xl min-h-screen px-4 py-10 pb-32 mx-auto sm:px-10">
        @include('profile.partials.update-profile-information-form')
        
        @include('profile.partials.update-password-form')

        @include('profile.partials.delete-user-form')

        <div class="mt-12">
            <h2 class="text-2xl font-bold sm:text-3xl">
                {{ __('Log out') }}
            </h2>

            <p class="pb-4 mt-2 text-gray-600 text-md dark:text-gray-400">
                {{ __("Log out from your account.") }}
            </p>
            
            <form class="" method="POST" action="{{ route('logout') }}">
                @csrf
                <x-secondary-button class="px-4 py-2" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-secondary-button>
            </form>
        </div>
    </div>
</x-admin-layout>
