<?php

namespace Jiny\Uikit;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;

class JinyUikitServiceProvider extends ServiceProvider
{
    private $package = 'jiny-uikit';
    private $namespace = 'ui';

    /**
     * Register services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // 설정 파일 등록
        $this->publishes([
            __DIR__.'/config/components.php' => config_path('uikit-components.php'),
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
