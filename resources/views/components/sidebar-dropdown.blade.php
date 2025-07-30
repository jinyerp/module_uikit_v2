@props([
    'item',
    'depth' => 0,
    'colors' => []
])

@php
    // 더 안정적인 ID와 로컬스토리지 키 생성
    $menuLabel = $item['label'] ?? '';
    $menuUrl = $item['url'] ?? '';
    $uniqueId = uniqid('dropdown-', true);
    $id = $uniqueId . '-' . md5($menuLabel . $depth . $menuUrl . time());

    // 로컬스토리지 키는 메뉴 라벨과 깊이로만 생성 (안정성)
    $storageKey = 'dropdown-' . md5($menuLabel . $depth . $menuUrl);

    $active = $item['active'] ?? false;
    $fontSize = ($depth < 2) ? 'text-sm' : 'text-sm';
    $fontWeight = $depth === 0 ? 'font-semibold' : ($depth === 1 ? 'font-medium' : 'font-normal');
    $paddingLeft = 4 + $depth * 16;
    $chevronSize = match($depth) {
        0 => 'w-5 h-5',
        1 => 'w-4 h-4',
        default => 'w-3 h-3',
    };
@endphp

@if(isset($item['children']) && is_array($item['children']) && count($item['children']) > 0)
    <div class="relative dropdown-container w-full">
        <input type="checkbox" id="{{ $id }}" data-key="{{ $storageKey }}" class="dropdown-checkbox hidden">
        <label for="{{ $id }}"
            class="dropdown-toggle group flex w-full items-center gap-x-3 rounded-md p-2 {{$fontSize}} {{$fontWeight}} {{ $active ? $colors['active_bg'] . ' ' . $colors['active_text'] : $colors['text'] . ' ' . $colors['hover_bg'] . ' ' . $colors['hover_text'] }} cursor-pointer {{ $active ? 'active' : '' }}">
            @if(isset($item['icon']))
                <x-jiny-uikit::icon name="{{ $item['icon'] }}" size="w-6 h-6" class="shrink-0" />
            @endif
            <span class="flex-1 text-left" style="padding-left:{{$paddingLeft}}px">{{ $item['label'] }}</span>
            <span class="ml-auto transition-transform duration-300 {{ $colors['text_muted'] }} dropdown-chevron">
                <svg xmlns="http://www.w3.org/2000/svg" class="{{ $chevronSize }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </span>
        </label>
        <ul class="dropdown-menu ml-0 mt-1 space-y-1 overflow-hidden transition-all duration-400" style="max-height: 0;">
            @foreach($item['children'] as $child)
                <li>
                    <x-jiny-uikit::sidebar-dropdown :item="$child" :depth="$depth+1" :colors="$colors" />
                </li>
            @endforeach
        </ul>
    </div>
@else
    <x-jiny-uikit::sidebar-item :item="$item" :depth="$depth" :colors="$colors" />
@endif

{{-- CSS와 JS는 base.blade.php에서 한 번만 추가 --}}
