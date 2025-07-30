<button
    type="button"
    {{ $attributes->merge([
        'class' => 'rounded-md bg-blue-600 px-2.5 py-1.5 text-sm font-semibold text-white shadow-xs hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600'
    ]) }}
    onclick="window.jiny?.popup?.create && window.jiny.popup.create(this)"
>
    {{ $slot }}
</button>
