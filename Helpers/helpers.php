<?php

/**
 * 모듈 매니저 인스턴스 반환 (Facade 사용)
 *
 * @return \Jiny\Uikit\App\Services\ModuleManager
 */
if (!function_exists('module')) {
    function module() {
        return \Jiny\Uikit\App\Facades\Module::getFacadeRoot();
    }
}

/**
 * 패키지의 루트 경로 반환 (간단한 사용법)
 *
 * @param string $package 패키지명
 * @param string|null $subPath 하위 경로
 * @return string
 */
if (!function_exists('module_path')) {
    function module_path(string $package, ?string $subPath = null): string {
        return \Jiny\Uikit\App\Facades\Module::dir($package, $subPath);
    }
}

/**
 * 패키지의 설정 파일 경로 반환 (간단한 사용법)
 *
 * @param string $package 패키지명
 * @param string $configFile 설정 파일명
 * @return string
 */
if (!function_exists('module_config')) {
    function module_config(string $package, string $configFile): string {
        return \Jiny\Uikit\App\Facades\Module::config($package, $configFile);
    }
}

/**
 * 패키지의 뷰 파일 경로 반환 (간단한 사용법)
 *
 * @param string $package 패키지명
 * @param string $viewFile 뷰 파일명
 * @return string
 */
if (!function_exists('module_view')) {
    function module_view(string $package, string $viewFile): string {
        return \Jiny\Uikit\App\Facades\Module::view($package, $viewFile);
    }
}

/**
 * 패키지의 라우트 파일 경로 반환 (간단한 사용법)
 *
 * @param string $package 패키지명
 * @param string $routeFile 라우트 파일명
 * @return string
 */
if (!function_exists('module_route')) {
    function module_route(string $package, string $routeFile): string {
        return \Jiny\Uikit\App\Facades\Module::route($package, $routeFile);
    }
}

/**
 * 패키지의 마이그레이션 디렉토리 경로 반환 (간단한 사용법)
 *
 * @param string $package 패키지명
 * @return string
 */
if (!function_exists('module_migrations')) {
    function module_migrations(string $package): string {
        return \Jiny\Uikit\App\Facades\Module::migrations($package);
    }
}

/**
 * 패키지의 언어 파일 디렉토리 경로 반환 (간단한 사용법)
 *
 * @param string $package 패키지명
 * @return string
 */
if (!function_exists('module_lang')) {
    function module_lang(string $package): string {
        return \Jiny\Uikit\App\Facades\Module::lang($package);
    }
}

/**
 * 패키지의 리소스 디렉토리 경로 반환 (간단한 사용법)
 *
 * @param string $package 패키지명
 * @return string
 */
if (!function_exists('module_resources')) {
    function module_resources(string $package): string {
        return \Jiny\Uikit\App\Facades\Module::resources($package);
    }
}

/**
 * 패키지의 앱 디렉토리 경로 반환 (간단한 사용법)
 *
 * @param string $package 패키지명
 * @return string
 */
if (!function_exists('module_app')) {
    function module_app(string $package): string {
        return \Jiny\Uikit\App\Facades\Module::app($package);
    }
}

/**
 * 패키지의 퍼블릭 디렉토리 경로 반환 (간단한 사용법)
 *
 * @param string $package 패키지명
 * @return string
 */
if (!function_exists('module_public')) {
    function module_public(string $package): string {
        return \Jiny\Uikit\App\Facades\Module::public($package);
    }
}

/**
 * 패키지의 테스트 디렉토리 경로 반환 (간단한 사용법)
 *
 * @param string $package 패키지명
 * @return string
 */
if (!function_exists('module_tests')) {
    function module_tests(string $package): string {
        return \Jiny\Uikit\App\Facades\Module::tests($package);
    }
}

/**
 * Blade 템플릿에서 사용할 수 있는 간단한 헬퍼 함수
 * 패키지 경로를 반환
 *
 * @param string $package 패키지명
 * @param string|null $subPath 하위 경로
 * @return string
 */
if (!function_exists('module_dir')) {
    function module_dir(string $package, ?string $subPath = null): string {
        try {
            return \Jiny\Uikit\App\Facades\Module::dir($package, $subPath);
        } catch (\Exception $e) {
            return '';
        }
    }
}
