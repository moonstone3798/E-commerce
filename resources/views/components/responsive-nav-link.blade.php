@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-indigo-400 text-start text-sm sm:text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'block w-full flex justify-center ps-3 pe-4 py-2 border-l-4 no-underline border-transparent text-start text-sm sm:text-base font-medium text-white hover:text-gray-100 hover:bg-[#9D5B68E6]  hover:text-base sm:hover:text-lg hover:border-[#854d58] focus:outline-none focus:text-gray-900 focus:bg-gray-400 focus:border-gray-500 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
