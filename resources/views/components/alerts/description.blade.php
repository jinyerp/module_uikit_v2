@php
    $typeClasses = [
        'primary' => 'bg-red-50 text-red-800',
        'secondary' => 'bg-gray-50 text-gray-800',
        'danger' => 'bg-red-50 text-red-800',
        'warning' => 'bg-yellow-50 text-yellow-800',
        'info' => 'bg-blue-50 text-blue-800',
        'dark' => 'bg-gray-900 text-gray-100',
        'light' => 'bg-gray-100 text-gray-800',
        'success' => 'bg-green-50 text-green-800',
    ];

    $iconClasses = [
        'primary' => 'text-red-400',
        'secondary' => 'text-gray-400',
        'danger' => 'text-red-400',
        'warning' => 'text-yellow-400',
        'info' => 'text-blue-400',
        'dark' => 'text-gray-400',
        'light' => 'text-gray-500',
        'success' => 'text-green-400',
    ];

    $classes = $typeClasses[$type] ?? $typeClasses['warning'];
    $iconClass = $iconClasses[$type] ?? $iconClasses['warning'];
@endphp

<div class="rounded-md {{ $classes }} p-4">
    <div class="flex">
        <div class="shrink-0">
            <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 {{ $iconClass }}">
                <path
                    d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495ZM10 5a.75.75 0 0 1 .75.75v3.5a.75.75 0 0 1-1.5 0v-3.5A.75.75 0 0 1 10 5Zm0 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"
                    clip-rule="evenodd" fill-rule="evenodd" />
            </svg>
        </div>
        <div class="ml-3">
            <h3 class="text-sm font-medium">{{ $title }}</h3>
            <div class="mt-2 text-sm">
                <p>{{$slot}}</p>
            </div>
        </div>
    </div>
</div>
