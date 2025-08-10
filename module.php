<?php

/**
 * Jiny UIKit 모듈 정보
 *
 * 이 파일은 Jiny UIKit 패키지의 기본 정보를 정의합니다.
 * Module::info() 메서드에서 이 정보를 읽어와 반환합니다.
 */

return [
    // 기본 모듈 정보
    'name' => 'Jiny UIKit',
    'version' => '1.0.0',
    'description' => 'Jiny UI Component Kit System',
    'author' => 'Jiny Team',
    'created_at' => '2024-01-01 00:00:00',

    // 모듈 경로 (__DIR__ 상수 사용)
    'path' => __DIR__,

    // 모듈 기능 정보
    'features' => [
        'ui_components' => true,
        'module_management' => true,
        'design_system' => true,
        'blade_components' => true,
        'color_system' => true,
        'behavior_management' => true,
        'component_registry' => true
    ],

    // 모듈 설정 정보
    'config' => [
        'package_name' => 'jiny-uikit',
        'namespace' => 'ui',
        'auto_discovery' => true,
        'component_registry' => true,
        'design_system' => true
    ],

    // 모듈 의존성
    'dependencies' => [
        'laravel/framework' => '^10.0',
        'illuminate/view' => '^10.0',
        'illuminate/support' => '^10.0'
    ],

    // 모듈 구조 정보
    'structure' => [
        'app' => '애플리케이션 로직',
        'config' => '설정 파일',
        'database' => '데이터베이스 관련',
        'docs' => '문서',
        'Helpers' => '헬퍼 함수',
        'resources' => '리소스 파일',
        'routes' => '라우트 정의',
        'tests' => '테스트 파일'
    ],

    // 모듈 메타데이터
    'metadata' => [
        'namespace' => 'Jiny\\Uikit',
        'service_provider' => 'Jiny\\Uikit\\JinyUikitServiceProvider',
        'module_service_provider' => 'Jiny\\Uikit\\App\\Providers\\ModuleServiceProvider',
        'main_service' => 'Jiny\\Uikit\\App\\Services\\ModuleManager',
        'facade' => 'Jiny\\Uikit\\App\\Facades\\Module',
        'package_name' => 'jiny-uikit'
    ]
];
