# Sidebar Component

사이드바 컴포넌트는 네비게이션 메뉴를 제공하는 UI 컴포넌트입니다.

## 기본 사용법

```blade
<x-jiny-uikit::layouts.sidebar
    theme="light"
    :menuPath="__DIR__ . '/../menus/sidebar.json'"
/>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `theme` | string | `'light'` | 테마 설정 (`light`, `dark`, `blue`) |
| `menuPath` | string | `null` | 메뉴 JSON 파일 경로 |
| `config` | array | `[]` | 추가 설정 |

## 테마 옵션

### Light Theme
- 배경: 흰색
- 텍스트: 회색
- 활성 상태: 인디고

### Dark Theme
- 배경: 어두운 회색
- 텍스트: 밝은 회색
- 활성 상태: 흰색

### Blue Theme
- 배경: 인디고
- 텍스트: 밝은 인디고
- 활성 상태: 흰색

## 메뉴 구조

JSON 파일에서 다음과 같은 구조로 메뉴를 정의할 수 있습니다:

```json
{
    "top_menu": [
        {
            "type": "title",
            "label": "MAIN NAVIGATION"
        },
        {
            "type": "menu",
            "label": "Dashboard",
            "url": "/dashboard",
            "icon": "dashboard",
            "active": true
        },
        {
            "type": "submenu",
            "label": "Team Management",
            "icon": "team",
            "children": [
                {
                    "type": "menu",
                    "label": "User List",
                    "url": "/users",
                    "active": false
                }
            ]
        }
    ],
    "teams": [
        {
            "type": "menu",
            "label": "Team A",
            "url": "/team-a",
            "icon": "T"
        }
    ],
    "bottom_menu": [
        {
            "type": "menu",
            "label": "Settings",
            "url": "/settings",
            "icon": "settings"
        }
    ]
}
```

## 메뉴 타입

### Title
제목을 표시하는 메뉴 타입입니다.

```json
{
    "type": "title",
    "label": "MAIN NAVIGATION"
}
```

### Menu
일반적인 메뉴 항목입니다.

```json
{
    "type": "menu",
    "label": "Dashboard",
    "url": "/dashboard",
    "icon": "dashboard",
    "active": false
}
```

### Submenu
하위 메뉴를 가진 드롭다운 메뉴입니다.

```json
{
    "type": "submenu",
    "label": "Team Management",
    "icon": "team",
    "children": [
        {
            "type": "menu",
            "label": "User List",
            "url": "/users"
        }
    ]
}
```

## 아이콘 시스템

아이콘은 다음 우선순위로 검색됩니다:

1. `resource_path('/icons')` - 애플리케이션의 아이콘 폴더
2. `module_dir('jiny-uikit')."/resources/icons"` - 패키지의 아이콘 폴더
3. 기본 `+` 아이콘

### 사용 가능한 아이콘들

#### 기본 아이콘
- `dashboard` - 대시보드
- `team` - 팀 관리
- `project` - 프로젝트
- `calendar` - 캘린더
- `document` - 문서
- `report` - 리포트
- `analytics` - 분석
- `performance` - 성능
- `custom-report` - 커스텀 리포트

#### UI 아이콘
- `bell` - 알림
- `mail` - 메일
- `star` - 별
- `heart` - 하트
- `search` - 검색
- `eye` - 보기
- `trash` - 삭제
- `edit` - 편집
- `plus` - 추가
- `minus` - 제거
- `check` - 확인
- `x-mark` - 취소

#### 화살표 아이콘
- `arrow-right` - 오른쪽 화살표
- `arrow-left` - 왼쪽 화살표
- `arrow-up` - 위쪽 화살표
- `arrow-down` - 아래쪽 화살표

#### 기타 아이콘
- `folder` - 폴더
- `user-group` - 사용자 그룹
- `document-text` - 문서 텍스트
- `chart` - 차트
- `lock-closed` - 잠금
- `wrench-screwdriver` - 도구
- `home` - 홈
- `users` - 사용자
- `settings` - 설정
- `chart-bar` - 차트 바

## 드롭다운 기능

서브메뉴는 체크박스 기반의 드롭다운 기능을 제공합니다:

- 클릭 시 하위 메뉴가 부드럽게 펼쳐집니다
- 체브론 아이콘이 회전합니다
- 로컬 스토리지에 상태가 저장되어 페이지 새로고침 후에도 유지됩니다

## CSS 클래스

### 컨테이너
- `.sidebar-container` - 사이드바 컨테이너
- `.dropdown-container` - 드롭다운 컨테이너

### 메뉴 항목
- `.sidebar-item` - 일반 메뉴 항목
- `.sidebar-dropdown` - 드롭다운 메뉴 항목
- `.sidebar-title` - 제목 메뉴 항목

### 상태 클래스
- `.active` - 활성 상태
- `.dropdown-open` - 드롭다운 열린 상태

## JavaScript 기능

### 로컬 스토리지
드롭다운 상태는 로컬 스토리지에 저장됩니다:
- 키: `dropdown-{id}`
- 값: `'open'` (열린 상태)

### 자동 확장
활성 메뉴가 있는 경우 해당 드롭다운이 자동으로 열립니다.

## 예제

### 기본 사이드바
```blade
<x-jiny-uikit::layouts.sidebar
    theme="light"
    :menuPath="resource_path('menus/sidebar.json')"
/>
```

### 다크 테마 사이드바
```blade
<x-jiny-uikit::layouts.sidebar
    theme="dark"
    :menuPath="resource_path('menus/sidebar.json')"
/>
```

### 블루 테마 사이드바
```blade
<x-jiny-uikit::layouts.sidebar
    theme="blue"
    :menuPath="resource_path('menus/sidebar.json')"
/>
``` 
