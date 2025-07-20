@props([
    'title' => null,
    'description' => null,
    'buttonText' => null,
    'buttonAction' => null,
    'variant' => 'default'
])

<div @foreach($component->panelContainerAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
    <div @foreach($component->panelInnerAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
        @if($title)
            <h3 @foreach($component->titleAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
                {{ $title }}
            </h3>
        @endif

        @if($description)
            <div @foreach($component->descriptionAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
                <p>{{ $description }}</p>
            </div>
        @endif

        @if($buttonText)
            <div class="mt-5">
                <button @foreach($component->buttonAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
                    {{ $buttonText }}
                </button>
            </div>
        @endif

        {{ $slot }}
    </div>
</div>
