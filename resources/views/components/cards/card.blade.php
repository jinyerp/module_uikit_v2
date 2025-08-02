@props([
    'rounded' => true,
    'shadow' => false,
    'background' => 'white'
])

@php
    $classes = 'overflow-hidden';

    // Set background color
    if ($background === 'white') {
        $classes .= ' bg-white';
    } else {
        $classes .= ' bg-' . $background;
    }

    if ($rounded) {
        $classes .= ' rounded-lg';
    }

    if ($shadow) {
        $classes .= ' shadow-lg';
    } else {
        $classes .= ' shadow-sm';
    }
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <div class="px-4 py-5 sm:p-6">
        {{ $slot }}
    </div>
</div>
