# Form Textarea 컴포넌트

`x-ui::form-textarea` 컴포넌트는 다중 줄 텍스트 입력을 위한 textarea 요소를 제공합니다.

## 기본 사용법

```blade
<x-ui::form-textarea 
    name="comment" 
    label="댓글" 
    placeholder="댓글을 입력하세요" 
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
| `id` | string | `name` 값 | textarea의 고유 ID |
| `label` | string | null | 라벨 텍스트 |
| `value` | string | null | textarea의 값 |
| `rows` | int | 4 | textarea의 행 수 |
| `cols` | int | null | textarea의 열 수 |
| `placeholder` | string | null | 플레이스홀더 텍스트 |
| `required` | bool | false | 필수 필드 여부 |
| `disabled` | bool | false | 비활성화 여부 |
| `readonly` | bool | false | 읽기 전용 여부 |
| `class` | string | null | 추가 CSS 클래스 |
| `maxlength` | int | null | 최대 문자 수 |
| `minlength` | int | null | 최소 문자 수 |
| `wrap` | string | 'soft' | 텍스트 줄바꿈 방식 |

## 사용 예시

### 기본 textarea
```blade
<x-ui::form-textarea 
    name="description" 
    label="설명" 
    placeholder="상품에 대한 설명을 입력하세요" 
/>
```

### 필수 필드
```blade
<x-ui::form-textarea 
    name="content" 
    label="내용" 
    :required="true" 
    placeholder="내용을 입력하세요" 
/>
```

### 크기 조정
```blade
<x-ui::form-textarea 
    name="bio" 
    label="자기소개" 
    :rows="6" 
    :cols="50" 
    placeholder="자기소개를 입력하세요" 
/>
```

### 문자 수 제한
```blade
<x-ui::form-textarea 
    name="tweet" 
    label="트윗" 
    :maxlength="280" 
    :minlength="10" 
    placeholder="트윗을 입력하세요 (10-280자)" 
/>
```

### 읽기 전용
```blade
<x-ui::form-textarea 
    name="terms" 
    label="이용약관" 
    :readonly="true" 
    value="이용약관 내용..." 
/>
```

### 비활성화
```blade
<x-ui::form-textarea 
    name="notes" 
    label="메모" 
    :disabled="true" 
    value="비활성화된 메모" 
/>
```

### 기존 값과 함께 사용
```blade
<x-ui::form-textarea 
    name="comment" 
    label="댓글" 
    :value="old('comment', $post->comment)" 
    placeholder="댓글을 입력하세요" 
/>
```

## 고급 사용법

### 커스텀 클래스
```blade
<x-ui::form-textarea 
    name="content" 
    label="내용" 
    class="custom-textarea" 
    textarea-class="border-2 border-blue-300" 
/>
```

### 데이터 속성 추가
```blade
<x-ui::form-textarea 
    name="message" 
    label="메시지" 
    textarea-data-char-count="true" 
    textarea-data-auto-resize="true" 
/>
```

### 라벨 커스터마이징
```blade
<x-ui::form-textarea 
    name="feedback" 
    label="피드백" 
    label-class="text-lg font-bold text-blue-600" 
/>
```

### 컨테이너 커스터마이징
```blade
<x-ui::form-textarea 
    name="notes" 
    label="노트" 
    container-class="bg-gray-50 p-4 rounded-lg" 
/>
```

## 오류 처리

컴포넌트는 Laravel의 validation 오류를 자동으로 표시합니다:

```blade
<x-ui::form-textarea 
    name="content" 
    label="내용" 
    :value="old('content')" 
/>
```

만약 `content` 필드에 validation 오류가 있다면, 오류 메시지가 자동으로 표시됩니다.

## 다중 컴포넌트 사용

컴포넌트는 페이지에 여러 번 사용되어도 충돌하지 않습니다:

```blade
{{-- 첫 번째 textarea --}}
<x-ui::form-textarea 
    name="description" 
    label="상품 설명" 
    :rows="4" 
/>

{{-- 두 번째 textarea --}}
<x-ui::form-textarea 
    name="shipping_info" 
    label="배송 정보" 
    :rows="3" 
/>

{{-- 세 번째 textarea --}}
<x-ui::form-textarea 
    name="return_policy" 
    label="반품 정책" 
    :rows="5" 
/>
```

## 접근성

컴포넌트는 다음과 같은 접근성 기능을 제공합니다:

- **라벨 연결**: `for` 속성을 통한 라벨과 textarea 연결
- **필수 표시**: 필수 필드에 대한 시각적 표시
- **상태 표시**: 비활성화, 읽기 전용 상태의 시각적 표시
- **오류 표시**: validation 오류의 명확한 표시

## 스타일링

컴포넌트는 Tailwind CSS를 사용하여 스타일링됩니다:

- **기본 스타일**: 둥근 모서리, 테두리, 포커스 효과
- **상태별 스타일**: 비활성화, 오류 상태의 시각적 구분
- **반응형**: 다양한 화면 크기에 대응
- **일관성**: 다른 form 컴포넌트들과 일관된 디자인 
