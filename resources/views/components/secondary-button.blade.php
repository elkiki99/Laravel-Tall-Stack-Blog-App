<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white dark:bg-gray-900 text-black dark:text-white rounded-2xl hover:blur-xs hover:text-black hover:border-gray-600 dark:hover:text-white focus:text-black focus:border-gray-500 dark:focus:text-white border-2 border-gray-700']) }}>
    {{ $slot }}
</button>