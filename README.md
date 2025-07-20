# Jiny UIKit

Laravel용 UIKit 컴포넌트 라이브러리입니다. 모든 컴포넌트는 `ui::` 네임스페이스를 사용합니다.

## 설치

```bash
# 패키지 설치 후 설정 파일 게시
php artisan vendor:publish --tag=uikit-config
```

## 사용법

### Badge 컴포넌트

```blade
<!-- 기본 사용법 -->
<x-ui::badge-primary text="Primary Badge" />
<x-ui::badge-danger text="Danger Badge" />
<x-ui::badge-success text="Success Badge" />

<!-- 슬롯 사용법 -->
<x-ui::badge-primary>
    <i class="fas fa-check"></i> 완료
</x-ui::badge-primary>

<!-- 추가 클래스 적용 -->
<x-ui::badge-success text="성공" class="ml-2" />
```

### 사용 가능한 Badge 타입

- `x-ui::badge-primary` - 기본 회색 배지
- `x-ui::badge-danger` - 빨간색 배지 (오류, 삭제 등)
- `x-ui::badge-warning` - 노란색 배지 (경고)
- `x-ui::badge-success` - 초록색 배지 (성공, 완료)
- `x-ui::badge-info` - 파란색 배지 (정보)
- `x-ui::badge-indigo` - 인디고 배지
- `x-ui::badge-purple` - 보라색 배지
- `x-ui::badge-pink` - 분홍색 배지

## 컴포넌트 추가

새로운 컴포넌트를 추가하려면:

1. **View 클래스 생성** (`View/ComponentName/ComponentName.php`)
2. **Blade 템플릿 생성** (`resources/views/component-name/component-name.blade.php`)
3. **설정 파일에 등록** (`config/components.php`)

```php
// config/components.php
return [
    'badge' => [
        // 기존 Badge 컴포넌트들...
    ],
    'button' => [
        'button-primary' => \Jiny\Uikit\View\Button\ButtonPrimary::class,
        'button-secondary' => \Jiny\Uikit\View\Button\ButtonSecondary::class,
    ],
];
```

## 구조

```
jiny/uikit/
├── View/                    # 컴포넌트 클래스들
│   └── Badge/
│       ├── BadgePrimary.php
│       ├── BadgeDanger.php
│       └── ...
├── resources/
│   └── views/
│       └── badge/
│           └── badge.blade.php
├── config/
│   └── components.php       # 컴포넌트 설정
├── docs/                    # 문서
└── JinyUikitServiceProvider.php
```

## 네임스페이스

모든 UIKit 컴포넌트는 `ui::` 네임스페이스를 사용합니다:

- 등록: `ui::component-name`
- 사용: `<x-ui::component-name>`

이렇게 하면 다른 패키지와의 충돌을 방지하고 일관된 네이밍을 유지할 수 있습니다. 
