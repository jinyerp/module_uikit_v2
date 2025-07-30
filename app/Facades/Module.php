<?php

namespace Jiny\Uikit\App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Jiny\Uikit\App\Services\ModuleManager setDir(string $package, string $path)
 * @method static string dir(string $package, ?string $subPath = null)
 * @method static array getRegisteredPackages()
 * @method static bool isRegistered(string $package)
 * @method static string getPath(string $package, string $type)
 * @method static string config(string $package, string $configFile)
 * @method static string view(string $package, string $viewFile)
 * @method static string route(string $package, string $routeFile)
 * @method static string migrations(string $package)
 * @method static string lang(string $package)
 * @method static string resources(string $package)
 * @method static string app(string $package)
 * @method static string public(string $package)
 * @method static string tests(string $package)
 *
 * @see \Jiny\Uikit\App\Services\ModuleManager
 */
class Module extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'jiny.module';
    }
}
