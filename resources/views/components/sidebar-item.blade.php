@props([
    'item',
    'depth' => 0,
    'colors' => []
])

@php
    $fontSize = 'text-sm';
    $fontWeight = $depth === 0 ? 'font-semibold' : ($depth === 1 ? 'font-medium' : 'font-normal');
    $paddingLeft = 8 + $depth * 16;
    $active = $item['active'] ?? false;
@endphp

<a href="{{ $item['url'] ?? 'javascript:void(0)' }}"
   class="group flex w-full items-center gap-x-3 rounded-md p-2 {{$fontSize}} {{$fontWeight}} {{ $active ? $colors['active_bg'] . ' ' . $colors['active_text'] . ' active' : $colors['text'] . ' ' . $colors['hover_bg'] . ' ' . $colors['hover_text'] }}"
>
    @if(isset($item['icon']))
        <x-jiny-uikit::icon name="{{ $item['icon'] }}" size="w-5 h-5" class="shrink-0" />
    @endif
    <span class="flex-1 text-left" style="padding-left:{{$paddingLeft}}px">{{ $item['label'] }}</span>
</a>

{{-- 하위 메뉴가 있으면 재귀적으로 출력 --}}
@if(isset($item['children']) && is_array($item['children']) && count($item['children']) > 0)
    <ul class="ml-0">
        @foreach($item['children'] as $child)
            @if(isset($child['type']) && $child['type'] === 'menu')
                <li>
                    <x-jiny-uikit::sidebar-item :item="$child" :depth="$depth+1" :colors="$colors" />
                </li>
            @endif
        @endforeach
    </ul>
@endif
