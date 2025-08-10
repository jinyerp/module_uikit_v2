{{--
    자동 Hidden Input 처리 체크박스 컴포넌트

    사용법:
    <x-ui::form-checkbox-auto
        name="enabled"
        :checked="$settings['enabled'] ?? true"
        label="로그인 기능 활성화">
        로그인 기능을 활성화하면 사용자가 로그인할 수 있습니다.
    </x-ui::form-checkbox-auto>
--}}

<div class="flex items-center">
    <input type="hidden" name="{{ $name }}" value="0">
    <input type="checkbox"
           id="{{ $id ?? $name }}"
           name="{{ $name }}"
           value="1"
           class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500 {{ $class ?? '' }}"
           data-testid="toggle-switch-{{ $name }}"
           {{ $checked ? 'checked' : '' }}>
    <label for="{{ $id ?? $name }}" class="ml-2 block text-sm font-medium text-gray-900">
        {{ $label }}
    </label>
</div>
@if(isset($slot) && trim($slot))
    <p class="mt-1 text-sm text-gray-500">
        {{ $slot }}
    </p>
@endif
