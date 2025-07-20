<div class="flex gap-3">
    <div class="flex h-6 shrink-0 items-center">
        <div class="group grid size-4 grid-cols-1">
            <input type="hidden" name="{{ $name }}" value="0" />
            <input id="{{ $id ?? $name }}" type="checkbox" name="{{ $name }}" value="{{ $value ?? 1 }}" {{ $checked ? 'checked' : '' }} aria-describedby="{{ ($id ?? $name) }}-desc" class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-blue-600 checked:bg-blue-600 indeterminate:border-blue-600 indeterminate:bg-blue-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto {{ $class ?? '' }}" />
            <svg viewBox="0 0 14 14" fill="none" class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25">
                <path d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-0 group-has-checked:opacity-100" />
                <path d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-0 group-has-indeterminate:opacity-100" />
            </svg>
        </div>
    </div>
    <div class="text-sm/6">
        <label for="{{ $id ?? $name }}" class="font-medium text-gray-900">{{ $label }}</label>
        <p id="{{ ($id ?? $name) }}-desc" class="text-gray-500">{{ $slot }}</p>
    </div>
</div>
