@props(['author', 'size'])

@php
    $imageSize = match ($size ?? null) {
        'xs' => 'w-6 h-6',
        'sm' => 'w-8 h-8',
        'md' => 'w-10 h-10',
        'lg' => 'w-12 h-12',
        default => 'w-10 h-10'
    };
    $textSize = match ($size ?? null) {
        'xs' => 'text-xs',
        'sm' => 'text-sm',
        'md' => 'text-base',
        'lg' => 'text-lg',
        default => 'text-base'
    };
@endphp

<img
    class="mr-3 rounded-full {{ $imageSize }}"
    src="{{ $author->profile_photo_url }}"
    :alt="$author->name"
>
<span class="mr-1 {{ $textSize }}">{{ $author->name }}</span>
