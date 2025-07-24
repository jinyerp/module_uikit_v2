@php
    $isSelected = ($selectedValue == $value);
@endphp
<li class="relative cursor-default py-2 pr-9 pl-3 text-gray-900 select-none hover:bg-indigo-600 hover:text-white"
    role="option" data-value="{{ $value }}">
    <span class="block truncate font-normal">{{ $slot }}</span>
    <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600 {{ $isSelected ? '' : 'hidden' }}">
        <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
        </svg>
    </span>
</li>
