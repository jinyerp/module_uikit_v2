# ModuleManager 사용법

ModuleManager는 Laravel 패키지들의 루트 경로를 중앙에서 관리하는 시스템입니다. Facade 패턴을 사용하여 다른 패키지에서도 쉽게 사용할 수 있습니다.

## 설치 및 설정

### 1. 패키지 등록

각 패키지의 ServiceProvider에서 자신의 루트 경로를 등록합니다:

```php
<?php

namespace YourPackage;

use Illuminate\Support\ServiceProvider;

class YourPackageServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // 패키지 루트 경로 등록
        \Jiny\Uikit\App\Facades\Module::setDir('your-package', __DIR__);
    }
}
```

## 사용 방법

### 1. Facade 사용 (권장)

```php
use Jiny\Uikit\App\Facades\Module;

// 패키지 등록
Module::setDir('your-package', __DIR__);

// 경로 접근
$rootPath = Module::dir('your-package');
$configPath = Module::config('your-package', 'app.php');
$viewPath = Module::view('your-package', 'components/button.blade.php');
$routePath = Module::route('your-package', 'web.php');
$migrationsPath = Module::migrations('your-package');
$langPath = Module::lang('your-package');
$resourcesPath = Module::resources('your-package');
$appPath = Module::app('your-package');
$publicPath = Module::public('your-package');
$testsPath = Module::tests('your-package');
```

### 2. 헬퍼 함수 사용

```php
// 패키지 경로
$path = module_path('your-package', 'config/app.php');

// 설정 파일
$config = module_config('your-package', 'app.php');

// 뷰 파일
$view = module_view('your-package', 'components/button.blade.php');

// 라우트 파일
$route = module_route('your-package', 'web.php');

// 마이그레이션 디렉토리
$migrations = module_migrations('your-package');

// 언어 파일 디렉토리
$lang = module_lang('your-package');

// 리소스 디렉토리
$resources = module_resources('your-package');

// 앱 디렉토리
$app = module_app('your-package');

// 퍼블릭 디렉토리
$public = module_public('your-package');

// 테스트 디렉토리
$tests = module_tests('your-package');
```

### 3. 서비스 컨테이너 사용

```php
// 서비스 컨테이너에서 직접 접근
$moduleManager = app('jiny.module');
$path = $moduleManager->dir('your-package', 'config/app.php');
```

## 실제 사용 예시

### ServiceProvider에서 사용
```php
public function boot(): void
{
    // 설정 파일 등록
    $this->publishes([
        \Jiny\Uikit\App\Facades\Module::config('your-package', 'config.php') => config_path('your-package.php'),
    ], 'your-package-config');

    // 마이그레이션 등록
    $this->loadMigrationsFrom(\Jiny\Uikit\App\Facades\Module::migrations('your-package'));

    // 뷰 등록
    $this->loadViewsFrom(\Jiny\Uikit\App\Facades\Module::getPath('your-package', 'views'), 'your-package');

    // 라우트 등록
    Route::middleware('web')
        ->group(\Jiny\Uikit\App\Facades\Module::route('your-package', 'web.php'));
}
```

### 컨트롤러에서 사용
```php
use Jiny\Uikit\App\Facades\Module;

public function index()
{
    $configPath = Module::config('your-package', 'app.php');
    $config = require $configPath;
    
    return view('your-package::index', compact('config'));
}
```

### 서비스 클래스에서 사용
```php
use Jiny\Uikit\App\Facades\Module;

public function loadMenuData()
{
    $menuPath = Module::dir('your-package', 'resources/menus/sidebar.json');
    
    if (File::exists($menuPath)) {
        return json_decode(File::get($menuPath), true);
    }
    
    return null;
}
```

## 유틸리티 메서드

### 등록된 패키지 확인
```php
use Jiny\Uikit\App\Facades\Module;

// 모든 등록된 패키지 목록
$packages = Module::getRegisteredPackages();

// 특정 패키지 등록 여부 확인
if (Module::isRegistered('your-package')) {
    // 패키지가 등록됨
}
```

### 경로 타입별 접근
```php
use Jiny\Uikit\App\Facades\Module;

// 특정 타입의 경로 반환
$viewsPath = Module::getPath('your-package', 'views');
$configPath = Module::getPath('your-package', 'config');
$routesPath = Module::getPath('your-package', 'routes');
```

## 다른 패키지에서 사용하기

### 1. 의존성 추가
```json
{
    "require": {
        "jiny/uikit": "^1.0"
    }
}
```

### 2. ServiceProvider에서 등록
```php
<?php

namespace YourPackage;

use Illuminate\Support\ServiceProvider;
use Jiny\Uikit\App\Facades\Module;

class YourPackageServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // 패키지 루트 경로 등록
        Module::setDir('your-package', __DIR__);
    }

    public function boot(): void
    {
        // 설정 파일 등록
        $this->publishes([
            Module::config('your-package', 'config.php') => config_path('your-package.php'),
        ], 'your-package-config');

        // 마이그레이션 등록
        $this->loadMigrationsFrom(Module::migrations('your-package'));

        // 뷰 등록
        $this->loadViewsFrom(Module::getPath('your-package', 'views'), 'your-package');
    }
}
```

### 3. 사용
```php
use Jiny\Uikit\App\Facades\Module;

// 어디서든 사용 가능
$configPath = Module::config('your-package', 'app.php');
$viewPath = Module::view('your-package', 'components/button.blade.php');
```

## 장점

1. **중앙 집중식 관리**: 모든 패키지의 경로를 한 곳에서 관리
2. **타입 안전성**: 잘못된 경로 접근 시 예외 발생
3. **편의성**: 자주 사용되는 경로에 대한 편의 메서드 제공
4. **확장성**: 새로운 패키지 추가 시 간단한 등록만으로 사용 가능
5. **일관성**: 모든 패키지에서 동일한 방식으로 경로 접근
6. **Laravel 표준**: Facade 패턴을 사용하여 Laravel의 표준적인 방식
7. **크로스 패키지**: 다른 패키지에서도 쉽게 사용 가능

## 주의사항

- 패키지를 사용하기 전에 반드시 ServiceProvider에서 `Module::setDir()`로 등록해야 합니다.
- 등록되지 않은 패키지에 접근하면 `InvalidArgumentException`이 발생합니다.
- 경로는 운영체제에 관계없이 올바른 디렉토리 구분자를 사용합니다.
- Facade를 사용할 때는 `use Jiny\Uikit\App\Facades\Module;`를 추가해야 합니다. 
