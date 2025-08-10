# UIKit Form 컴포넌트 사용법

UIKit은 Laravel Blade 컴포넌트 기반의 form 요소들을 제공합니다. 이 문서는 각 form 컴포넌트의 사용법과 주의사항을 설명합니다.

## 목차

- [기본 사용법](#기본-사용법)
- [체크박스 컴포넌트](#체크박스-컴포넌트)
- [자동 Hidden Input 처리](#자동-hidden-input-처리)
- [JavaScript 통합](#javascript-통합)
- [주의사항](#주의사항)
- [문제 해결](#문제-해결)

## 기본 사용법

### 1. 컴포넌트 등록

UIKit form 컴포넌트들은 자동으로 등록됩니다. `ui::` 네임스페이스를 통해 사용할 수 있습니다:

```php
// 컴포넌트 등록 확인
Blade::component('ui::form-checkbox-auto', \Jiny\Uikit\App\View\Forms\FormCheckboxAuto::class);
```

### 2. 기본 form 구조

```blade
<form method="POST" action="{{ route('settings.store') }}" id="settingsForm">
    @csrf
    
    <x-ui::form-section title="설정" description="설정을 관리합니다.">
        <x-ui::form-checkbox-auto
            name="enabled"
            :checked="$settings['enabled'] ?? true"
            label="기능 활성화">
            이 기능을 활성화하면 사용할 수 있습니다.
        </x-ui::form-checkbox-auto>
    </x-ui::form-section>
</form>
```

## 체크박스 컴포넌트

### 1. 기본 체크박스 (form-checkbox)

기본적인 체크박스 컴포넌트입니다.

```blade
<x-ui::form-checkbox
    name="option"
    :checked="$value"
    label="옵션 선택">
    이 옵션에 대한 설명입니다.
</x-ui::form-checkbox>
```

**속성:**
- `name`: 필수. 체크박스의 name 속성
- `checked`: 선택적. 체크박스 상태 (boolean)
- `label`: 선택적. 체크박스 라벨
- `class`: 선택적. 추가 CSS 클래스

### 2. 자동 Hidden Input 처리 체크박스 (form-checkbox-auto)

**권장 사용법**: 체크박스가 체크되지 않았을 때도 값을 전송해야 하는 경우 사용합니다.

```blade
<x-ui::form-checkbox-auto
    name="enabled"
    :checked="$settings['enabled'] ?? true"
    label="로그인 기능 활성화">
    로그인 기능을 활성화하면 사용자가 로그인할 수 있습니다.
</x-ui::form-checkbox-auto>
```

**특징:**
- 자동으로 hidden input을 생성하여 체크되지 않은 상태도 처리
- JavaScript 없이도 일반 form submit과 AJAX 모두 지원
- 체크박스 값이 자동으로 '0' 또는 '1'로 처리됨

## 자동 Hidden Input 처리

### 1. 작동 원리

`form-checkbox-auto` 컴포넌트는 다음과 같은 HTML 구조를 생성합니다:

```html
<div class="flex items-center">
    <input type="hidden" name="enabled" value="0">
    <input type="checkbox" 
           id="enabled" 
           name="enabled" 
           value="1" 
           class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500"
           checked>
    <label for="enabled" class="ml-2 block text-sm font-medium text-gray-900">
        로그인 기능 활성화
    </label>
</div>
<p class="mt-1 text-sm text-gray-500">
    로그인 기능을 활성화하면 사용자가 로그인할 수 있습니다.
</p>
```

### 2. 컨트롤러에서 처리

```php
public function store(Request $request)
{
    // 체크박스 값 처리 (자동으로 '0' 또는 '1'로 전송됨)
    $enabled = $request->has('enabled') && $request->input('enabled') === '1';
    
    // 또는 filter_var 사용
    $enabled = filter_var($request->input('enabled'), FILTER_VALIDATE_BOOLEAN);
    
    // 설정 저장
    $settings = [
        'enabled' => $enabled,
        // ... 다른 설정들
    ];
    
    return response()->json(['success' => true]);
}
```

## JavaScript 통합

### 1. 자동 처리 JavaScript

UIKit은 `checkbox-auto.js` 파일을 제공하여 체크박스를 자동으로 처리합니다.

**사용법:**

```html
<!-- 페이지에 JavaScript 포함 -->
<script src="{{ asset('vendor/jiny-uikit/js/checkbox-auto.js') }}"></script>
```

**또는 Vite/webpack을 사용하는 경우:**

```javascript
// resources/js/app.js
import './vendor/jiny-uikit/js/checkbox-auto.js';
```

### 2. 수동 JavaScript 처리

필요한 경우 수동으로 처리할 수도 있습니다:

```javascript
// 체크박스 변경 시 hidden input 업데이트
document.addEventListener('change', function(e) {
    if (e.target.type === 'checkbox') {
        const form = e.target.closest('form');
        if (form) {
            const hiddenInput = form.querySelector(`input[name="${e.target.name}"][type="hidden"]`);
            if (hiddenInput) {
                hiddenInput.value = e.target.checked ? '1' : '0';
            }
        }
    }
});

// AJAX 요청 시 FormData 처리
function submitForm(form) {
    const formData = new FormData(form);
    
    // 체크박스 값 자동 처리
    const checkboxes = form.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(checkbox => {
        const hiddenInput = form.querySelector(`input[name="${checkbox.name}"][type="hidden"]`);
        if (hiddenInput) {
            formData.set(checkbox.name, checkbox.checked ? '1' : '0');
        }
    });
    
    // AJAX 요청
    fetch(form.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    });
}
```

## 주의사항

### 1. 체크박스 처리 시 주의사항

**❌ 잘못된 방법:**
```php
// 체크되지 않은 체크박스는 전송되지 않음
$enabled = $request->input('enabled') ? true : false; // 항상 false가 됨
```

**✅ 올바른 방법:**
```php
// form-checkbox-auto 사용 시
$enabled = $request->has('enabled') && $request->input('enabled') === '1';

// 또는 filter_var 사용
$enabled = filter_var($request->input('enabled'), FILTER_VALIDATE_BOOLEAN);
```

### 2. 유효성 검사

```php
// 체크박스 유효성 검사 규칙
$request->validate([
    'enabled' => 'nullable|in:0,1',
    'require_2fa' => 'nullable|in:0,1',
    // ... 다른 필드들
]);
```

### 3. 기본값 처리

```php
// 컨트롤러에서 기본값 설정
$settings = [
    'enabled' => $request->input('enabled', '0') === '1',
    'require_2fa' => $request->input('require_2fa', '0') === '1',
    // ... 다른 설정들
];
```

### 4. Blade 템플릿에서 사용

```blade
{{-- 올바른 방법 --}}
<x-ui::form-checkbox-auto
    name="enabled"
    :checked="($settings['enabled'] ?? true) === true"
    label="기능 활성화">
    설명...
</x-ui::form-checkbox-auto>

{{-- 잘못된 방법 --}}
<x-ui::form-checkbox-auto
    name="enabled"
    :checked="$settings['enabled'] ?? true"
    label="기능 활성화">
    설명...
</x-ui::form-checkbox-auto>
```

## 문제 해결

### 1. 체크박스가 체크되지 않는 문제

**문제:** 체크박스가 체크된 상태로 표시되지 않음

**해결방법:**
```php
// 컨트롤러에서 boolean 값 확인
\Log::info('Checkbox value:', [
    'enabled' => $settings['enabled'],
    'enabled_type' => gettype($settings['enabled']),
    'enabled_bool' => (bool) $settings['enabled']
]);
```

### 2. Hidden Input이 생성되지 않는 문제

**문제:** `form-checkbox-auto` 컴포넌트가 hidden input을 생성하지 않음

**해결방법:**
1. 컴포넌트가 올바르게 등록되었는지 확인
2. 네임스페이스가 `ui::form-checkbox-auto`인지 확인
3. 컴포넌트 클래스 파일이 존재하는지 확인

### 3. JavaScript가 작동하지 않는 문제

**문제:** 체크박스 변경 시 hidden input 값이 업데이트되지 않음

**해결방법:**
1. JavaScript 파일이 올바르게 로드되었는지 확인
2. 브라우저 개발자 도구에서 JavaScript 오류 확인
3. 체크박스에 올바른 `name` 속성이 있는지 확인

## 예시 코드

### 1. 완전한 설정 폼 예시

```blade
{{-- resources/views/settings/form.blade.php --}}
@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('settings.store') }}" id="settingsForm">
    @csrf
    
    <x-ui::form-section title="로그인 설정" description="로그인 관련 설정을 관리합니다.">
        <x-ui::form-checkbox-auto
            name="enabled"
            :checked="$settings['enabled'] ?? true"
            label="로그인 기능 활성화">
            로그인 기능을 활성화하면 사용자가 로그인할 수 있습니다.
        </x-ui::form-checkbox-auto>
        
        <x-ui::form-checkbox-auto
            name="require_2fa"
            :checked="$settings['require_2fa'] ?? false"
            label="2단계 인증 필수">
            모든 사용자에게 2단계 인증을 강제합니다.
        </x-ui::form-checkbox-auto>
    </x-ui::form-section>
    
    <div class="flex justify-end gap-3 mt-8">
        <x-ui::button-light type="button" onclick="history.back()">취소</x-ui::button-light>
        <x-ui::button-primary type="submit">설정 저장</x-ui::button-primary>
    </div>
</form>

@push('scripts')
<script src="{{ asset('vendor/jiny-uikit/js/checkbox-auto.js') }}"></script>
@endpush
@endsection
```

### 2. 컨트롤러 예시

```php
<?php
// app/Http/Controllers/SettingsController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function store(Request $request)
    {
        // 유효성 검사
        $validated = $request->validate([
            'enabled' => 'nullable|in:0,1',
            'require_2fa' => 'nullable|in:0,1',
        ]);

        // 설정 처리
        $settings = [
            'enabled' => $request->has('enabled') && $request->input('enabled') === '1',
            'require_2fa' => $request->has('require_2fa') && $request->input('require_2fa') === '1',
        ];

        // 설정 저장
        Setting::saveSettings($settings);

        return response()->json([
            'success' => true,
            'message' => '설정이 성공적으로 저장되었습니다.'
        ]);
    }
}
```

## 추가 리소스

- [UIKit 컴포넌트 목록](../resources/views/components/)
- [JavaScript 파일 목록](../resources/js/)
- [컴포넌트 등록 방법](../resources/새로운_컴포넌트_등록방법.md)

## TODO 리스트

### 🔄 진행 중인 작업

#### 1. 토글 스위치 컴포넌트 (form-toggle-switch) 개선
- **상태**: 🚧 개발 중
- **문제**: 클릭 이벤트가 제대로 작동하지 않음
- **현재 해결책**: `form-checkbox-auto`로 임시 대체

**세부 작업 항목:**
- [ ] 토글 스위치의 클릭 영역 문제 해결
- [ ] JavaScript 이벤트 핸들링 개선
- [ ] 시각적 피드백 개선 (애니메이션, 전환 효과)
- [ ] 다양한 크기 옵션 지원 (sm, md, lg)
- [ ] 다양한 색상 옵션 지원 (indigo, blue, green, red, yellow, purple)
- [ ] 접근성 개선 (ARIA 속성, 키보드 네비게이션)
- [ ] 모바일 터치 이벤트 지원

**기술적 이슈:**
1. **클릭 이벤트 처리**: `absolute inset-0`로 설정된 checkbox가 다른 요소에 가려지는 문제
2. **시각적 업데이트**: 상태 변경 시 CSS 클래스 전환이 즉시 반영되지 않는 문제
3. **크기별 이동 거리**: 다양한 크기에 따른 `translate-x` 값 계산 문제

**해결 방안:**
1. **클릭 영역 개선**: 
   - `pointer-events: none`을 사용하여 span과 다른 요소들이 클릭을 방해하지 않도록 설정
   - `z-index` 조정으로 checkbox가 최상단에 위치하도록 설정

2. **이벤트 처리 개선**:
   - `mousedown`과 `touchstart` 이벤트 추가
   - `preventDefault()`를 사용하여 기본 동작 방지

3. **시각적 업데이트 개선**:
   - `requestAnimationFrame`을 사용하여 부드러운 애니메이션 적용
   - CSS transition과 JavaScript 동기화

**예상 완료일**: 2025년 1월 중순

#### 2. 문서화 개선
- [ ] 모든 form 컴포넌트에 대한 상세 사용법 추가
- [ ] 코드 예시 및 실제 사용 사례 추가
- [ ] 문제 해결 가이드 확장
- [ ] 접근성 가이드 추가

### 🎯 향후 계획

#### 1. 새로운 컴포넌트 개발
- [ ] Radio button 컴포넌트
- [ ] Select dropdown 컴포넌트
- [ ] Date picker 컴포넌트
- [ ] File upload 컴포넌트

#### 2. 기존 컴포넌트 개선
- [ ] Form validation 메시지 개선
- [ ] Error state 스타일링 개선
- [ ] Loading state 추가
- [ ] Disabled state 개선

#### 3. 성능 최적화
- [ ] Bundle size 최적화
- [ ] Lazy loading 구현
- [ ] Tree shaking 지원
- [ ] CSS 최적화

### 🐛 알려진 이슈

1. **토글 스위치 클릭 이슈**
   - **설명**: 토글 스위치를 클릭해도 상태가 변경되지 않음
   - **임시 해결책**: `form-checkbox-auto` 사용
   - **영향도**: 높음
   - **우선순위**: 높음

2. **모바일 터치 이벤트**
   - **설명**: 모바일에서 토글 스위치가 제대로 작동하지 않음
   - **영향도**: 중간
   - **우선순위**: 중간

### 📝 개발 노트

#### 토글 스위치 개발 중 발견된 문제점:
1. **이벤트 버블링**: 클릭 이벤트가 상위 요소로 전파되지 않는 문제
2. **CSS 클래스 전환**: 상태 변경 시 즉시 반영되지 않는 문제
3. **접근성**: 키보드 네비게이션 지원 부족

#### 해결된 문제:
1. ✅ 크기별 클래스 매핑 구현
2. ✅ 색상별 클래스 매핑 구현
3. ✅ Hidden input 자동 처리 구현
4. ✅ JavaScript 이벤트 핸들러 기본 구조 구현

### 🔗 관련 링크

- [토글 스위치 관련 이슈](../../issues?q=is:issue+is:open+label:enhancement+toggle+switch)
- [Form 컴포넌트 토론](../../discussions/category_qa?discussions_q=toggle+switch)
- [개발 가이드라인](../DEVELOPMENT.md)
