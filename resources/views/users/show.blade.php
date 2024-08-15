
<x-app-layout>
    <div class="max-w-5xl min-h-screen px-4 py-10 pt-16 mx-auto sm:px-10 sm:pt-32">
        @if($user->role === 'author')
            <livewire:users.show-author :userId="$user->id" />
        @elseif($user->role === 'user')
            <livewire:users.show-user :userId="$user->id" />
        @endif
    </div>
</x-app-layout>

