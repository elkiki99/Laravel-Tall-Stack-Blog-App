@props(['class' => ''])

<div class="my-1 mt-auto">
    <p class="{{ $class }}">by <span class="font-bold text-black">
        <a wire:navigate href="{{ route('users.show', $author) }}">{{ $post->author->name }}</a>
    </span>| {{ $post->created_at->diffForHumans()}}</p>
</div>