<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center text-white bg-red-700 hover:blur-xs dark:bg-gray-100 dark:text-black hover:text-white hover:border-gray-300 dark:hover:text-black focus:text-white focus:border-gray-300 dark:focus:text-black']) }}>
    {{ $slot }}
</button>
