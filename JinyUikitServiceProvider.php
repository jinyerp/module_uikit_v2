<?php

namespace Jiny\Uikit;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Jiny\Uikit\App\Services\ModuleManager;
use Jiny\Uikit\App\Facades\Module;
use Jiny\Uikit\App\Providers\ModuleServiceProvider;

class JinyUikitServiceProvider extends ServiceProvider
{
    private $package = 'jiny-uikit';
    private $namespace = 'ui';

    /**
     * Register services.
     */
    public function register(): void
    {
        // ModuleServiceProvider 등록
        $this->app->register(ModuleServiceProvider::class);

        // 패키지 루트 경로 등록
        $this->registerPackageRoot();
        
        // UI 설정 파일들 병합
        $this->mergeConfigFrom(__DIR__.'/config/ui.php', 'uikit-ui');
        $this->mergeConfigFrom(__DIR__.'/config/design.php', 'uikit-design');
        $this->mergeConfigFrom(__DIR__.'/config/behavior.php', 'uikit-behavior');
        $this->mergeConfigFrom(__DIR__.'/config/color.php', 'uikit-color');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // 설정 파일 등록
        $this->publishes([
            __DIR__.'/config/components.php' => config_path('uikit-components.php'),
            __DIR__.'/config/ui.php' => config_path('uikit-ui.php'),
            __DIR__.'/config/design.php' => config_path('uikit-design.php'),
            __DIR__.'/config/behavior.php' => config_path('uikit-behavior.php'),
            __DIR__.'/config/color.php' => config_path('uikit-color.php'),
        ], 'uikit-config');

        // 마이그레이션 등록
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        // 라우트 등록
        $this->loadRoutes();

        // 뷰 등록
        $this->loadViewsFrom(__DIR__.'/resources/views', $this->package);

        // 언어 파일 등록
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', $this->package);

        // 컴포넌트 등록
        $this->loadComponents();
    }

    /**
     * 패키지 루트 경로 등록
     */
    protected function registerPackageRoot(): void
    {
        try {
            // 현재 패키지의 루트 경로 등록
            $this->module()->setDir($this->package, __DIR__);

            // 디버깅: 등록 확인
            if ($this->module()->isRegistered($this->package)) {
                // 등록 성공
            }
        } catch (\Exception $e) {
            // 오류 처리
            error_log("Module registration failed: " . $e->getMessage());
        }
    }

    /**
     * 모듈 매니저 인스턴스 반환
     */
    protected function module(): ModuleManager
    {
        return ModuleManager::getInstance();
    }

    /**
     * 라우트 등록
     */
    protected function loadRoutes(): void
    {
        Route::middleware('web')
            ->group(__DIR__.'/routes/web.php');
    }

    /**
     * 컴포넌트 등록
     */
    protected function loadComponents(): void
    {
        $components = config('uikit-components', require __DIR__.'/config/components.php');

        foreach ($components as $category => $componentList) {
            if (is_array($componentList)) {
                $this->registerComponents($componentList);
            }
        }

        // FormSection과 FormCheckbox는 components.php에서 자동 등록됨
        // 별도 수동 등록 불필요
    }

    /**
     * 컴포넌트 등록 헬퍼 메서드
     */
    protected function registerComponents(array $components): void
    {
        foreach ($components as $name => $class) {
            Blade::component($class, $this->namespace . '::' . $name);
        }
    }
}
