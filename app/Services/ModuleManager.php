<?php

namespace Jiny\Uikit\App\Services;

class ModuleManager
{
    private static $packageRoots = [];
    private static $instance = null;

    private function __construct()
    {
        // 싱글톤 패턴
    }

    /**
     * 싱글톤 인스턴스 반환
     */
    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * 패키지 루트 경로 설정
     *
     * @param string $package 패키지명
     * @param string $path 루트 경로
     * @return self
     */
    public function setDir(string $package, string $path): self
    {
        self::$packageRoots[$package] = rtrim($path, '/\\');
        return $this;
    }

    /**
     * 패키지 루트 경로 반환
     *
     * @param string $package 패키지명
     * @param string|null $subPath 하위 경로 (선택사항)
     * @return string
     * @throws \InvalidArgumentException
     */
    public function dir(string $package, ?string $subPath = null): string
    {
        if (!isset(self::$packageRoots[$package])) {
            throw new \InvalidArgumentException("Package '{$package}' is not registered. Use module()->setDir('{$package}', __DIR__) in your service provider.");
        }

        $rootPath = self::$packageRoots[$package];

        if ($subPath === null) {
            return $rootPath;
        }

        return $rootPath . DIRECTORY_SEPARATOR . ltrim($subPath, '/\\');
    }

    /**
     * 등록된 모든 패키지 목록 반환
     *
     * @return array
     */
    public function getRegisteredPackages(): array
    {
        return array_keys(self::$packageRoots);
    }

    /**
     * 패키지가 등록되었는지 확인
     *
     * @param string $package 패키지명
     * @return bool
     */
    public function isRegistered(string $package): bool
    {
        return isset(self::$packageRoots[$package]);
    }

    /**
     * 패키지의 특정 디렉토리 경로 반환 (자주 사용되는 경로들)
     *
     * @param string $package 패키지명
     * @param string $type 경로 타입 (config, views, routes, migrations, lang, resources)
     * @return string
     */
    public function getPath(string $package, string $type): string
    {
        $paths = [
            'config' => 'config',
            'views' => 'resources/views',
            'routes' => 'routes',
            'migrations' => 'database/migrations',
            'lang' => 'resources/lang',
            'resources' => 'resources',
            'app' => 'app',
            'public' => 'public',
            'tests' => 'tests'
        ];

        if (!isset($paths[$type])) {
            throw new \InvalidArgumentException("Unknown path type: {$type}. Available types: " . implode(', ', array_keys($paths)));
        }

        return $this->dir($package, $paths[$type]);
    }

    /**
     * 패키지의 설정 파일 경로 반환
     *
     * @param string $package 패키지명
     * @param string $configFile 설정 파일명
     * @return string
     */
    public function config(string $package, string $configFile): string
    {
        return $this->dir($package, "config/{$configFile}");
    }

    /**
     * 패키지의 뷰 파일 경로 반환
     *
     * @param string $package 패키지명
     * @param string $viewFile 뷰 파일명
     * @return string
     */
    public function view(string $package, string $viewFile): string
    {
        return $this->dir($package, "resources/views/{$viewFile}");
    }

    /**
     * 패키지의 라우트 파일 경로 반환
     *
     * @param string $package 패키지명
     * @param string $routeFile 라우트 파일명
     * @return string
     */
    public function route(string $package, string $routeFile): string
    {
        return $this->dir($package, "routes/{$routeFile}");
    }

    /**
     * 패키지의 마이그레이션 디렉토리 경로 반환
     *
     * @param string $package 패키지명
     * @return string
     */
    public function migrations(string $package): string
    {
        return $this->dir($package, 'database/migrations');
    }

    /**
     * 패키지의 언어 파일 디렉토리 경로 반환
     *
     * @param string $package 패키지명
     * @return string
     */
    public function lang(string $package): string
    {
        return $this->dir($package, 'resources/lang');
    }

    /**
     * 패키지의 리소스 디렉토리 경로 반환
     *
     * @param string $package 패키지명
     * @return string
     */
    public function resources(string $package): string
    {
        return $this->dir($package, 'resources');
    }

    /**
     * 패키지의 앱 디렉토리 경로 반환
     *
     * @param string $package 패키지명
     * @return string
     */
    public function app(string $package): string
    {
        return $this->dir($package, 'app');
    }

    /**
     * 패키지의 퍼블릭 디렉토리 경로 반환
     *
     * @param string $package 패키지명
     * @return string
     */
    public function public(string $package): string
    {
        return $this->dir($package, 'public');
    }

    /**
     * 패키지의 테스트 디렉토리 경로 반환
     *
     * @param string $package 패키지명
     * @return string
     */
    public function tests(string $package): string
    {
        return $this->dir($package, 'tests');
    }
}
