@props([
    'name' => null,
    'id' => null,
    'label' => null,
    'value' => null,
    'rows' => 4,
    'cols' => null,
    'placeholder' => null,
    'required' => false,
    'disabled' => false,
    'readonly' => false,
    'class' => null,
    'maxlength' => null,
    'minlength' => null,
    'wrap' => 'soft'
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

    <div @foreach($component->containerAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
        <textarea @foreach($component->textareaAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>{{ $value }}</textarea>
    </div>

    @error($name)
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
