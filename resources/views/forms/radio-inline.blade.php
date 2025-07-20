@props([
    'name' => null,
    'id' => null,
    'legend' => null,
    'description' => null,
    'items' => [],
    'selected' => null,
    'required' => false,
    'disabled' => false,
    'class' => null
])

<fieldset @foreach($component->fieldsetAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
    @if($legend)
        <legend @foreach($component->legendAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
            {{ $legend }}
            @if($required)
                <span class="text-red-500">*</span>
            @endif
        </legend>
    @endif

    @if($description)
        <p @foreach($component->descriptionAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
            {{ $description }}
        </p>
    @endif

    <div @foreach($component->containerAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
        @if(!empty($items))
            {!! $component->renderItems() !!}
        @else
            {{ $slot }}
        @endif
    </div>

    @error($name)
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</fieldset>
