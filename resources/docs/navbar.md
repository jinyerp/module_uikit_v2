# Navbar Component

Navbar 컴포넌트는 상단 네비게이션 바를 제공하는 UI 컴포넌트입니다. Light, Dark, Blue 세 가지 테마를 지원하며, 하나의 통합된 Blade 파일에서 색상 스키마를 매개변수로 처리합니다.

## 기본 사용법

```blade
<x-jiny-uikit::layouts.navbar />
```

## 테마 지원

### Light 테마 (기본값)
```blade
<x-jiny-uikit::layouts.navbar theme="light" />
```

### Dark 테마
```blade
<x-jiny-uikit::layouts.navbar theme="dark" />
```

### Blue 테마
```blade
<x-jiny-uikit::layouts.navbar theme="blue" />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `theme` | string | `'light'` | 테마 선택 (light, dark, blue) |
| `logo` | string | 테마별 기본값 | 로고 이미지 URL |
| `logoAlt` | string | `'Your Company'` | 로고 대체 텍스트 |
| `navItems` | array | `[]` | 네비게이션 아이템 배열 |
| `userName` | string | `'Tom Cook'` | 사용자 이름 |
| `userEmail` | string | `'tom@example.com'` | 사용자 이메일 |
| `userAvatar` | string | Unsplash 이미지 | 사용자 아바타 URL |
| `showNotifications` | boolean | `true` | 알림 버튼 표시 여부 |
| `showMobileMenu` | boolean | `true` | 모바일 메뉴 표시 여부 |

## 테마별 특징

### Light 테마
- 흰색 배경 (`bg-white`)
- 회색 테두리 (`border-gray-200`)
- 인디고 강조색 (`text-indigo-600`)
- 로고 색상: `?color=indigo&shade=600`

### Dark 테마
- 어두운 회색 배경 (`bg-gray-800`)
- 흰색 텍스트 (`text-white`)
- 회색 호버 효과 (`hover:bg-gray-700`)
- 로고 색상: `?color=indigo&shade=500`

### Blue 테마
- 인디고 블루 배경 (`bg-indigo-600`)
- 흰색 텍스트 (`text-white`)
- 인디고 호버 효과 (`hover:bg-indigo-500/75`)
- 로고 색상: `?color=indigo&shade=300`

## 사용 예제

### 기본 Navbar
```blade
<x-jiny-uikit::layouts.navbar />
```

### 테마 지정
```blade
<x-jiny-uikit::layouts.navbar theme="dark" />
```

### 커스텀 네비게이션 아이템
```blade
<x-jiny-uikit::layouts.navbar 
    theme="light"
    :navItems="[
        ['label' => '홈', 'url' => '/', 'active' => true],
        ['label' => '사용자', 'url' => '/users', 'active' => false],
        ['label' => '설정', 'url' => '/settings', 'active' => false]
    ]"
/>
```

### 커스텀 사용자 정보
```blade
<x-jiny-uikit::layouts.navbar 
    theme="dark"
    userName="김철수"
    userEmail="kim@example.com"
    userAvatar="https://example.com/avatar.jpg"
/>
```

### 커스텀 로고
```blade
<x-jiny-uikit::layouts.navbar 
    theme="blue"
    logo="https://example.com/logo.svg"
    logoAlt="회사 로고"
/>
```

## 네비게이션 아이템 구조

각 네비게이션 아이템은 다음 속성을 가집니다:

```php
[
    'label' => '메뉴 라벨',     // 필수
    'url' => '/link-url',      // 선택 (기본값: '#')
    'active' => true           // 선택 (기본값: false)
]
```

### 예시
```blade
<x-jiny-uikit::layouts.navbar 
    theme="light"
    :navItems="[
        ['label' => '대시보드', 'url' => '/dashboard', 'active' => true],
        ['label' => '팀', 'url' => '/team', 'active' => false],
        ['label' => '프로젝트', 'url' => '/projects', 'active' => false],
        ['label' => '캘린더', 'url' => '/calendar', 'active' => false]
    ]"
/>
```

## 기능 제어

### 알림 버튼 비활성화
```blade
<x-jiny-uikit::layouts.navbar theme="light" :showNotifications="false" />
```

### 모바일 메뉴 비활성화
```blade
<x-jiny-uikit::layouts.navbar theme="dark" :showMobileMenu="false" />
```

### 모든 기능 비활성화
```blade
<x-jiny-uikit::layouts.navbar 
    theme="blue"
    :showNotifications="false"
    :showMobileMenu="false"
/>
```

## 반응형 디자인

### 데스크톱
- 로고와 네비게이션 메뉴가 가로로 배치
- 사용자 프로필과 알림 버튼이 오른쪽에 배치
- 네비게이션 아이템이 하단 테두리로 활성 상태 표시

### 모바일
- 햄버거 메뉴 버튼으로 모바일 메뉴 토글
- 사용자 정보가 모바일 메뉴 내에 표시
- 세로 스택 레이아웃으로 메뉴 아이템 배치

## 통합된 컴포넌트

Navbar 컴포넌트는 다음 컴포넌트들을 통합하여 사용합니다:

### Avatar 컴포넌트
```blade
<x-jiny-uikit::avatar src="{{ $userAvatar }}" alt="{{ $userName }}" size="size-8" />
```

### Icon 컴포넌트
```blade
<x-jiny-uikit::icon name="bell" class="size-6" />
```

## 접근성

### 키보드 네비게이션
- 모든 인터랙티브 요소가 키보드로 접근 가능
- 포커스 표시가 명확하게 제공

### 스크린 리더 지원
- 적절한 `aria-*` 속성 제공
- 의미있는 alt 텍스트 사용

### 색상 대비
- WCAG AA 기준을 충족하는 색상 대비
- 호버 및 포커스 상태의 명확한 시각적 피드백

## 고급 예시

### 동적 네비게이션 아이템
```blade
@php
    $navItems = [
        ['label' => '대시보드', 'url' => '/dashboard', 'active' => request()->is('dashboard*')],
        ['label' => '사용자', 'url' => '/users', 'active' => request()->is('users*')],
        ['label' => '설정', 'url' => '/settings', 'active' => request()->is('settings*')],
    ];
@endphp

<x-jiny-uikit::layouts.navbar theme="light" :navItems="$navItems" />
```

### 인증된 사용자 정보
```blade
<x-jiny-uikit::layouts.navbar 
    theme="dark"
    userName="{{ auth()->user()->name }}"
    userEmail="{{ auth()->user()->email }}"
    userAvatar="{{ auth()->user()->avatar }}"
/>
```

### 조건부 알림 표시
```blade
<x-jiny-uikit::layouts.navbar 
    theme="blue"
    :showNotifications="auth()->user()->hasUnreadNotifications()"
/>
```

## 스타일링

### 기본 스타일
- Tailwind CSS 기반 디자인
- 반응형 레이아웃
- 부드러운 전환 애니메이션
- 테마별 자동 색상 조정

### 커스텀 스타일링
컴포넌트 자체는 제한적인 커스터마이징을 제공하지만, 필요에 따라 CSS 오버라이드를 사용할 수 있습니다:

```css
/* 네비게이션 바 배경색 변경 */
.navbar {
    @apply bg-blue-600;
}

/* 로고 크기 조정 */
.navbar img {
    @apply h-10 w-auto;
}
```

## 실제 사용 예시

### 관리자 대시보드
```blade
<x-jiny-uikit::layouts.navbar 
    theme="dark"
    :navItems="[
        ['label' => '대시보드', 'url' => '/admin', 'active' => true],
        ['label' => '사용자 관리', 'url' => '/admin/users', 'active' => false],
        ['label' => '설정', 'url' => '/admin/settings', 'active' => false],
        ['label' => '로그', 'url' => '/admin/logs', 'active' => false]
    ]"
    userName="{{ auth()->user()->name }}"
    userEmail="{{ auth()->user()->email }}"
/>
```

### 이커머스 사이트
```blade
<x-jiny-uikit::layouts.navbar 
    theme="light"
    logo="/images/logo.svg"
    logoAlt="쇼핑몰 로고"
    :navItems="[
        ['label' => '홈', 'url' => '/', 'active' => true],
        ['label' => '상품', 'url' => '/products', 'active' => false],
        ['label' => '장바구니', 'url' => '/cart', 'active' => false],
        ['label' => '마이페이지', 'url' => '/mypage', 'active' => false]
    ]"
    userName="{{ auth()->user()->name }}"
    userEmail="{{ auth()->user()->email }}"
/>
```

### 블로그 사이트
```blade
<x-jiny-uikit::layouts.navbar 
    theme="blue"
    :navItems="[
        ['label' => '홈', 'url' => '/', 'active' => true],
        ['label' => '글쓰기', 'url' => '/write', 'active' => false],
        ['label' => '카테고리', 'url' => '/categories', 'active' => false],
        ['label' => '태그', 'url' => '/tags', 'active' => false]
    ]"
    userName="{{ auth()->user()->name }}"
    userEmail="{{ auth()->user()->email }}"
    :showNotifications="false"
/>
```

## 컴포넌트 구조

```
jiny/uikit/
├── app/View/Layouts/
│   └── Navbar.php                    # 메인 컴포넌트 클래스
├── resources/views/components/layouts/stacked/
│   └── navbar.blade.php              # 통합된 뷰 (색상 스키마 매개변수 사용)
└── config/
    └── components.php                 # 컴포넌트 등록
```

## 색상 스키마 시스템

Navbar 컴포넌트는 `SidebarMenu.php`와 동일한 패턴의 색상 스키마 시스템을 사용합니다:

```php
private function getThemeColors($theme)
{
    $colorSchemes = [
        'light' => [
            'nav_bg' => 'bg-white',
            'nav_border' => 'border-b border-gray-200',
            'active_bg' => 'bg-indigo-50',
            'active_text' => 'text-indigo-700',
            // ... 기타 색상 정의
        ],
        'dark' => [
            'nav_bg' => 'bg-gray-800',
            'nav_border' => '',
            'active_bg' => 'bg-gray-900',
            'active_text' => 'text-white',
            // ... 기타 색상 정의
        ],
        'blue' => [
            'nav_bg' => 'bg-indigo-600',
            'nav_border' => '',
            'active_bg' => 'bg-indigo-700',
            'active_text' => 'text-white',
            // ... 기타 색상 정의
        ]
    ];

    return $colorSchemes[$theme] ?? $colorSchemes['light'];
}
```

## 사용법 요약

```blade
{{-- 기본 사용 (Light 테마) --}}
<x-jiny-uikit::layouts.navbar />

{{-- 테마 지정 --}}
<x-jiny-uikit::layouts.navbar theme="dark" />
<x-jiny-uikit::layouts.navbar theme="blue" />

{{-- 커스텀 속성 --}}
<x-jiny-uikit::layouts.navbar
    theme="light"
    :navItems="[['label' => '홈', 'url' => '/', 'active' => true]]"
    userName="사용자명"
    userEmail="user@example.com"
    :showNotifications="false"
    :showMobileMenu="true"
/>
```

## 개선 사항

### 이전 구조 (개선 전)
- 각 테마별로 별도의 Blade 파일 (`light.blade.php`, `dark.blade.php`, `blue.blade.php`)
- 중복된 HTML 구조
- 유지보수 어려움

### 현재 구조 (개선 후)
- 하나의 통합된 Blade 파일 (`navbar.blade.php`)
- 색상 스키마를 매개변수로 처리
- `SidebarMenu.php`와 동일한 패턴
- 유지보수 용이성 향상
- 코드 중복 제거 
