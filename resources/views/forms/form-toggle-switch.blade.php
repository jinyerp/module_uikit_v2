{{--
    토글 스위치 컴포넌트 (자동 Hidden Input 처리 포함)

    사용법:
    <x-ui::form-toggle-switch
        name="enabled"
        :checked="$settings['enabled'] ?? true"
        label="로그인 기능 활성화"
        size="sm"
        color="indigo">
        로그인 기능을 활성화하면 사용자가 로그인할 수 있습니다.
    </x-ui::form-toggle-switch>

    크기 옵션: sm, md, lg
    색상 옵션: indigo, blue, green, red, yellow, purple
--}}

@php
    // 크기별 클래스 계산
    $sizeClasses = [];
    switch ($size ?? 'md') {
        case 'sm':
            $sizeClasses = [
                'container' => 'w-8 h-4',
                'thumb' => 'w-3 h-3',
                'translate' => 'translate-x-4'
            ];
            break;
        case 'lg':
            $sizeClasses = [
                'container' => 'w-14 h-7',
                'thumb' => 'w-6 h-6',
                'translate' => 'translate-x-7'
            ];
            break;
        default: // md
            $sizeClasses = [
                'container' => 'w-11 h-6',
                'thumb' => 'w-5 h-5',
                'translate' => 'translate-x-5'
            ];
            break;
    }

    // 색상별 클래스 계산
    $colorClasses = [];
    switch ($color ?? 'indigo') {
        case 'blue':
            $colorClasses = ['off' => 'bg-gray-200', 'on' => 'bg-blue-600'];
            break;
        case 'green':
            $colorClasses = ['off' => 'bg-gray-200', 'on' => 'bg-green-600'];
            break;
        case 'red':
            $colorClasses = ['off' => 'bg-gray-200', 'on' => 'bg-red-600'];
            break;
        case 'yellow':
            $colorClasses = ['off' => 'bg-gray-200', 'on' => 'bg-yellow-500'];
            break;
        case 'purple':
            $colorClasses = ['off' => 'bg-gray-200', 'on' => 'bg-purple-600'];
            break;
        default: // indigo
            $colorClasses = ['off' => 'bg-gray-200', 'on' => 'bg-indigo-600'];
            break;
    }
@endphp

<div class="flex items-center space-x-3">
    {{-- Hidden input for unchecked state --}}
    <input type="hidden" name="{{ $name }}" value="{{ $checked ? '1' : '0' }}">

    {{-- Toggle Switch --}}
    <div class="group relative inline-flex shrink-0 rounded-full p-0.5 transition-colors duration-200 ease-in-out cursor-pointer {{ $sizeClasses['container'] }} {{ $checked ? $colorClasses['on'] : $colorClasses['off'] }} {{ $class ?? '' }}"
         data-testid="toggle-switch-{{ $name }}"
         role="button"
         aria-label="{{ $ariaLabel ?? $label }}">
        <span class="rounded-full bg-white shadow-xs ring-1 ring-gray-900/5 transition-transform duration-200 ease-in-out {{ $sizeClasses['thumb'] }} {{ $checked ? $sizeClasses['translate'] : 'translate-x-0' }}"></span>
        <input type="checkbox"
               id="{{ $id ?? $name }}"
               name="{{ $name }}"
               value="1"
               aria-label="{{ $ariaLabel ?? $label }}"
               class="absolute inset-0 appearance-none focus:outline-hidden cursor-pointer z-10 opacity-0 {{ $disabled ? 'cursor-not-allowed' : '' }}"
               {{ $checked ? 'checked' : '' }}
               {{ $disabled ? 'disabled' : '' }}>
    </div>

    {{-- Label --}}
    @if($label)
        <label for="{{ $id ?? $name }}" class="block text-sm font-medium text-gray-900">
            {{ $label }}
        </label>
    @endif
</div>

{{-- Description --}}
@if(isset($slot) && trim($slot))
    <p class="mt-1 text-sm text-gray-500">
        {{ $slot }}
    </p>
@endif
