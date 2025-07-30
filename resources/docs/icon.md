# Icon Component

아이콘 컴포넌트는 SVG 아이콘을 표시하는 UI 컴포넌트입니다.

## 기본 사용법

```blade
<x-jiny-uikit::icon name="dashboard" />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `name` | string | `null` | 아이콘 이름 |
| `size` | string | `'w-5 h-5'` | 아이콘 크기 (Tailwind CSS 클래스) |
| `class` | string | `''` | 추가 CSS 클래스 |

## 아이콘 검색 우선순위

아이콘은 다음 순서로 검색됩니다:

1. **애플리케이션 아이콘**: `resource_path('/icons')`
2. **패키지 아이콘**: `module_dir('jiny-uikit')."/resources/icons"`
3. **기본 아이콘**: `+` 아이콘 (아이콘을 찾을 수 없는 경우)

## 사용 예제

### 기본 아이콘
```blade
<x-jiny-uikit::icon name="dashboard" />
```

### 크기 지정
```blade
<x-jiny-uikit::icon name="dashboard" size="w-6 h-6" />
```

### 추가 클래스
```blade
<x-jiny-uikit::icon name="dashboard" class="text-blue-500" />
```

### 모든 속성 조합
```blade
<x-jiny-uikit::icon 
    name="dashboard" 
    size="w-8 h-8" 
    class="text-indigo-600 hover:text-indigo-700" 
/>
```

## 사용 가능한 아이콘들

### 기본 아이콘
- `dashboard` - 대시보드
- `team` - 팀 관리
- `project` - 프로젝트
- `calendar` - 캘린더
- `document` - 문서
- `report` - 리포트
- `analytics` - 분석
- `performance` - 성능
- `custom-report` - 커스텀 리포트

### UI 아이콘
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

### 화살표 아이콘
- `arrow-right` - 오른쪽 화살표
- `arrow-left` - 왼쪽 화살표
- `arrow-up` - 위쪽 화살표
- `arrow-down` - 아래쪽 화살표

### 기타 아이콘
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

## 아이콘 파일 구조

### 애플리케이션 아이콘
```
resources/
└── icons/
    ├── dashboard.svg
    ├── team.svg
    └── ...
```

### 패키지 아이콘
```
jiny/uikit/resources/icons/
├── dashboard.svg
├── team.svg
└── ...
```

## SVG 파일 형식

아이콘 SVG 파일은 다음과 같은 형식이어야 합니다:

```svg
<path stroke-linecap="round" stroke-linejoin="round" d="..." />
```

### 예시: dashboard.svg
```svg
<path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5L7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
```

## 커스텀 아이콘 추가

### 1. 애플리케이션에 아이콘 추가
`resources/icons/` 폴더에 SVG 파일을 추가합니다.

### 2. 패키지에 아이콘 추가
`jiny/uikit/resources/icons/` 폴더에 SVG 파일을 추가합니다.

### 3. 사용
```blade
<x-jiny-uikit::icon name="custom-icon" />
```

## 스타일링

### 기본 스타일
아이콘은 기본적으로 다음 스타일이 적용됩니다:
- `fill="none"` - 채우기 없음
- `viewBox="0 0 24 24"` - 24x24 뷰박스
- `stroke-width="1.5"` - 1.5px 선 두께
- `stroke="currentColor"` - 현재 텍스트 색상

### 색상 변경
```blade
<x-jiny-uikit::icon name="dashboard" class="text-blue-500" />
```

### 크기 변경
```blade
<x-jiny-uikit::icon name="dashboard" size="w-8 h-8" />
```

### 호버 효과
```blade
<x-jiny-uikit::icon name="dashboard" class="hover:text-blue-600 transition-colors" />
```

## 접근성

아이콘 컴포넌트는 기본적으로 `aria-hidden="true"` 속성을 포함하여 스크린 리더에서 무시됩니다. 필요한 경우 추가적인 접근성 속성을 추가할 수 있습니다:

```blade
<x-jiny-uikit::icon 
    name="dashboard" 
    aria-label="대시보드로 이동" 
    role="img" 
/>
``` 
