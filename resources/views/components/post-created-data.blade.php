@props(['class' => ''])

<div class="my-1 mt-auto">
    <p class="{{ $class }} dark:text-gray-300">by <span class="font-bold text-black">{{ $post->author->name }} </span>| {{ $post->created_at->diffForHumans()}}</p>
</div>