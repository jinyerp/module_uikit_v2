<?php

namespace Jiny\Uikit\App\Helpers;

class PathHelper
{
    /**
     * 운영체제별 경로 구분자를 정규화합니다.
     *
     * @param string|null $path
     * @return string|null
     */
    public static function normalizePath($path)
    {
        if (empty($path)) {
            return $path;
        }

        // 모든 경로 구분자를 현재 운영체제에 맞게 정규화
        $normalizedPath = str_replace(['\\', '/'], DIRECTORY_SEPARATOR, $path);

        // 연속된 구분자들을 하나로 통합
        $normalizedPath = preg_replace('/' . preg_quote(DIRECTORY_SEPARATOR, '/') . '+/', DIRECTORY_SEPARATOR, $normalizedPath);

        // 경로 끝의 구분자 제거 (파일 경로인 경우)
        $normalizedPath = rtrim($normalizedPath, DIRECTORY_SEPARATOR);

        return $normalizedPath;
    }

    /**
     * 경로가 절대 경로인지 확인합니다.
     *
     * @param string $path
     * @return bool
     */
    public static function isAbsolutePath($path)
    {
        // Windows의 경우 드라이브 문자 확인
        if (DIRECTORY_SEPARATOR === '\\') {
            return preg_match('/^[A-Za-z]:/', $path);
        }

        // Unix/Linux의 경우 루트 디렉토리로 시작하는지 확인
        return strpos($path, '/') === 0;
    }

    /**
     * 상대 경로를 절대 경로로 변환합니다.
     *
     * @param string $path
     * @return string
     */
    public static function resolveRelativePath($path)
    {
        $normalizedPath = self::normalizePath($path);

        if (self::isAbsolutePath($normalizedPath)) {
            return $normalizedPath;
        }

        // 현재 작업 디렉토리를 기준으로 절대 경로 생성
        return getcwd() . DIRECTORY_SEPARATOR . $normalizedPath;
    }

    /**
     * 경로가 유효한지 확인합니다.
     *
     * @param string $path
     * @return bool
     */
    public static function isValidPath($path)
    {
        if (empty($path)) {
            return false;
        }

        $normalizedPath = self::normalizePath($path);

        // 경로에 허용되지 않는 문자가 있는지 확인
        $invalidChars = ['<', '>', ':', '"', '|', '?', '*'];
        foreach ($invalidChars as $char) {
            if (strpos($normalizedPath, $char) !== false) {
                return false;
            }
        }

        return true;
    }

    /**
     * 경로를 안전하게 조합합니다.
     *
     * @param string ...$parts
     * @return string
     */
    public static function combine(...$parts)
    {
        $normalizedParts = array_map([self::class, 'normalizePath'], $parts);
        $filteredParts = array_filter($normalizedParts, function($part) {
            return !empty($part);
        });

        return implode(DIRECTORY_SEPARATOR, $filteredParts);
    }

    /**
     * URL 매칭을 확인합니다.
     *
     * @param string $menuUrl
     * @param string $currentUrl
     * @return bool
     */
    public static function isUrlMatch($menuUrl, $currentUrl)
    {
        // 정확한 매치
        if ($menuUrl === $currentUrl) {
            return true;
        }

        // 와일드카드 매치 (예: /admin/*)
        if (str_ends_with($menuUrl, '/*')) {
            $baseUrl = rtrim($menuUrl, '/*');
            return str_starts_with($currentUrl, $baseUrl);
        }

        return false;
    }
}
