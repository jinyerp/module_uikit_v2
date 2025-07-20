@props([
    'title' => null,
    'message' => null,
    'type' => 'info',
    'showIcon' => true,
    'dismissible' => false
])

<div @foreach($component->alertContainerAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
    <div class="flex">
        @if($showIcon)
            <div @foreach($component->iconContainerAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
                <svg @foreach($component->iconAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
                    <path d="{{ $component->getIconPath() }}" clip-rule="evenodd" fill-rule="evenodd" />
                </svg>
            </div>
        @endif

        <div @foreach($component->contentContainerAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
            @if($title)
                <h3 @foreach($component->titleAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
                    {{ $title }}
                </h3>
            @endif

            @if($message)
                <div @foreach($component->messageAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
                    <p>{{ $message }}</p>
                </div>
            @endif

            {{ $slot }}
        </div>

        @if($dismissible)
            <div class="ml-auto pl-3">
                <button @foreach($component->dismissButtonAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
                    <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                    </svg>
                </button>
            </div>
        @endif
    </div>
</div>
