@props(['type' => null, 'href' => 'javascript:void(0)'])

@if($type === 'button')
    <button {{ $attributes->merge(['class' => 'inline-flex items-center rounded-md bg-gray-100 px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs hover:bg-gray-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-300 transition-colors duration-200']) }}>
        {{ $slot }}
    </button>
@else
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'inline-flex items-center rounded-md bg-gray-100 px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs hover:bg-gray-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-300 transition-colors duration-200']) }}>
        {{ $slot }}
    </a>
@endif
