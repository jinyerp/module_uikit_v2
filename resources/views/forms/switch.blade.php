@props([
    'name' => null,
    'id' => null,
    'label' => null,
    'value' => null,
    'checked' => false,
    'required' => false,
    'disabled' => false,
    'class' => null,
    'ariaLabel' => null,
    'size' => 'default'
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

    <div @foreach($component->switchContainerAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
        <span @foreach($component->switchThumbAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach></span>
        <input @foreach($component->switchInputAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach />
    </div>

    @error($name)
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
