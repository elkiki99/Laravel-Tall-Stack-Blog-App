
<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center bg-white text-black hover:blur-xs hover:text-black hover:border-gray-300 focus:text-black focus:border-gray-200 border-2 border-gray-100']) }}>
    {{ $slot }}
</button>