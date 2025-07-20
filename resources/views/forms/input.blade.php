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
        <label @foreach($component->labelAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
            {{ $label }}
            @if($required)
                <span class="text-red-500">*</span>
            @endif
        </label>
    @endif

    <div class="mt-2">
        <input
            @foreach($component->inputAttributes() as $key => $value)
                {{ $key }}="{{ $value }}"
            @endforeach
        />
    </div>

    @error($name)
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
