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

    $classes = $typeClasses[$type] ?? $typeClasses['warning'];
    $iconClass = $iconClasses[$type] ?? $iconClasses['warning'];
@endphp

<div class="border-l-4 {{ $classes }} p-4">
  <div class="flex">
    <div class="shrink-0">
      <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 {{ $iconClass }}">
        <path d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495ZM10 5a.75.75 0 0 1 .75.75v3.5a.75.75 0 0 1-1.5 0v-3.5A.75.75 0 0 1 10 5Zm0 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" clip-rule="evenodd" fill-rule="evenodd" />
      </svg>
    </div>
    <div class="ml-3">
      <p class="text-sm">
        {{ $title ?: 'You have no credits left.' }}
        @if($linkText)
          <a href="{{ $linkUrl }}" class="font-medium underline hover:opacity-80">{{ $linkText }}</a>
        @endif
      </p>
    </div>
  </div>
</div>
