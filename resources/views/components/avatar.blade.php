@props([
    'src' => '',
    'alt' => '',
    'size' => 'size-6',
    'class' => ''
])

@php
    $defaultClass = 'inline-block rounded-full ' . $size . ' ' . $class;
@endphp

@if($src)
    <img src="{{ $src }}" alt="{{ $alt }}" {{ $attributes->merge(['class' => $defaultClass]) }} />
@else
    {{-- 기본 아바타 (이미지가 없을 때) --}}
    <div {{ $attributes->merge(['class' => $defaultClass . ' bg-gray-300 flex items-center justify-center']) }}>
        <svg class="w-1/2 h-1/2 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
        </svg>
    </div>
@endif
