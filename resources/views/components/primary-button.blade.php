<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 light:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white light:text-gray-800 uppercase tracking-widest hover:bg-gray-700 light:hover:bg-white focus:bg-gray-700 light:focus:bg-white active:bg-gray-900 light:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 light:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
