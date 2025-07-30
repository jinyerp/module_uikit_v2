<button
    type="button"
    {{ $attributes->merge([
        'class' => 'rounded-md bg-yellow-600 px-2.5 py-1.5 text-sm font-semibold text-white shadow-xs hover:bg-yellow-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600'
    ]) }}
    onclick="window.jiny?.popup?.edit && window.jiny.popup.edit(this)"
>
    {{ $slot }}
</button>
