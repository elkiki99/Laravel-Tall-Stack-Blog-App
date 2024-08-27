
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center text-white bg-gray-900 hover:blur-xs hover:text-white hover:border-gray-300 focus:text-white focus:border-gray-300']) }}>
    {{ $slot }}
</button>
