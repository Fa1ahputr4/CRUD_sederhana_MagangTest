@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-indigo-400 light:border-indigo-600 text-start text-base font-medium text-indigo-700 light:text-indigo-300 bg-indigo-50 light:bg-indigo-900/50 focus:outline-none focus:text-indigo-800 light:focus:text-indigo-200 focus:bg-indigo-100 light:focus:bg-indigo-900 focus:border-indigo-700 light:focus:border-indigo-300 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 light:text-gray-400 hover:text-gray-800 light:hover:text-gray-200 hover:bg-gray-50 light:hover:bg-gray-700 hover:border-gray-300 light:hover:border-gray-600 focus:outline-none focus:text-gray-800 light:focus:text-gray-200 focus:bg-gray-50 light:focus:bg-gray-700 focus:border-gray-300 light:focus:border-gray-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
