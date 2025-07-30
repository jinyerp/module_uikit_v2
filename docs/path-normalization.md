# 경로 정규화 시스템

## 개요

운영체제별로 다른 경로 구분자(`/`와 `\`)를 처리하기 위한 경로 정규화 시스템을 구현했습니다.

## 문제점

이미지에서 보이는 오류처럼, 외부에서 메뉴 JSON 경로를 추가할 때 운영체제별로 다른 구분자를 사용하여 파일을 찾을 수 없는 문제가 발생했습니다.

```
지정한 파일을 찾을 수 없습니다
경로: ject\jiny\jiny_auth_server3\jiny\uikit/menus/sic with-dropdown.json
```

## 해결책

### 1. PathHelper 클래스 생성

`jiny/uikit/app/Helpers/PathHelper.php`에 경로 정규화를 위한 헬퍼 클래스를 생성했습니다.

#### 주요 메서드

- `normalizePath($path)`: 경로 구분자를 현재 운영체제에 맞게 정규화
- `isAbsolutePath($path)`: 절대 경로인지 확인
- `resolveRelativePath($path)`: 상대 경로를 절대 경로로 변환
- `isValidPath($path)`: 경로가 유효한지 확인
- `combine(...$parts)`: 경로를 안전하게 조합
- `isUrlMatch($menuUrl, $currentUrl)`: URL 매칭 확인

### 2. UISidebarMenuService 수정

`jiny/uikit/app/Services/UISidebarMenuService.php`에서 `PathHelper`를 사용하도록 수정했습니다.

```php
use Jiny\Uikit\App\Helpers\PathHelper;

public function __construct($menuPath = null)
{
    $this->menuPath = PathHelper::normalizePath($menuPath ?? __DIR__ . '/../../../resources/menus/sidebar.json');
    $this->loadMenuData();
}
```

### 3. SidebarMenu 컴포넌트 수정

`jiny/uikit/app/View/Layouts/SidebarMenu.php`에서도 `PathHelper`를 사용하도록 수정했습니다.

```php
use Jiny\Uikit\App\Helpers\PathHelper;

public function __construct($theme = 'light', $config = [], $menuPath = null)
{
    $this->theme = $theme;
    $this->config = $config;
    $this->menuPath = PathHelper::normalizePath($menuPath);
    // ...
}
```

## 기능

### 경로 정규화

- Windows: `C:\Project\app\config` → `C:\Project\app\config`
- Unix/Linux: `/var/www/html/app` → `/var/www/html/app`
- 혼재된 구분자: `C:\Project/app\config` → `C:\Project\app\config`

### 경로 조합

```php
$path = PathHelper::combine('app', 'config', 'database.php');
// 결과: app/config/database.php (Unix) 또는 app\config\database.php (Windows)
```

### URL 매칭

```php
$isMatch = PathHelper::isUrlMatch('/admin/*', '/admin/users');
// 결과: true

$isMatch = PathHelper::isUrlMatch('/admin/*', '/dashboard');
// 결과: false
```

## 테스트

`jiny/uikit/app/Helpers/PathHelperTest.php`에서 모든 기능을 테스트할 수 있습니다.

```bash
php jiny/uikit/app/Helpers/PathHelperTest.php
```

## 사용 예제

```php
use Jiny\Uikit\App\Helpers\PathHelper;

// 경로 정규화
$normalizedPath = PathHelper::normalizePath('C:\\Project/app\\config');

// 경로 조합
$combinedPath = PathHelper::combine('resources', 'menus', 'sidebar.json');

// 절대 경로 확인
$isAbsolute = PathHelper::isAbsolutePath('/var/www/html');

// URL 매칭
$isMatch = PathHelper::isUrlMatch('/admin/*', '/admin/users');
```

## 장점

1. **크로스 플랫폼 호환성**: Windows, Linux, macOS에서 동일하게 작동
2. **안전성**: 경로 유효성 검사 및 보안 문자 필터링
3. **재사용성**: 다른 컴포넌트에서도 사용 가능
4. **일관성**: 모든 경로 처리가 동일한 방식으로 처리됨

## 적용된 파일

- `jiny/uikit/app/Helpers/PathHelper.php` (신규)
- `jiny/uikit/app/Services/UISidebarMenuService.php` (수정)
- `jiny/uikit/app/View/Layouts/SidebarMenu.php` (수정)
- `jiny/uikit/app/Helpers/PathHelperTest.php` (신규)
- `jiny/uikit/docs/path-normalization.md` (신규) 
