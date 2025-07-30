<?php

namespace Jiny\Uikit\App\Helpers;

/**
 * PathHelper 테스트 예제
 * 이 파일은 PathHelper의 기능을 테스트하기 위한 예제입니다.
 */
class PathHelperTest
{
    public static function runTests()
    {
        echo "=== PathHelper 테스트 시작 ===\n";

        // 경로 정규화 테스트
        self::testNormalizePath();

        // 절대 경로 확인 테스트
        self::testIsAbsolutePath();

        // 경로 조합 테스트
        self::testCombine();

        // URL 매칭 테스트
        self::testIsUrlMatch();

        echo "=== PathHelper 테스트 완료 ===\n";
    }

    private static function testNormalizePath()
    {
        echo "\n--- 경로 정규화 테스트 ---\n";

        $testCases = [
            'C:\\Project\\jiny\\jiny_auth_server3\\jiny\\uikit/menus/sidebar.json' => 'C:' . DIRECTORY_SEPARATOR . 'Project' . DIRECTORY_SEPARATOR . 'jiny' . DIRECTORY_SEPARATOR . 'jiny_auth_server3' . DIRECTORY_SEPARATOR . 'jiny' . DIRECTORY_SEPARATOR . 'uikit' . DIRECTORY_SEPARATOR . 'menus' . DIRECTORY_SEPARATOR . 'sidebar.json',
            '/var/www/html/app/config' => DIRECTORY_SEPARATOR . 'var' . DIRECTORY_SEPARATOR . 'www' . DIRECTORY_SEPARATOR . 'html' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'config',
            'app\\config\\database.php' => 'app' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'database.php',
            'resources//menus//sidebar.json' => 'resources' . DIRECTORY_SEPARATOR . 'menus' . DIRECTORY_SEPARATOR . 'sidebar.json',
        ];

        foreach ($testCases as $input => $expected) {
            $result = PathHelper::normalizePath($input);
            $status = ($result === $expected) ? '✓' : '✗';
            echo "{$status} 입력: {$input}\n";
            echo "   결과: {$result}\n";
            echo "   예상: {$expected}\n\n";
        }
    }

    private static function testIsAbsolutePath()
    {
        echo "\n--- 절대 경로 확인 테스트 ---\n";

        if (DIRECTORY_SEPARATOR === '\\') {
            // Windows 환경
            $testCases = [
                'C:\\Project\\app' => true,
                'D:\\config\\database.php' => true,
                'app\\config' => false,
                'resources\\menus' => false,
            ];
        } else {
            // Unix/Linux 환경
            $testCases = [
                '/var/www/html' => true,
                '/app/config' => true,
                'app/config' => false,
                'resources/menus' => false,
            ];
        }

        foreach ($testCases as $path => $expected) {
            $result = PathHelper::isAbsolutePath($path);
            $status = ($result === $expected) ? '✓' : '✗';
            echo "{$status} 경로: {$path} -> " . ($result ? '절대' : '상대') . "\n";
        }
    }

    private static function testCombine()
    {
        echo "\n--- 경로 조합 테스트 ---\n";

        $testCases = [
            ['app', 'config', 'database.php'] => 'app' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'database.php',
            ['resources', 'menus', 'sidebar.json'] => 'resources' . DIRECTORY_SEPARATOR . 'menus' . DIRECTORY_SEPARATOR . 'sidebar.json',
            ['C:\\Project', 'app', 'config'] => 'C:' . DIRECTORY_SEPARATOR . 'Project' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'config',
        ];

        foreach ($testCases as $parts => $expected) {
            $result = PathHelper::combine(...$parts);
            $status = ($result === $expected) ? '✓' : '✗';
            echo "{$status} 조합: " . implode(' + ', $parts) . "\n";
            echo "   결과: {$result}\n\n";
        }
    }

    private static function testIsUrlMatch()
    {
        echo "\n--- URL 매칭 테스트 ---\n";

        $testCases = [
            [['/admin', '/admin'], true],
            [['/admin/users', '/admin/users'], true],
            [['/admin/*', '/admin/users'], true],
            [['/admin/*', '/admin/settings'], true],
            [['/admin/*', '/dashboard'], false],
            [['/api/v1/users', '/api/v1/users'], true],
            [['/api/v1/*', '/api/v1/users'], true],
        ];

        foreach ($testCases as $testCase) {
            $urls = $testCase[0];
            $expected = $testCase[1];
            $menuUrl = $urls[0];
            $currentUrl = $urls[1];
            $result = PathHelper::isUrlMatch($menuUrl, $currentUrl);
            $status = ($result === $expected) ? '✓' : '✗';
            echo "{$status} 메뉴: {$menuUrl} <-> 현재: {$currentUrl} -> " . ($result ? '매치' : '불일치') . "\n";
        }
    }
}

// 테스트 실행 (이 파일을 직접 실행할 때만)
if (basename(__FILE__) === basename($_SERVER['SCRIPT_NAME'] ?? '')) {
    PathHelperTest::runTests();
}
