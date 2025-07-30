@php
    $typeClasses = [
        'primary' => 'border-red-400 bg-red-50 text-red-700',
        'secondary' => 'border-gray-400 bg-gray-50 text-gray-700',
        'danger' => 'border-red-400 bg-red-50 text-red-700',
        'warning' => 'border-yellow-400 bg-yellow-50 text-yellow-700',
        'info' => 'border-blue-400 bg-blue-50 text-blue-700',
        'dark' => 'border-gray-800 bg-gray-900 text-gray-100',
        'light' => 'border-gray-200 bg-gray-100 text-gray-800',
        'success' => 'border-green-400 bg-green-50 text-green-700',
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

    $classes = $typeClasses[$type] ?? $typeClasses['danger'];
    $iconClass = $iconClasses[$type] ?? $iconClasses['danger'];
@endphp

<div class="border-l-4 {{ $classes }} p-4">
  <div class="flex">
    <div class="shrink-0">
      <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 {{ $iconClass }}">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" />
      </svg>
    </div>
    <div class="ml-3">
      <h3 class="text-sm font-medium">
        {{ $title ?: 'There were 2 errors with your submission' }}
      </h3>
      @if(count($items) > 0)
        <div class="mt-2 text-sm">
          <ul class="list-disc space-y-1 pl-5">
            @foreach($items as $item)
              <li>{{ $item }}</li>
            @endforeach
          </ul>
        </div>
      @endif
    </div>
  </div>
</div>
