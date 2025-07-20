@props([
    'name' => null,
    'value' => null,
    'label' => null,
    'id' => null,
    'groupName' => null,
    'checked' => false,
    'required' => false,
    'disabled' => false,
    'class' => null,
    'inline' => false,
    'list' => false,
    'description' => null
])

@if($list)
    <div @foreach($component->containerAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
        <div @foreach($component->contentContainerAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
            <label @foreach($component->labelAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
                {{ $label }}
            </label>
            @if($description)
                <p @foreach($component->descriptionAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
                    {{ $description }}
                </p>
            @endif
            {{ $slot }}
        </div>
        <div @foreach($component->radioContainerAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
            <input @foreach($component->radioAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach />
        </div>
    </div>
@elseif($inline)
    <div @foreach($component->containerAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
        <input @foreach($component->radioAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach />
        <label @foreach($component->labelAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
            {{ $label }}
        </label>
    </div>
@else
    <div @foreach($component->containerAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
        <div @foreach($component->radioContainerAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
            <input @foreach($component->radioAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach />
        </div>
        <div @foreach($component->contentContainerAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
            <label @foreach($component->labelAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
                {{ $label }}
            </label>
            @if($description)
                <p @foreach($component->descriptionAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
                    {{ $description }}
                </p>
            @endif
            {{ $slot }}
        </div>
    </div>
@endif
