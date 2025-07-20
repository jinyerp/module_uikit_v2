# Form Components

UIKit 패키지에서 제공하는 다양한 폼 입력 컴포넌트들입니다.

## 기본 컴포넌트

### x-ui::form-input
일반적인 텍스트 입력을 위한 컴포넌트입니다.

```blade
<x-ui::form-input 
    name="name" 
    label="이름" 
    placeholder="홍길동" 
/>
```

## 특화된 컴포넌트들

### x-ui::form-email
이메일 입력을 위한 컴포넌트입니다.

```blade
<x-ui::form-email 
    name="email" 
    label="이메일" 
    required="true" 
/>
```

**기본값:**
- `type`: email
- `placeholder`: you@example.com
- `autocomplete`: email

### x-ui::form-password
비밀번호 입력을 위한 컴포넌트입니다.

```blade
<x-ui::form-password 
    name="password" 
    label="비밀번호" 
    required="true" 
/>
```

**기본값:**
- `type`: password
- `placeholder`: ••••••••
- `autocomplete`: current-password

### x-ui::form-number
숫자 입력을 위한 컴포넌트입니다.

```blade
<x-ui::form-number 
    name="age" 
    label="나이" 
    min="0" 
    max="120" 
    step="1" 
/>
```

**추가 속성:**
- `min`: 최소값
- `max`: 최대값
- `step`: 증감 단위

### x-ui::form-tel
전화번호 입력을 위한 컴포넌트입니다.

```blade
<x-ui::form-tel 
    name="phone" 
    label="전화번호" 
    required="true" 
/>
```

**기본값:**
- `type`: tel
- `placeholder`: 010-1234-5678
- `autocomplete`: tel

### x-ui::form-url
URL 입력을 위한 컴포넌트입니다.

```blade
<x-ui::form-url 
    name="website" 
    label="웹사이트" 
    placeholder="https://example.com" 
/>
```

**기본값:**
- `type`: url
- `placeholder`: https://example.com
- `autocomplete`: url

### x-ui::form-date
날짜 입력을 위한 컴포넌트입니다.

```blade
<x-ui::form-date 
    name="birthdate" 
    label="생년월일" 
    max="{{ date('Y-m-d') }}" 
/>
```

**추가 속성:**
- `min`: 최소 날짜
- `max`: 최대 날짜

### x-ui::form-time
시간 입력을 위한 컴포넌트입니다.

```blade
<x-ui::form-time 
    name="meeting_time" 
    label="회의 시간" 
    min="09:00" 
    max="18:00" 
    step="900" 
/>
```

**추가 속성:**
- `min`: 최소 시간
- `max`: 최대 시간
- `step`: 시간 단위 (초 단위)

### x-ui::form-search
검색 입력을 위한 컴포넌트입니다.

```blade
<x-ui::form-search 
    name="search" 
    label="검색" 
    placeholder="제품명을 입력하세요" 
/>
```

**기본값:**
- `type`: search
- `placeholder`: 검색어를 입력하세요...
- `autocomplete`: off

## 공통 속성

모든 폼 컴포넌트는 다음 속성들을 지원합니다:

| 속성 | 타입 | 기본값 | 설명 |
|------|------|--------|------|
| `name` | string | null | 입력 필드의 name 속성 |
| `id` | string | null | 입력 필드의 id 속성 |
| `value` | string | null | 입력 필드의 초기 값 |
| `placeholder` | string | null | 플레이스홀더 텍스트 |
| `label` | string | null | 라벨 텍스트 |
| `required` | boolean | false | 필수 필드 여부 |
| `disabled` | boolean | false | 비활성화 여부 |
| `readonly` | boolean | false | 읽기 전용 여부 |
| `class` | string | null | 추가 CSS 클래스 |

## 사용 예시

### 로그인 폼
```blade
<form method="POST" action="/login">
    @csrf
    
    <x-ui::form-email 
        name="email" 
        label="이메일" 
        required="true" 
    />
    
    <x-ui::form-password 
        name="password" 
        label="비밀번호" 
        required="true" 
    />
    
    <button type="submit">로그인</button>
</form>
```

### 회원가입 폼
```blade
<form method="POST" action="/register">
    @csrf
    
    <x-ui::form-input 
        name="name" 
        label="이름" 
        required="true" 
    />
    
    <x-ui::form-email 
        name="email" 
        label="이메일" 
        required="true" 
    />
    
    <x-ui::form-tel 
        name="phone" 
        label="전화번호" 
    />
    
    <x-ui::form-password 
        name="password" 
        label="비밀번호" 
        required="true" 
    />
    
    <x-ui::form-password 
        name="password_confirmation" 
        label="비밀번호 확인" 
        required="true" 
    />
    
    <button type="submit">가입하기</button>
</form>
```

### 상품 등록 폼
```blade
<form method="POST" action="/products">
    @csrf
    
    <x-ui::form-input 
        name="title" 
        label="상품명" 
        required="true" 
    />
    
    <x-ui::form-number 
        name="price" 
        label="가격" 
        min="0" 
        step="100" 
        required="true" 
    />
    
    <x-ui::form-number 
        name="stock" 
        label="재고" 
        min="0" 
        step="1" 
        required="true" 
    />
    
    <x-ui::form-url 
        name="website" 
        label="제품 웹사이트" 
    />
    
    <button type="submit">등록하기</button>
</form>
```

### 일정 관리 폼
```blade
<form method="POST" action="/events">
    @csrf
    
    <x-ui::form-input 
        name="title" 
        label="일정 제목" 
        required="true" 
    />
    
    <x-ui::form-date 
        name="event_date" 
        label="일정 날짜" 
        min="{{ date('Y-m-d') }}" 
        required="true" 
    />
    
    <x-ui::form-time 
        name="start_time" 
        label="시작 시간" 
        required="true" 
    />
    
    <x-ui::form-time 
        name="end_time" 
        label="종료 시간" 
        required="true" 
    />
    
    <button type="submit">일정 등록</button>
</form>
```

## 접근성

모든 컴포넌트는 접근성을 고려하여 설계되었습니다:

- 라벨과 입력 필드가 올바르게 연결됨
- 필수 필드는 빨간색 별표(*)로 표시
- 적절한 autocomplete 속성 설정
- 스크린 리더를 위한 적절한 속성들

## $attributes 객체 활용

모든 컴포넌트는 `$attributes` 객체를 지원합니다:

```blade
<x-ui::form-email 
    name="email" 
    label="이메일" 
    data-testid="email-input"
    aria-describedby="email-help"
    class="bg-gray-50"
/>
``` 
