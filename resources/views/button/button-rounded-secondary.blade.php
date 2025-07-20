@props(['type' => 'button', 'href' => null, 'size' => 'md'])

@php
    $sizeClasses = [
        'xs' => 'rounded-full px-2 py-1 text-xs',
        'sm' => 'rounded-full px-2.5 py-1 text-sm',
        'md' => 'rounded-full px-3 py-1.5 text-sm',
        'lg' => 'rounded-full px-3.5 py-2 text-sm',
        'xl' => 'rounded-full px-4 py-2.5 text-sm'
    ];
    $sizeClass = $sizeClasses[$size] ?? $sizeClasses['md'];
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'inline-flex items-center justify-center font-semibold text-white shadow-xs hover:bg-gray-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600 transition-colors duration-200 bg-gray-600 ' . $sizeClass]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => 'inline-flex items-center justify-center font-semibold text-white shadow-xs hover:bg-gray-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600 transition-colors duration-200 bg-gray-600 ' . $sizeClass]) }}>
        {{ $slot }}
    </button>
@endif
