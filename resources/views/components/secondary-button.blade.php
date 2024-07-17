<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center bg-white dark:bg-gray-900 text-black dark:text-white hover:blur-xs hover:text-black hover:border-gray-300 dark:hover:text-white focus:text-black focus:border-gray-200 dark:focus:text-white border-2 border-gray-100']) }}>
    {{ $slot }}
</button>