@props([
    'name' => null,
    'size' => 'w-5 h-5',
    'class' => ''
])

@php
    $defaultClass = 'inline-block ' . $size . ' ' . $class;

    // 아이콘 검색 우선순위
    $iconPath = null;

    // 1. resource_path('/icons')에서 먼저 검색
    $resourceIconPath = resource_path('icons/' . $name . '.svg');
    if (file_exists($resourceIconPath)) {
        $iconPath = $resourceIconPath;
    }
    // 2. 없으면 module_dir('jiny-uikit')."/resources/icons"에서 검색
    else {
        $moduleIconPath = module_dir('jiny-uikit') . '/resources/icons/' . $name . '.svg';
        if (file_exists($moduleIconPath)) {
            $iconPath = $moduleIconPath;
        }
    }
@endphp

@if($name && $iconPath)
    <svg {{ $attributes->merge(['class' => $defaultClass]) }} fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
        {!! file_get_contents($iconPath) !!}
    </svg>
@else
    {{-- 기본 아이콘 (아이콘을 찾을 수 없을 때) --}}
    <svg {{ $attributes->merge(['class' => $defaultClass]) }} fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
    </svg>
@endif
