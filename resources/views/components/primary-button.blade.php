<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 text-white bg-gray-900 rounded-2xl hover:blur-xs dark:bg-gray-100 dark:text-black hover:text-white hover:border-gray-300 dark:hover:text-black focus:text-white focus:border-gray-300 dark:focus:text-black']) }}>
    {{ $slot }}
</button>
