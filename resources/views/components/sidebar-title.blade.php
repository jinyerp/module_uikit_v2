@props([
    'item',
    'colors' => []
])

<div class="text-xs/6 font-semibold {{ $colors['text_muted'] }} mt-4 mb-2">
    {{ $item['label'] }}
</div>
