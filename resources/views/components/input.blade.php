@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-gray-200 focus:ring-gray-200  rounded-md shadow-sm']) !!}>
