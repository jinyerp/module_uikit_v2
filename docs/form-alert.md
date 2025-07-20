# Form Alert 컴포넌트

`x-ui::alert-***` 컴포넌트들은 다양한 타입의 알림을 제공합니다.

## 사용 가능한 컴포넌트

- `x-ui::alert` - 기본 알림 (타입 지정 가능)
- `x-ui::alert-success` - 성공 알림
- `x-ui::alert-warning` - 경고 알림
- `x-ui::alert-error` - 오류 알림
- `x-ui::alert-info` - 정보 알림

## 기본 사용법

### 기본 알림 (타입 지정)
```blade
<x-ui::alert 
    title="Attention needed" 
    message="Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam quo totam eius aperiam dolorum."
    type="warning"
/>
```

### 성공 알림
```blade
<x-ui::alert-success 
    title="성공!" 
    message="작업이 성공적으로 완료되었습니다."
/>
```

### 경고 알림
```blade
<x-ui::alert-warning 
    title="주의" 
    message="주의가 필요한 상황입니다."
/>
```

### 오류 알림
```blade
<x-ui::alert-error 
    title="오류 발생" 
    message="문제가 발생했습니다. 다시 시도해주세요."
/>
```

### 정보 알림
```blade
<x-ui::alert-info 
    title="정보" 
    message="유용한 정보를 확인하세요."
/>
```

## 속성

### 선택 속성

| 속성 | 타입 | 기본값 | 설명 |
|------|------|--------|------|
| `title` | string | null | 알림의 제목 |
| `message` | string | null | 알림의 메시지 |
| `type` | string | 'info' | 알림 타입 (success, warning, error, info) - `x-ui::alert`에서만 사용 |
| `showIcon` | bool | true | 아이콘 표시 여부 |
| `dismissible` | bool | false | 닫기 버튼 표시 여부 |

## 사용 예시

### 기본 경고 알림
```blade
<x-ui::alert-warning 
    title="Attention needed" 
    message="Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam quo totam eius aperiam dolorum."
/>
```

### 닫기 가능한 성공 알림
```blade
<x-ui::alert-success 
    title="업그레이드 완료!" 
    message="프리미엄 플랜으로 성공적으로 업그레이드되었습니다."
    :dismissible="true"
/>
```

### 아이콘 없는 오류 알림
```blade
<x-ui::alert-error 
    title="연결 오류" 
    message="서버에 연결할 수 없습니다. 인터넷 연결을 확인해주세요."
    :showIcon="false"
/>
```

### 슬롯을 사용한 커스텀 내용
```blade
<x-ui::alert-info title="커스텀 알림">
    <div class="mt-2 text-sm text-blue-700">
        <p>슬롯을 사용하여 커스텀 내용을 추가할 수 있습니다.</p>
        <div class="mt-2">
            <button class="bg-blue-600 text-white px-3 py-1 rounded text-xs">자세히 보기</button>
        </div>
    </div>
</x-ui::alert-info>
```

## 고급 사용법

### 커스텀 클래스
```blade
<x-ui::alert-warning 
    title="커스텀 스타일" 
    message="커스텀 클래스를 적용한 알림입니다."
    class="custom-alert"
    alert-container-class="custom-bg"
    icon-container-class="custom-icon"
    content-container-class="custom-content"
    title-class="custom-title"
    message-class="custom-message"
/>
```

### 데이터 속성 추가
```blade
<x-ui::alert-success 
    title="분석 완료" 
    message="사용자 행동 분석이 완료되었습니다."
    alert-container-data-analytics="true"
    alert-container-data-category="user-behavior"
    dismiss-button-data-action="dismiss-alert"
/>
```

### 조건부 렌더링
```blade
@if($user->hasUnreadNotifications())
    <x-ui::alert-info 
        title="새로운 알림" 
        message="읽지 않은 알림이 있습니다."
        :dismissible="true"
    />
@endif
```

### 동적 내용
```blade
<x-ui::alert-{{ $notification->type }} 
    title="{{ $notification->title }}" 
    message="{{ $notification->message }}"
    :dismissible="{{ $notification->dismissible ? 'true' : 'false' }}"
/>
```

## 변형 옵션

### Success (성공)
```blade
<x-ui::alert-success 
    title="성공!" 
    message="작업이 성공적으로 완료되었습니다."
/>
```

### Warning (경고)
```blade
<x-ui::alert-warning 
    title="주의" 
    message="주의가 필요한 상황입니다."
/>
```

### Error (오류)
```blade
<x-ui::alert-error 
    title="오류 발생" 
    message="문제가 발생했습니다. 다시 시도해주세요."
/>
```

### Info (정보)
```blade
<x-ui::alert-info 
    title="정보" 
    message="유용한 정보를 확인하세요."
/>
```

## 스타일링

### 기본 스타일
- **컨테이너**: `rounded-md p-4`
- **아이콘**: `size-5`
- **제목**: `text-sm font-medium`
- **메시지**: `mt-2 text-sm`
- **닫기 버튼**: `inline-flex h-5 w-5 rounded-md p-0.5`

### 변형별 색상

#### Success
- **배경**: `bg-green-50`
- **아이콘**: `text-green-400`
- **제목**: `text-green-800`
- **메시지**: `text-green-700`
- **닫기 버튼**: `bg-green-50 text-green-400 hover:bg-green-100`

#### Warning
- **배경**: `bg-yellow-50`
- **아이콘**: `text-yellow-400`
- **제목**: `text-yellow-800`
- **메시지**: `text-yellow-700`
- **닫기 버튼**: `bg-yellow-50 text-yellow-400 hover:bg-yellow-100`

#### Error
- **배경**: `bg-red-50`
- **아이콘**: `text-red-400`
- **제목**: `text-red-800`
- **메시지**: `text-red-700`
- **닫기 버튼**: `bg-red-50 text-red-400 hover:bg-red-100`

#### Info
- **배경**: `bg-blue-50`
- **아이콘**: `text-blue-400`
- **제목**: `text-blue-800`
- **메시지**: `text-blue-700`
- **닫기 버튼**: `bg-blue-50 text-blue-400 hover:bg-blue-100`

## 접근성

컴포넌트는 다음과 같은 접근성 기능을 제공합니다:

- **의미적 마크업**: `h3` 태그를 사용한 제목 구조
- **아이콘 숨김**: `aria-hidden="true"`로 스크린 리더에서 아이콘 숨김
- **닫기 버튼**: `aria-label="Close"`로 명확한 설명
- **색상 대비**: 충분한 색상 대비로 가독성 확보
- **키보드 네비게이션**: 닫기 버튼에 대한 키보드 접근성

## JavaScript 상호작용

닫기 버튼에 JavaScript 이벤트를 추가할 수 있습니다:

```blade
<x-ui::alert-warning 
    title="JavaScript 알림" 
    message="닫기 버튼 클릭 시 JavaScript 함수가 실행됩니다."
    :dismissible="true"
    dismiss-button-onclick="handleAlertDismiss()"
/>
```

```javascript
function handleAlertDismiss() {
    console.log('알림이 닫혔습니다');
    // 추가 로직 구현
}
```

## 다중 알림 사용

페이지에 여러 알림을 사용할 수 있습니다:

```blade
{{-- 첫 번째 알림 --}}
<x-ui::alert-success 
    title="시스템 상태" 
    message="모든 시스템이 정상 작동 중입니다."
/>

{{-- 두 번째 알림 --}}
<x-ui::alert-info 
    title="업데이트 알림" 
    message="새로운 버전이 사용 가능합니다."
/>

{{-- 세 번째 알림 --}}
<x-ui::alert-warning 
    title="백업 필요" 
    message="마지막 백업이 7일 전입니다."
/>
```

## 커스터마이징

### 커스텀 스타일
```blade
<x-ui::alert-warning 
    title="커스텀 알림" 
    message="완전히 커스터마이징된 알림입니다."
    class="my-custom-alert"
    alert-container-class="bg-gradient-to-r from-yellow-400 to-orange-400"
    icon-container-class="text-white"
    content-container-class="text-white"
    title-class="text-white font-bold"
    message-class="text-white/90"
/>
```

### 조건부 아이콘
```blade
<x-ui::alert-info 
    title="조건부 아이콘" 
    message="조건에 따라 아이콘이 표시됩니다."
    :showIcon="$showIcon"
/>
```

### 동적 타입
```blade
<x-ui::alert 
    title="동적 알림" 
    message="상태에 따라 스타일이 변경됩니다."
    :type="$status === 'success' ? 'success' : ($status === 'error' ? 'error' : 'info')"
/>
```

## 아이콘

각 알림 타입별로 고유한 아이콘이 제공됩니다:

### Success 아이콘
- **SVG 경로**: 체크마크가 있는 원형 아이콘
- **의미**: 성공, 완료, 확인

### Warning 아이콘
- **SVG 경로**: 느낌표가 있는 삼각형 아이콘
- **의미**: 경고, 주의, 주의사항

### Error 아이콘
- **SVG 경로**: X가 있는 원형 아이콘
- **의미**: 오류, 실패, 문제

### Info 아이콘
- **SVG 경로**: i가 있는 원형 아이콘
- **의미**: 정보, 안내, 도움말

## HTML 구조

### 생성되는 HTML
```html
<div class="rounded-md bg-yellow-50 p-4">
    <div class="flex">
        <div class="shrink-0">
            <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 text-yellow-400">
                <path d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495ZM10 5a.75.75 0 0 1 .75.75v3.5a.75.75 0 0 1-1.5 0v-3.5A.75.75 0 0 1 10 5Zm0 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" clip-rule="evenodd" fill-rule="evenodd" />
            </svg>
        </div>
        <div class="ml-3">
            <h3 class="text-sm font-medium text-yellow-800">Attention needed</h3>
            <div class="mt-2 text-sm text-yellow-700">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam quo totam eius aperiam dolorum.</p>
            </div>
        </div>
    </div>
</div>
``` 
