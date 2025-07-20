@props([
    'name' => null,
    'id' => null,
    'label' => null,
    'options' => [],
    'selected' => null,
    'placeholder' => null,
    'required' => false,
    'disabled' => false,
    'class' => null,
    'optionValue' => 'value',
    'optionLabel' => 'label',
    'optionKey' => 'key'
])

@php
    $uniqueId = $component->uniqueId;
@endphp

<div {{ $attributes->merge(['class' => '']) }} data-select-id="{{ $uniqueId }}">
    @if($label)
        <label @foreach($component->labelAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
            {{ $label }}
            @if($required)
                <span class="text-red-500">*</span>
            @endif
        </label>
    @endif

    <div @foreach($component->containerAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach>
        <button @foreach($component->buttonAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach data-select-button="{{ $uniqueId }}">
            <span class="col-start-1 row-start-1 truncate pr-6">{{ $component->getSelectedLabel() }}</span>
            <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true" class="col-start-1 row-start-1 size-5 self-center justify-self-end text-gray-500 sm:size-4">
                <path d="M5.22 10.22a.75.75 0 0 1 1.06 0L8 11.94l1.72-1.72a.75.75 0 1 1 1.06 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 0 1 0-1.06ZM10.78 5.78a.75.75 0 0 1-1.06 0L8 4.06 6.28 5.78a.75.75 0 0 1-1.06-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1 0 1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
            </svg>
        </button>

        <ul @foreach($component->listboxAttributes() as $key => $value) {{ $key }}="{{ $value }}" @endforeach data-select-listbox="{{ $uniqueId }}" style="display: none;">
            @foreach($options as $index => $option)
                @php
                    $optionKey = $component->getOptionKey($option, $index);
                    $optionValue = $component->getOptionValue($option);
                    $optionLabel = $component->getOptionLabel($option);
                    $isSelected = $component->isSelected($option);
                @endphp

                <li id="listbox-option-{{ $uniqueId }}-{{ $optionKey }}"
                     role="option"
                     class="relative cursor-default py-2 pr-4 pl-8 text-gray-900 select-none hover:bg-indigo-600 hover:text-white"
                     data-value="{{ $optionValue }}"
                     data-select-option="{{ $uniqueId }}"
                     onclick="selectOption('{{ $uniqueId }}', this, '{{ $optionValue }}', '{{ $name }}')">

                    <span class="block truncate {{ $isSelected ? 'font-semibold' : 'font-normal' }}">
                        {{ $optionLabel }}
                    </span>

                    @if($isSelected)
                        <span class="absolute inset-y-0 left-0 flex items-center pl-1.5 text-indigo-600">
                            <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5">
                                <path d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" fill-rule="evenodd" />
                            </svg>
                        </span>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>

    @error($name)
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<script>
// 전역 함수로 selectOption 정의 (충돌 방지)
window.selectOption = window.selectOption || function(uniqueId, element, value, name) {
    // 해당 컴포넌트의 리스트박스만 찾기
    const listbox = document.querySelector(`[data-select-listbox="${uniqueId}"]`);
    if (!listbox) return;

    // 기존 선택 해제
    const options = listbox.querySelectorAll('li');
    options.forEach(option => {
        option.classList.remove('bg-indigo-600', 'text-white');
        option.classList.add('text-gray-900');
        const checkmark = option.querySelector('span:last-child');
        if (checkmark) {
            checkmark.classList.add('text-indigo-600');
            checkmark.classList.remove('text-white');
        }
        const label = option.querySelector('span:first-child');
        if (label) {
            label.classList.remove('font-semibold');
            label.classList.add('font-normal');
        }
    });

    // 현재 옵션 선택
    element.classList.add('bg-indigo-600', 'text-white');
    element.classList.remove('text-gray-900');
    const checkmark = element.querySelector('span:last-child');
    if (checkmark) {
        checkmark.classList.remove('text-indigo-600');
        checkmark.classList.add('text-white');
    }
    const label = element.querySelector('span:first-child');
    if (label) {
        label.classList.add('font-semibold');
        label.classList.remove('font-normal');
    }

    // 버튼 텍스트 업데이트
    const button = document.querySelector(`[data-select-button="${uniqueId}"]`);
    if (button) {
        const buttonText = button.querySelector('span');
        buttonText.textContent = element.querySelector('span:first-child').textContent;
    }

    // 숨겨진 input 업데이트
    let hiddenInput = document.querySelector(`[data-select-id="${uniqueId}"] input[name="${name}"][type="hidden"]`);
    if (!hiddenInput) {
        hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = name;
        document.querySelector(`[data-select-id="${uniqueId}"]`).appendChild(hiddenInput);
    }
    hiddenInput.value = value;

    // 드롭다운 닫기
    listbox.style.display = 'none';

    // 버튼 aria-expanded 업데이트
    if (button) {
        button.setAttribute('aria-expanded', 'false');
    }
};

// 드롭다운 토글 함수 (충돌 방지)
window.toggleSelectDropdown = window.toggleSelectDropdown || function(uniqueId) {
    const button = document.querySelector(`[data-select-button="${uniqueId}"]`);
    const listbox = document.querySelector(`[data-select-listbox="${uniqueId}"]`);

    if (!button || !listbox) return;

    const isVisible = listbox.style.display !== 'none';

    // 모든 드롭다운 닫기
    document.querySelectorAll('[data-select-listbox]').forEach(lb => {
        lb.style.display = 'none';
    });
    document.querySelectorAll('[data-select-button]').forEach(btn => {
        btn.setAttribute('aria-expanded', 'false');
    });

    // 현재 드롭다운 토글
    if (!isVisible) {
        listbox.style.display = 'block';
        button.setAttribute('aria-expanded', 'true');
    } else {
        listbox.style.display = 'none';
        button.setAttribute('aria-expanded', 'false');
    }
};

// DOM 로드 시 이벤트 리스너 등록 (한 번만 실행)
if (!window.selectCheckInitialized) {
    document.addEventListener('DOMContentLoaded', function() {
        // 버튼 클릭 이벤트
        document.addEventListener('click', function(e) {
            if (e.target.closest('[data-select-button]')) {
                const button = e.target.closest('[data-select-button]');
                const uniqueId = button.getAttribute('data-select-button');
                window.toggleSelectDropdown(uniqueId);
            }
        });

        // 외부 클릭 시 드롭다운 닫기
        document.addEventListener('click', function(e) {
            if (!e.target.closest('[data-select-button]') && !e.target.closest('[data-select-listbox]')) {
                document.querySelectorAll('[data-select-listbox]').forEach(lb => {
                    lb.style.display = 'none';
                });
                document.querySelectorAll('[data-select-button]').forEach(btn => {
                    btn.setAttribute('aria-expanded', 'false');
                });
            }
        });

        window.selectCheckInitialized = true;
    });
}
</script>
