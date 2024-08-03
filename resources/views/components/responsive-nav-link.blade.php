@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-black text-start text-base hover:blur-xs block w-full ps-3 pe-4 py-2'
            : 'block w-full ps-3 pe-4 py-2 border-transparent text-start text-base font-medium text-gray-900 dark:text-gray-400 hover:blur-xs hover:border-gray-300 dark:hover:border-gray-600 focus:text-black hover:text-gray-800 dark:hover:text-gray-200 focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-transparent dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>