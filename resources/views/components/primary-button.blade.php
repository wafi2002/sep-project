<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-8 py-3 bg-button-register border rounded-full font-semibold text-lg text-black focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
