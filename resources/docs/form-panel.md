# Form Panel 컴포넌트

`x-ui::form-panel` 컴포넌트는 정보를 표시하고 액션을 제공하는 패널을 생성합니다.

## 기본 사용법

```blade
<x-ui::form-panel 
    title="Need more bandwidth?" 
    description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus praesentium tenetur pariatur."
    buttonText="Contact sales"
/>
```

## 속성

### 선택 속성

| 속성 | 타입 | 기본값 | 설명 |
|------|------|--------|------|
| `title` | string | null | 패널의 제목 |
| `description` | string | null | 패널의 설명 텍스트 |
| `buttonText` | string | null | 버튼 텍스트 |
| `buttonAction` | string | null | 버튼 클릭 시 실행할 액션 |
| `variant` | string | 'default' | 패널 스타일 (default, success, warning, error, info) |

## 사용 예시

### 기본 패널
```blade
<x-ui::form-panel 
    title="Need more bandwidth?" 
    description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus praesentium tenetur pariatur."
    buttonText="Contact sales"
/>
```

### 성공 패널
```blade
<x-ui::form-panel 
    title="업그레이드 완료!" 
    description="프리미엄 플랜으로 성공적으로 업그레이드되었습니다."
    buttonText="새로운 기능 확인"
    variant="success"
/>
```

### 경고 패널
```blade
<x-ui::form-panel 
    title="저장 공간 부족" 
    description="저장 공간이 90% 이상 사용되었습니다. 불필요한 파일을 정리해주세요."
    buttonText="정리 도구 실행"
    variant="warning"
/>
```

### 오류 패널
```blade
<x-ui::form-panel 
    title="연결 오류" 
    description="서버에 연결할 수 없습니다. 인터넷 연결을 확인해주세요."
    buttonText="다시 시도"
    variant="error"
/>
```

### 정보 패널
```blade
<x-ui::form-panel 
    title="새로운 기능" 
    description="새로운 분석 도구가 추가되었습니다. 더 정확한 인사이트를 얻을 수 있습니다."
    buttonText="자세히 보기"
    variant="info"
/>
```

### 슬롯을 사용한 커스텀 내용
```blade
<x-ui::form-panel title="커스텀 패널">
    <div class="mt-4">
        <p class="text-sm text-gray-600">슬롯을 사용하여 커스텀 내용을 추가할 수 있습니다.</p>
        <div class="mt-3 flex space-x-3">
            <button class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm">액션 1</button>
            <button class="bg-gray-600 text-white px-4 py-2 rounded-md text-sm">액션 2</button>
        </div>
    </div>
</x-ui::form-panel>
```

## 고급 사용법

### 커스텀 클래스
```blade
<x-ui::form-panel 
    title="커스텀 스타일" 
    description="커스텀 클래스를 적용한 패널입니다."
    buttonText="확인"
    class="custom-panel"
    panel-container-class="custom-bg"
    panel-inner-class="custom-padding"
    title-class="custom-title"
    description-class="custom-description"
    button-class="custom-button"
/>
```

### 데이터 속성 추가
```blade
<x-ui::form-panel 
    title="분석 패널" 
    description="사용자 행동 분석 결과입니다."
    buttonText="보고서 보기"
    panel-container-data-analytics="true"
    panel-container-data-category="user-behavior"
    button-data-action="view-report"
/>
```

### 조건부 렌더링
```blade
@if($user->needsUpgrade())
    <x-ui::form-panel 
        title="업그레이드 권장" 
        description="더 많은 기능을 사용하려면 업그레이드하세요."
        buttonText="업그레이드"
        variant="info"
    />
@endif
```

### 동적 내용
```blade
<x-ui::form-panel 
    title="{{ $notification->title }}" 
    description="{{ $notification->message }}"
    buttonText="{{ $notification->action_text }}"
    variant="{{ $notification->type }}"
/>
```

## 변형 옵션

### Default (기본)
```blade
<x-ui::form-panel 
    title="기본 패널" 
    description="기본 스타일의 패널입니다."
    buttonText="확인"
/>
```

### Success (성공)
```blade
<x-ui::form-panel 
    title="성공!" 
    description="작업이 성공적으로 완료되었습니다."
    buttonText="계속"
    variant="success"
/>
```

### Warning (경고)
```blade
<x-ui::form-panel 
    title="주의" 
    description="주의가 필요한 상황입니다."
    buttonText="확인"
    variant="warning"
/>
```

### Error (오류)
```blade
<x-ui::form-panel 
    title="오류 발생" 
    description="문제가 발생했습니다. 다시 시도해주세요."
    buttonText="다시 시도"
    variant="error"
/>
```

### Info (정보)
```blade
<x-ui::form-panel 
    title="정보" 
    description="유용한 정보를 확인하세요."
    buttonText="자세히 보기"
    variant="info"
/>
```

## 스타일링

### 기본 스타일
- **배경**: `bg-gray-50` (기본), `bg-green-50` (성공), `bg-yellow-50` (경고), `bg-red-50` (오류), `bg-blue-50` (정보)
- **둥근 모서리**: `sm:rounded-lg`
- **패딩**: `px-4 py-5 sm:p-6`
- **제목**: `text-base font-semibold text-gray-900`
- **설명**: `mt-2 max-w-xl text-sm text-gray-500`
- **버튼**: `inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs ring-1 ring-gray-300 ring-inset hover:bg-gray-50`

### 변형별 색상

#### Default
- **배경**: `bg-gray-50`
- **제목**: `text-gray-900`
- **설명**: `text-gray-500`
- **버튼**: `bg-white text-gray-900`

#### Success
- **배경**: `bg-green-50`
- **제목**: `text-green-900`
- **설명**: `text-green-700`
- **버튼**: `bg-green-600 text-white`

#### Warning
- **배경**: `bg-yellow-50`
- **제목**: `text-yellow-900`
- **설명**: `text-yellow-700`
- **버튼**: `bg-yellow-600 text-white`

#### Error
- **배경**: `bg-red-50`
- **제목**: `text-red-900`
- **설명**: `text-red-700`
- **버튼**: `bg-red-600 text-white`

#### Info
- **배경**: `bg-blue-50`
- **제목**: `text-blue-900`
- **설명**: `text-blue-700`
- **버튼**: `bg-blue-600 text-white`

## 접근성

컴포넌트는 다음과 같은 접근성 기능을 제공합니다:

- **의미적 마크업**: `h3` 태그를 사용한 제목 구조
- **색상 대비**: 충분한 색상 대비로 가독성 확보
- **키보드 네비게이션**: 버튼에 대한 키보드 접근성
- **포커스 표시**: 포커스 상태의 명확한 시각적 표시

## 반응형 디자인

컴포넌트는 반응형 디자인을 지원합니다:

- **모바일**: 기본 패딩 (`px-4 py-5`)
- **태블릿 이상**: 더 큰 패딩 (`sm:p-6`)
- **둥근 모서리**: 작은 화면에서는 제한적, 큰 화면에서는 완전한 둥근 모서리

## JavaScript 상호작용

패널의 버튼에 JavaScript 이벤트를 추가할 수 있습니다:

```blade
<x-ui::form-panel 
    title="JavaScript 패널" 
    description="버튼 클릭 시 JavaScript 함수가 실행됩니다."
    buttonText="실행"
    button-onclick="handlePanelAction()"
/>
```

```javascript
function handlePanelAction() {
    console.log('패널 액션이 실행되었습니다');
    // 추가 로직 구현
}
```

## 다중 패널 사용

페이지에 여러 패널을 사용할 수 있습니다:

```blade
{{-- 첫 번째 패널 --}}
<x-ui::form-panel 
    title="시스템 상태" 
    description="모든 시스템이 정상 작동 중입니다."
    buttonText="상세 보기"
    variant="success"
/>

{{-- 두 번째 패널 --}}
<x-ui::form-panel 
    title="업데이트 알림" 
    description="새로운 버전이 사용 가능합니다."
    buttonText="업데이트"
    variant="info"
/>

{{-- 세 번째 패널 --}}
<x-ui::form-panel 
    title="백업 필요" 
    description="마지막 백업이 7일 전입니다."
    buttonText="백업 실행"
    variant="warning"
/>
```

## 커스터마이징

### 커스텀 스타일
```blade
<x-ui::form-panel 
    title="커스텀 패널" 
    description="완전히 커스터마이징된 패널입니다."
    buttonText="확인"
    class="my-custom-panel"
    panel-container-class="bg-gradient-to-r from-purple-500 to-pink-500"
    panel-inner-class="p-8"
    title-class="text-2xl font-bold text-white"
    description-class="text-white/90"
    button-class="bg-white text-purple-600 hover:bg-gray-100"
/>
```

### 조건부 버튼
```blade
<x-ui::form-panel 
    title="조건부 패널" 
    description="조건에 따라 버튼이 표시됩니다."
    :buttonText="$showButton ? '확인' : null"
/>
```

### 동적 변형
```blade
<x-ui::form-panel 
    title="동적 패널" 
    description="상태에 따라 스타일이 변경됩니다."
    buttonText="확인"
    :variant="$status === 'success' ? 'success' : ($status === 'error' ? 'error' : 'default')"
/>
``` 
