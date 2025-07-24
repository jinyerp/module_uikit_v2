@props([
    'name' => null,
    'id' => null,
    'type' => 'text',
    'value' => null,
    'placeholder' => null,
    'label' => null,
    'required' => false,
    'disabled' => false,
    'readonly' => false,
    'autocomplete' => null,
    'class' => null
])

<div {{ $attributes->merge(['class' => '']) }}>
    @if($label)
        <label for="{{ $id ?? $name }}" class="block text-sm/6 font-medium text-gray-900">
            {{ $label }}
            @if($required)
                <span class="text-red-500">*</span>
            @endif
        </label>
    @endif

    <div class="mt-2">
        <input
            type="{{ $type }}"
            name="{{ $name }}"
            id="{{ $id ?? $name }}"
            value="{{ old($name, $value ?? '') }}"
            @if($placeholder) placeholder="{{ $placeholder }}" @endif
            @if($required) required @endif
            @if($disabled) disabled @endif
            @if($readonly) readonly @endif
            @if($autocomplete) autocomplete="{{ $autocomplete }}" @endif
            {{ $attributes->merge(['class' => 'block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6']) }}
        />
    </div>

    @error($name)
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
