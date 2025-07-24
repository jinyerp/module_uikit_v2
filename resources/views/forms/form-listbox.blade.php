@php
    $componentName = $name ?? 'formlistbox';
    $componentId = str_replace('_', '-', $componentName);
    $selectedValue = $selected ?? '';
    $placeholder = $placeholder ?? '전체';
@endphp

<label id="{{ $componentId }}-label" class="block text-sm font-medium text-gray-700 mb-1">{{ $label ?? '' }}</label>
<div class="relative">
    <button type="button" id="{{ $componentId }}-button"
        class="grid w-full cursor-default grid-cols-1 rounded-md bg-white py-1.5 pr-2 pl-3 text-left text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
        aria-haspopup="listbox" aria-expanded="false" aria-labelledby="{{ $componentId }}-label">
        <span class="col-start-1 row-start-1 truncate pr-6" id="{{ $componentId }}-selected-text">
            @if($selectedValue)
                {{ $selectedLabel ?? $placeholder }}
            @else
                {{ $placeholder }}
            @endif
        </span>
        <svg class="col-start-1 row-start-1 size-5 self-center justify-self-end text-gray-500 sm:size-4" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
            <path fill-rule="evenodd" d="M5.22 10.22a.75.75 0 0 1 1.06 0L8 11.94l1.72-1.72a.75.75 0 1 1 1.06 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 0 1 0-1.06ZM10.78 5.78a.75.75 0 0 1-1.06 0L8 4.06 6.28 5.78a.75.75 0 0 1-1.06-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1 0 1.06Z" clip-rule="evenodd" />
        </svg>
    </button>
    <input type="hidden" name="{{ $componentName }}" id="{{ $componentId }}-hidden-input" value="{{ $selectedValue }}">
    <ul class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black/5 focus:outline-hidden sm:text-sm hidden" id="{{ $componentId }}-listbox" tabindex="-1" role="listbox" aria-labelledby="{{ $componentId }}-label">
        {{ $slot }}
    </ul>
</div>
<script>
(function() {
    const btn = document.getElementById("{{ $componentId }}-button");
    const listbox = document.getElementById("{{ $componentId }}-listbox");
    const selectedText = document.getElementById("{{ $componentId }}-selected-text");
    const hiddenInput = document.getElementById("{{ $componentId }}-hidden-input");
    btn.addEventListener('click', function(e) {
        e.stopPropagation();
        listbox.classList.toggle('hidden');
        btn.setAttribute('aria-expanded', listbox.classList.contains('hidden') ? 'false' : 'true');
    });
    listbox.querySelectorAll('li').forEach(function(item) {
        item.addEventListener('click', function(e) {
            e.stopPropagation();
            const value = item.getAttribute('data-value');
            const text = item.querySelector('span').innerText;
            selectedText.innerText = text;
            hiddenInput.value = value;
            listbox.classList.add('hidden');
            btn.setAttribute('aria-expanded', 'false');
            // 체크마크 표시
            listbox.querySelectorAll('li').forEach(function(li) {
                li.querySelector('span.absolute').classList.add('hidden');
            });
            item.querySelector('span.absolute').classList.remove('hidden');
        });
    });
    // 외부 클릭 시 닫기
    document.addEventListener('click', function(e) {
        if (!btn.contains(e.target) && !listbox.contains(e.target)) {
            listbox.classList.add('hidden');
            btn.setAttribute('aria-expanded', 'false');
        }
    });
})();
</script>
