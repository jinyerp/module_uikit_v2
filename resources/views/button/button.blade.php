@if($isLink())
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $getClasses()]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $getClasses()]) }}>
        {{ $slot }}
    </button>
@endif
