# UIkit 레이아웃 업데이트

## 개요

UIkit 문서 레이아웃을 Tailwind CSS의 최신 사이드바 패턴으로 업데이트했습니다. 이 업데이트는 모바일 반응형과 데스크톱 사이드바를 모두 지원하는 구조로 변경되었습니다.

## 주요 변경사항

### 1. 레이아웃 구조 개선

- **모바일 오프캔버스 메뉴**: 모바일에서 사이드바가 오프캔버스로 표시됩니다.
- **데스크톱 고정 사이드바**: 데스크톱에서는 고정된 사이드바가 표시됩니다.
- **반응형 헤더**: 모바일에서 햄버거 메뉴와 페이지 제목이 표시됩니다.

### 2. 새로운 헤딩 섹션

- **브레드크럼 네비게이션**: 페이지 경로를 명확하게 표시합니다.
- **페이지 제목과 설명**: 더 명확한 페이지 정보를 제공합니다.
- **액션 버튼**: GitHub 링크와 목록으로 돌아가기 버튼을 포함합니다.

### 3. 사이드바 디자인 개선

- **다크 테마**: 사이드바가 다크 테마로 변경되었습니다.
- **아이콘 추가**: 각 메뉴 항목에 적절한 아이콘이 추가되었습니다.
- **활성 상태 표시**: 현재 페이지가 명확하게 표시됩니다.

## 파일 변경사항

### `jiny/uikit/resources/views/layouts/docs.blade.php`

```html
<!-- 새로운 레이아웃 구조 -->
<html lang="ko" class="h-full bg-white">
<body class="h-full">
    <div>
        <!-- 모바일 오프캔버스 메뉴 -->
        <div role="dialog" aria-modal="true" class="relative z-50 lg:hidden">
            <!-- 사이드바 내용 -->
        </div>

        <!-- 데스크톱 고정 사이드바 -->
        <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
            <!-- 사이드바 내용 -->
        </div>

        <!-- 모바일 헤더 -->
        <div class="sticky top-0 z-40 flex items-center gap-x-6 bg-gray-900 px-4 py-4 shadow-xs sm:px-6 lg:hidden">
            <!-- 햄버거 메뉴와 페이지 제목 -->
        </div>

        <!-- 메인 콘텐츠 -->
        <main class="py-10 lg:pl-72">
            <div class="px-4 sm:px-6 lg:px-8">
                @yield('heading')
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
```

### `jiny/uikit/resources/views/samples/form-input.blade.php`

```php
@section('heading')
    <div>
        <!-- 모바일 뒤로가기 -->
        <nav aria-label="Back" class="sm:hidden">
            <!-- 뒤로가기 링크 -->
        </nav>

        <!-- 데스크톱 브레드크럼 -->
        <nav aria-label="Breadcrumb" class="hidden sm:flex">
            <!-- 브레드크럼 네비게이션 -->
        </nav>

        <!-- 페이지 제목과 액션 -->
        <div class="mt-2 md:flex md:items-center md:justify-between">
            <!-- 페이지 제목과 설명 -->
            <!-- 액션 버튼들 -->
        </div>
    </div>
@endsection
```

## 사용법

### 새로운 헤딩 섹션 추가

각 페이지에서 `@section('heading')`을 사용하여 헤딩을 정의할 수 있습니다:

```php
@section('heading')
    <div>
        <div>
            <!-- 브레드크럼 네비게이션 -->
        </div>
        <div class="mt-2 md:flex md:items-center md:justify-between">
            <div class="min-w-0 flex-1">
                <h2 class="text-2xl/7 font-bold text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                    페이지 제목
                </h2>
                <p class="text-sm text-gray-500 mt-1">페이지 설명</p>
            </div>
            <div class="mt-4 flex shrink-0 md:mt-0 md:ml-4">
                <!-- 액션 버튼들 -->
            </div>
        </div>
    </div>
@endsection
```

## 장점

1. **향상된 사용자 경험**: 모바일과 데스크톱에서 모두 최적화된 경험을 제공합니다.
2. **명확한 네비게이션**: 브레드크럼과 사이드바로 명확한 네비게이션을 제공합니다.
3. **일관된 디자인**: Tailwind CSS의 최신 패턴을 따르는 일관된 디자인입니다.
4. **접근성 개선**: ARIA 속성과 키보드 네비게이션을 지원합니다.

## 향후 계획

- 다른 UIkit 페이지들에도 동일한 헤딩 패턴 적용
- 사이드바 메뉴 구조 개선
- 추가적인 반응형 기능 구현 
