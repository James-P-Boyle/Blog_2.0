@props(['textColor' => 'gray', 'bgColor' => 'gray'])

@php
    $textColorClasses = [
        'gray' => 'text-gray-800',
        'blue' => 'text-blue-800',
        'green' => 'text-green-800',
        'yellow' => 'text-yellow-800',
        'white' => 'text-white'
    ];

    $bgColorClasses = [
        'gray' => 'bg-gray-300',
        'blue' => 'bg-blue-300',
        'green' => 'bg-green-300',
        'yellow' => 'bg-yellow-300',
        'red' => 'bg-red-300'
    ];

    $textColorClass = $textColorClasses[$textColor] ?? 'text-gray-800';
    $bgColorClass = $bgColorClasses[$bgColor] ?? 'bg-gray-100';
@endphp

<button
    {{ $attributes }}
    class="{{ $textColorClass }} {{ $bgColorClass }} px-3 py-1 text-base rounded-xl"
>
    {{ $slot }}
</button>
