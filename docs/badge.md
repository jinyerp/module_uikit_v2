# Badge 컴포넌트

UIKit 모듈의 Badge 컴포넌트는 다양한 색상과 스타일의 배지를 제공합니다. 모든 UIKit 컴포넌트는 `ui::` 네임스페이스를 사용합니다.

## 사용법

### 기본 사용법

```blade
<!-- Primary Badge -->
<x-ui::badge-primary text="Primary Badge" />

<!-- Danger Badge -->
<x-ui::badge-danger text="Danger Badge" />

<!-- Warning Badge -->
<x-ui::badge-warning text="Warning Badge" />

<!-- Success Badge -->
<x-ui::badge-success text="Success Badge" />

<!-- Info Badge -->
<x-ui::badge-info text="Info Badge" />

<!-- Indigo Badge -->
<x-ui::badge-indigo text="Indigo Badge" />

<!-- Purple Badge -->
<x-ui::badge-purple text="Purple Badge" />

<!-- Pink Badge -->
<x-ui::badge-pink text="Pink Badge" />
```

### 슬롯 사용법

```blade
<!-- 텍스트 대신 슬롯 사용 -->
<x-ui::badge-primary>
    <i class="fas fa-check"></i> 완료
</x-ui::badge-primary>
```

### 추가 클래스 적용

```blade
<!-- 추가 CSS 클래스 적용 -->
<x-ui::badge-success text="성공" class="ml-2" />
```

## 사용 가능한 Badge 타입

1. **Primary** (`x-ui::badge-primary`) - 기본 회색 배지
2. **Danger** (`x-ui::badge-danger`) - 빨간색 배지 (오류, 삭제 등)
3. **Warning** (`x-ui::badge-warning`) - 노란색 배지 (경고)
4. **Success** (`x-ui::badge-success`) - 초록색 배지 (성공, 완료)
5. **Info** (`x-ui::badge-info`) - 파란색 배지 (정보)
6. **Indigo** (`x-ui::badge-indigo`) - 인디고 배지
7. **Purple** (`x-ui::badge-purple`) - 보라색 배지
8. **Pink** (`x-ui::badge-pink`) - 분홍색 배지

## 컴포넌트 등록

UIKit 컴포넌트는 설정 파일을 통해 관리됩니다:

```php
// config/uikit-components.php
return [
    'badge' => [
        'badge-primary' => \Jiny\Uikit\View\Badge\BadgePrimary::class,
        'badge-danger' => \Jiny\Uikit\View\Badge\BadgeDanger::class,
        // ... 기타 Badge 컴포넌트들
    ],
];
```

설정 파일을 게시하려면:

```bash
php artisan vendor:publish --tag=uikit-config
```

## 스타일

모든 Badge 컴포넌트는 Tailwind CSS 클래스를 사용하여 스타일링됩니다:

- `inline-flex items-center` - 인라인 플렉스 레이아웃
- `rounded-md` - 둥근 모서리
- `px-2 py-1` - 패딩
- `text-xs font-medium` - 작은 텍스트 크기와 중간 굵기
- 각 타입별 고유한 배경색과 텍스트 색상
- `ring-1` - 테두리 효과 
