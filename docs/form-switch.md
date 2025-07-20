# Form Switch 컴포넌트

`x-ui::form-switch` 컴포넌트는 토글 스위치를 제공합니다.

## 기본 사용법

```blade
<x-ui::form-switch 
    name="setting" 
    label="Use setting" 
    :checked="old('setting', $user->setting)"
/>
```

## 속성

### 필수 속성

| 속성 | 타입 | 설명 |
|------|------|------|
| `name` | string | 폼 필드 이름 |

### 선택 속성

| 속성 | 타입 | 기본값 | 설명 |
|------|------|--------|------|
| `id` | string | `name` 값 | switch의 고유 ID |
| `label` | string | null | 라벨 텍스트 |
| `value` | string | null | switch의 값 |
| `checked` | bool | false | 체크 상태 |
| `required` | bool | false | 필수 필드 여부 |
| `disabled` | bool | false | 비활성화 여부 |
| `class` | string | null | 추가 CSS 클래스 |
| `ariaLabel` | string | `label` 값 | 접근성을 위한 aria-label |
| `size` | string | 'default' | 크기 (small, default, large) |

## 사용 예시

### 기본 switch
```blade
<x-ui::form-switch 
    name="notifications" 
    label="알림 받기" 
    :checked="old('notifications', $user->notifications_enabled)"
/>
```

### 필수 필드
```blade
<x-ui::form-switch 
    name="terms" 
    label="이용약관 동의" 
    :required="true"
    :checked="old('terms')"
/>
```

### 비활성화
```blade
<x-ui::form-switch 
    name="feature" 
    label="베타 기능" 
    :disabled="true"
    :checked="true"
/>
```

### 크기 조정
```blade
{{-- 작은 크기 --}}
<x-ui::form-switch 
    name="compact_mode" 
    label="컴팩트 모드" 
    size="small"
    :checked="old('compact_mode')"
/>

{{-- 기본 크기 --}}
<x-ui::form-switch 
    name="dark_mode" 
    label="다크 모드" 
    size="default"
    :checked="old('dark_mode')"
/>

{{-- 큰 크기 --}}
<x-ui::form-switch 
    name="accessibility" 
    label="접근성 모드" 
    size="large"
    :checked="old('accessibility')"
/>
```

### 기존 값과 함께 사용
```blade
<x-ui::form-switch 
    name="auto_save" 
    label="자동 저장" 
    :checked="old('auto_save', $user->auto_save_enabled)"
/>
```

## 고급 사용법

### 커스텀 클래스
```blade
<x-ui::form-switch 
    name="custom_switch" 
    label="커스텀 스위치" 
    class="custom-switch-container"
    switch-container-class="custom-switch-bg"
    switch-thumb-class="custom-switch-thumb"
/>
```

### 데이터 속성 추가
```blade
<x-ui::form-switch 
    name="analytics" 
    label="분석 데이터 수집" 
    switch-input-data-tracking="true"
    switch-input-data-category="privacy"
/>
```

### 라벨 커스터마이징
```blade
<x-ui::form-switch 
    name="feature_flag" 
    label="실험적 기능" 
    label-class="text-lg font-bold text-blue-600"
/>
```

### 접근성 개선
```blade
<x-ui::form-switch 
    name="sound" 
    label="소리 알림" 
    ariaLabel="소리 알림 활성화/비활성화"
    :checked="old('sound', $user->sound_enabled)"
/>
```

## 오류 처리

컴포넌트는 Laravel의 validation 오류를 자동으로 표시합니다:

```blade
<x-ui::form-switch 
    name="privacy" 
    label="개인정보 수집 동의" 
    :checked="old('privacy')"
/>
```

만약 `privacy` 필드에 validation 오류가 있다면, 오류 메시지가 자동으로 표시됩니다.

## 다중 컴포넌트 사용

컴포넌트는 페이지에 여러 번 사용되어도 충돌하지 않습니다:

```blade
{{-- 첫 번째 switch --}}
<x-ui::form-switch 
    name="email_notifications" 
    label="이메일 알림" 
    :checked="old('email_notifications')"
/>

{{-- 두 번째 switch --}}
<x-ui::form-switch 
    name="push_notifications" 
    label="푸시 알림" 
    :checked="old('push_notifications')"
/>

{{-- 세 번째 switch --}}
<x-ui::form-switch 
    name="sms_notifications" 
    label="SMS 알림" 
    :checked="old('sms_notifications')"
/>
```

## 접근성

컴포넌트는 다음과 같은 접근성 기능을 제공합니다:

- **라벨 연결**: `for` 속성을 통한 라벨과 input 연결
- **aria-label**: 스크린 리더를 위한 명확한 설명
- **키보드 네비게이션**: Tab 키로 포커스 이동, Space 키로 토글
- **상태 표시**: 체크, 비활성화 상태의 시각적 구분
- **오류 표시**: validation 오류의 명확한 표시

## 스타일링

컴포넌트는 Tailwind CSS를 사용하여 스타일링됩니다:

- **기본 스타일**: 둥근 배경, 부드러운 전환 효과
- **상태별 스타일**: 체크, 포커스, 비활성화 상태의 시각적 구분
- **다크 모드**: 자동 다크 모드 지원
- **반응형**: 다양한 화면 크기에 대응
- **일관성**: 다른 form 컴포넌트들과 일관된 디자인

## 크기 옵션

### Small (w-9, size-4)
```blade
<x-ui::form-switch 
    name="compact" 
    label="컴팩트 모드" 
    size="small"
/>
```

### Default (w-11, size-5)
```blade
<x-ui::form-switch 
    name="normal" 
    label="일반 모드" 
    size="default"
/>
```

### Large (w-14, size-6)
```blade
<x-ui::form-switch 
    name="accessibility" 
    label="접근성 모드" 
    size="large"
/>
```

## JavaScript 상호작용

Switch는 기본적으로 HTML checkbox로 동작하므로 추가 JavaScript가 필요하지 않습니다. 하지만 필요에 따라 커스텀 JavaScript를 추가할 수 있습니다:

```blade
<x-ui::form-switch 
    name="feature" 
    label="실험적 기능" 
    switch-input-onchange="handleFeatureToggle(this)"
/>
```

```javascript
function handleFeatureToggle(checkbox) {
    if (checkbox.checked) {
        console.log('기능이 활성화되었습니다');
    } else {
        console.log('기능이 비활성화되었습니다');
    }
}
``` 
