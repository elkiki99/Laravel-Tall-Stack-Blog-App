@props(['active'])

@php
$classes = ($active ?? false)
    ? 'inline-flex items-center px-2 border-indigo-400 dark:border-indigo-600 text-sm font-semibold leading-5 text-black dark:text-white focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
    : 'inline-flex items-center px-1 border-transparent text-sm font-medium leading-5 text-black dark:text-gray-100 hover:blur-xs hover:border-gray-300 focus:outline-none transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>