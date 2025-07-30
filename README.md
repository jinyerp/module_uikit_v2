# Jiny UIKit

Laravel 기반에서 Tailwind CSS로 구현된 재사용 가능한 UI 컴포넌트 라이브러리입니다. 모든 컴포넌트는 `x-ui::` 네임스페이스를 사용하여 일관된 디자인 시스템을 제공합니다.

## 특징

- 🎨 **Tailwind CSS 기반**: 모던하고 일관된 디자인
- 🔧 **Laravel Blade 컴포넌트**: 재사용 가능한 컴포넌트 시스템
- 📦 **모듈화**: 독립적인 컴포넌트 구조
- 🚀 **쉬운 확장**: 새로운 컴포넌트 추가 용이
- 📱 **반응형**: 모바일 친화적 디자인

## 설치

### 1. Composer를 통한 설치

```bash
composer require jinyerp/uikit
```

### 2. 환경 설정 및 파일 배포

```bash
# 설정 파일 게시
php artisan vendor:publish --tag=uikit-config

# 뷰 파일 게시 (선택사항)
php artisan vendor:publish --tag=uikit-views

# 마이그레이션 실행 (필요시)
php artisan migrate
```

### 3. 서비스 프로바이더 등록

`config/app.php` 파일의 `providers` 배열에 자동으로 등록됩니다:

```php
'providers' => [
    // ...
    Jiny\Uikit\JinyUikitServiceProvider::class,
],
```

## 사용법

### Blade 컴포넌트 사용

모든 UIKit 컴포넌트는 `x-ui::` 네임스페이스를 사용합니다:

```blade
<!-- 기본 사용법 -->
<x-ui::badge-primary text="Primary Badge" />
<x-ui::button-primary>클릭하세요</x-ui::button-primary>
<x-ui::form-input name="email" placeholder="이메일 입력" />
```

### 컴포넌트 힌트 (IDE 지원)

Blade 파일에서 `x-ui::`를 입력하면 사용 가능한 컴포넌트들이 자동완성됩니다:

- `x-ui::badge-*` - 배지 컴포넌트들
- `x-ui::button-*` - 버튼 컴포넌트들  
- `x-ui::form-*` - 폼 컴포넌트들
- `x-ui::table-*` - 테이블 컴포넌트들

### Badge 컴포넌트 예시

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

## 패키지 구조

```
jiny/uikit/
├── app/
│   └── View/               # 컴포넌트 클래스들
│       ├── Badge/          # 배지 컴포넌트
│       ├── Buttons/        # 버튼 컴포넌트
│       ├── Forms/          # 폼 컴포넌트
│       ├── Table/          # 테이블 컴포넌트
│       ├── Grids/          # 그리드 컴포넌트
│       ├── Popup/          # 팝업 컴포넌트
│       └── ModalAjax/      # 모달 컴포넌트
├── resources/
│   └── views/              # Blade 템플릿
│       ├── badge/
│       ├── button/
│       ├── form/
│       └── table/
├── config/
│   ├── components.php       # 컴포넌트 설정
│   └── ui.php              # UI 설정
├── routes/                  # 라우트 정의
├── docs/                    # 문서
├── tests/                   # 테스트 파일
└── JinyUikitServiceProvider.php
```

## 새로운 컴포넌트 추가

새로운 컴포넌트를 추가하려면 다음 단계를 따르세요:

### 1. View 클래스 생성

`app/View/ComponentName/ComponentName.php` 파일을 생성:

```php
<?php

namespace Jiny\Uikit\App\View\ComponentName;

use Illuminate\View\Component;

class ComponentName extends Component
{
    public $property;

    public function __construct($property = null)
    {
        $this->property = $property;
    }

    public function render()
    {
        return view('jiny-uikit::component-name.component-name');
    }
}
```

### 2. Blade 템플릿 생성

`resources/views/component-name/component-name.blade.php` 파일을 생성:

```blade
<div class="component-classes">
    {{ $slot }}
</div>
```

### 3. 설정 파일에 등록

`config/components.php` 파일에 컴포넌트를 등록:

```php
return [
    'component-name' => [
        'component-name' => \Jiny\Uikit\App\View\ComponentName\ComponentName::class,
    ],
    // 기존 컴포넌트들...
];
```

### 4. 사용법

Blade 파일에서 사용:

```blade
<x-ui::component-name property="value">
    컴포넌트 내용
</x-ui::component-name>
```

## 네임스페이스

모든 UIKit 컴포넌트는 `x-ui::` 네임스페이스를 사용합니다:

- 등록: `x-ui::component-name`
- 사용: `<x-ui::component-name>`

이렇게 하면 다른 패키지와의 충돌을 방지하고 일관된 네이밍을 유지할 수 있습니다.

## 설정

### 컴포넌트 설정

`config/components.php` 파일에서 컴포넌트를 관리할 수 있습니다:

```php
return [
    'badge' => [
        'badge-primary' => \Jiny\Uikit\App\View\Badge\BadgePrimary::class,
        'badge-danger' => \Jiny\Uikit\App\View\Badge\BadgeDanger::class,
        // ...
    ],
    'button' => [
        'button-primary' => \Jiny\Uikit\App\View\Buttons\ButtonPrimary::class,
        'button-secondary' => \Jiny\Uikit\App\View\Buttons\ButtonSecondary::class,
        // ...
    ],
];
```

### UI 설정

`config/ui.php` 파일에서 UI 관련 설정을 관리할 수 있습니다:

```php
return [
    'theme' => [
        'primary_color' => '#1E40AF',
        'secondary_color' => '#64748B',
        // ...
    ],
];
```

## 라이선스

이 프로젝트는 MIT 라이선스 하에 배포됩니다. 자세한 내용은 [LICENSE](LICENSE) 파일을 참조하세요.

## 기여하기

1. 이 저장소를 포크합니다
2. 기능 브랜치를 생성합니다 (`git checkout -b feature/amazing-feature`)
3. 변경사항을 커밋합니다 (`git commit -m 'Add some amazing feature'`)
4. 브랜치에 푸시합니다 (`git push origin feature/amazing-feature`)
5. Pull Request를 생성합니다

## 지원

문제가 발생하거나 질문이 있으시면 [Issues](https://github.com/jinyerp/uikit/issues) 페이지에서 문의해 주세요.

## 변경사항

최신 변경사항은 [CHANGELOG.md](CHANGELOG.md) 파일을 참조하세요. 
