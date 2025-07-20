@props(['type' => 'button', 'href' => null, 'size' => 'md'])

@php
    $sizeClasses = [
        'xs' => 'rounded-sm px-2 py-1 text-xs',
        'sm' => 'rounded-sm px-2 py-1 text-sm',
        'md' => 'rounded-md px-2.5 py-1.5 text-sm',
        'lg' => 'rounded-md px-3 py-2 text-sm',
        'xl' => 'rounded-md px-3.5 py-2.5 text-sm'
    ];
    $sizeClass = $sizeClasses[$size] ?? $sizeClasses['md'];
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'inline-flex items-center justify-center font-semibold text-gray-900 shadow-xs ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600 transition-colors duration-200 bg-white ' . $sizeClass]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => 'inline-flex items-center justify-center font-semibold text-gray-900 shadow-xs ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600 transition-colors duration-200 bg-white ' . $sizeClass]) }}>
        {{ $slot }}
    </button>
@endif
