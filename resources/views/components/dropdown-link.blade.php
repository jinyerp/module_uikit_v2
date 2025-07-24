@php
    $dropdownId = $id ?? 'dropdown-link-' . uniqid();
@endphp
<div class="w-full">
    <a href="javascript:void(0)" id="{{ $dropdownId }}-toggle" class="inline-block text-sm text-indigo-600 hover:text-indigo-800 font-medium select-none">
        <span class="inline-flex items-center">
            <span id="{{ $dropdownId }}-text">{{ $text ?? $slot }}</span>
            <svg id="{{ $dropdownId }}-icon" class="w-4 h-4 ml-1 transition-transform align-middle" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </span>
    </a>
    <div id="{{ $dropdownId }}-content" class="hidden w-full block">
        {{ $slot }}
    </div>
</div>
<script>
(function() {
    var toggle = document.getElementById("{{ $dropdownId }}-toggle");
    var content = document.getElementById("{{ $dropdownId }}-content");
    var text = document.getElementById("{{ $dropdownId }}-text");
    var icon = document.getElementById("{{ $dropdownId }}-icon");
    if (toggle && content) {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            content.classList.toggle('hidden');
            if (content.classList.contains('hidden')) {
                if (text) text.textContent = '{{ $textDefault ?? '고급 검색 옵션 보기' }}';
                if (icon) icon.style.transform = '';
            } else {
                if (text) text.textContent = '{{ $textActive ?? '고급 검색 옵션 닫기' }}';
                if (icon) icon.style.transform = 'rotate(180deg)';
            }
        });
    }
})();
</script>
