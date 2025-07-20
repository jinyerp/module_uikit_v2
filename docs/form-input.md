# Form Input Component

`x-ui::form-input` 컴포넌트는 폼 입력 필드를 위한 재사용 가능한 컴포넌트입니다.

## 기본 사용법

```blade
<x-ui::form-input 
    name="email" 
    label="이메일" 
    type="email" 
    placeholder="you@example.com" 
/>
```

## 속성

| 속성 | 타입 | 기본값 | 설명 |
|------|------|--------|------|
| `name` | string | null | 입력 필드의 name 속성 |
| `id` | string | null | 입력 필드의 id 속성 (name과 동일한 경우 자동 설정) |
| `type` | string | 'text' | 입력 필드의 type 속성 |
| `value` | string | null | 입력 필드의 초기 값 |
| `placeholder` | string | null | 플레이스홀더 텍스트 |
| `label` | string | null | 라벨 텍스트 |
| `required` | boolean | false | 필수 필드 여부 |
| `disabled` | boolean | false | 비활성화 여부 |
| `readonly` | boolean | false | 읽기 전용 여부 |
| `autocomplete` | string | null | 자동완성 속성 |
| `class` | string | null | 추가 CSS 클래스 |

## 사용 예시

### 기본 텍스트 입력
```blade
<x-ui::form-input 
    name="name" 
    label="이름" 
    placeholder="홍길동" 
/>
```

### 이메일 입력 (필수)
```blade
<x-ui::form-input 
    name="email" 
    label="이메일" 
    type="email" 
    placeholder="you@example.com" 
    required="true" 
/>
```

### 비밀번호 입력
```blade
<x-ui::form-input 
    name="password" 
    label="비밀번호" 
    type="password" 
    required="true" 
/>
```

### 전화번호 입력
```blade
<x-ui::form-input 
    name="phone" 
    label="전화번호" 
    type="tel" 
    placeholder="010-1234-5678" 
    autocomplete="tel" 
/>
```

### 숫자 입력
```blade
<x-ui::form-input 
    name="age" 
    label="나이" 
    type="number" 
    placeholder="25" 
/>
```

### URL 입력
```blade
<x-ui::form-input 
    name="website" 
    label="웹사이트" 
    type="url" 
    placeholder="https://example.com" 
/>
```

### 날짜 입력
```blade
<x-ui::form-input 
    name="birthdate" 
    label="생년월일" 
    type="date" 
/>
```

### 비활성화된 입력
```blade
<x-ui::form-input 
    name="username" 
    label="사용자명" 
    value="admin" 
    disabled="true" 
/>
```

### 읽기 전용 입력
```blade
<x-ui::form-input 
    name="created_at" 
    label="생성일" 
    value="2024-01-01" 
    readonly="true" 
/>
```

### 추가 클래스 적용
```blade
<x-ui::form-input 
    name="search" 
    label="검색" 
    placeholder="검색어를 입력하세요" 
    class="bg-gray-50" 
/>
```

## 오류 처리

컴포넌트는 자동으로 Laravel의 validation 오류를 표시합니다:

```blade
<x-ui::form-input 
    name="email" 
    label="이메일" 
    type="email" 
/>
```

만약 `email` 필드에 validation 오류가 있다면, 오류 메시지가 자동으로 표시됩니다.

## 스타일링

컴포넌트는 Tailwind CSS 클래스를 사용하여 스타일링됩니다:

- **라벨**: `block text-sm/6 font-medium text-gray-900`
- **입력 필드**: `block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6`
- **오류 메시지**: `mt-2 text-sm text-red-600`

## 접근성

컴포넌트는 접근성을 고려하여 설계되었습니다:

- 라벨과 입력 필드가 올바르게 연결됨 (`for` 속성)
- 필수 필드는 빨간색 별표(*)로 표시
- 포커스 상태가 명확히 표시됨
- 스크린 리더를 위한 적절한 속성들

## $attributes 객체 활용

컴포넌트는 `$attributes` 객체를 활용하여 추가 HTML 속성들을 유연하게 처리합니다:

### 추가 속성 전달
```blade
<x-ui::form-input 
    name="email" 
    label="이메일" 
    type="email" 
    data-testid="email-input"
    aria-describedby="email-help"
/>
```

### 추가 클래스 적용
```blade
<x-ui::form-input 
    name="search" 
    label="검색" 
    class="bg-gray-50 border-2"
/>
```

### 라벨에 추가 속성 적용
```blade
<x-ui::form-input 
    name="email" 
    label="이메일" 
    label-class="text-lg font-bold"
    label-data-testid="email-label"
/>
```

### 이벤트 핸들러 추가
```blade
<x-ui::form-input 
    name="username" 
    label="사용자명" 
    onchange="validateUsername(this.value)"
    onblur="checkAvailability(this.value)"
/>
```

### 데이터 속성 활용
```blade
<x-ui::form-input 
    name="phone" 
    label="전화번호" 
    data-mask="phone"
    data-format="000-0000-0000"
/>
```

### 접근성 속성 추가
```blade
<x-ui::form-input 
    name="password" 
    label="비밀번호" 
    type="password"
    aria-describedby="password-requirements"
    aria-required="true"
/>
``` 
