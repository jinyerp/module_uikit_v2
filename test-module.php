<?php

// Module Facade 테스트
require_once __DIR__ . '/vendor/autoload.php';

use Jiny\Uikit\App\Facades\Module;

// 패키지 등록
Module::setDir('test-package', __DIR__);

// 경로 테스트
echo "Test Package Root: " . Module::dir('test-package') . "\n";
echo "Test Package Config: " . Module::config('test-package', 'app.php') . "\n";
echo "Test Package View: " . Module::view('test-package', 'test.blade.php') . "\n";

// 등록된 패키지 확인
echo "Registered Packages: " . implode(', ', Module::getRegisteredPackages()) . "\n";
