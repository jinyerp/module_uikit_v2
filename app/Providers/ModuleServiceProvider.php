<?php

namespace Jiny\Uikit\App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Jiny\Uikit\App\Services\ModuleManager;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // ModuleManager를 서비스 컨테이너에 등록
        $this->app->singleton('jiny.module', function ($app) {
            return ModuleManager::getInstance();
        });

        // Facade 별칭 등록
        $this->app->alias('jiny.module', ModuleManager::class);

        // 헬퍼 함수 로드
        require_once __DIR__ . '/../../Helpers/helpers.php';
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Blade에서 사용할 수 있는 디렉티브 등록
        $this->registerBladeDirectives();
    }

    /**
     * Blade 디렉티브 등록
     */
    protected function registerBladeDirectives(): void
    {
        // @module 디렉티브 등록
        Blade::directive('module', function ($expression) {
            return "<?php echo module_dir($expression); ?>";
        });

        // @modulePath 디렉티브 등록
        Blade::directive('modulePath', function ($expression) {
            return "<?php echo module_path($expression); ?>";
        });

        // @moduleConfig 디렉티브 등록
        Blade::directive('moduleConfig', function ($expression) {
            return "<?php echo module_config($expression); ?>";
        });

        // @moduleView 디렉티브 등록
        Blade::directive('moduleView', function ($expression) {
            return "<?php echo module_view($expression); ?>";
        });

        // @moduleSafe 디렉티브 등록 (오류 처리 포함)
        Blade::directive('moduleSafe', function ($expression) {
            return "<?php try { echo module_dir($expression); } catch (Exception \$e) { echo 'Module not available'; } ?>";
        });
    }
}
