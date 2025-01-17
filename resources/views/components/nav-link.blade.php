@props(['active', 'navigate'])

@php
$classes = $active ?? false
    ? 'inline-flex items-center text-sm text-yellow-500 font-bold hover:text-yellow-900'
    : 'inline-flex items-center text-sm text-gray-500 font-bold hover:text-yellow-900';
@endphp

<a {{ ($navigate ?? true) ? 'wire:navigate' : '' }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
