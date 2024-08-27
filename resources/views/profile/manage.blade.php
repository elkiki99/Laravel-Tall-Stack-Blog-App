<x-admin-layout>
    <div class="max-w-6xl min-h-screen px-4 py-10 pb-32 mx-auto sm:px-10">
        
        <livewire:profile.upload-user-info :user="$user" />

        <section class="max-w-xl">
            <header>
                <h2 class="mt-12 text-2xl font-bold sm:text-3xl">
                    {{ __('Log out') }}
                </h2>

                <p class="pb-4 mt-2 text-gray-600 text-md">
                    {{ __("Log out from your account.") }}
                </p>
            </header>
                
            <form class="" method="POST" action="{{ route('logout') }}">
                @csrf
                <x-primary-button class="px-4 py-2" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-primary-button>
            </form>
        </section>
    </div>
</x-admin-layout>