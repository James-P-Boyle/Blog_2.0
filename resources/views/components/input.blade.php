@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
    'placeholder:text-gray-400 text-gray-800 text-xs border-none outline-none focus:ring-0 focus:border-none focus:outline-none bg-gray-100'
]) !!}>
