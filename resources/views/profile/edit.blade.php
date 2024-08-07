<x-admin-layout>
    <div class="max-w-6xl min-h-screen px-4 py-10 pb-32 mx-auto sm:px-10">
        @include('profile.partials.update-profile-information-form')
        
        @include('profile.partials.update-password-form')

        @include('profile.partials.delete-user-form')
    </div>
</x-admin-layout>

