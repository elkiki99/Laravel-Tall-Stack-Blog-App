@props(['class' => ''])

<div>
    <div class="flex {{ $class }} space-x-2">
        @foreach ($post->tags as $tag)
            <a class="hover:blur-xs" href="{{ route('tags.show', $tag) }}">
                <span class="px-2 py-1 text-sm text-gray-800 bg-gray-200 rounded-full hover:cursor-pointer">{{$tag->name}}</span>
            </a>
        @endforeach
    </div>
</div>
