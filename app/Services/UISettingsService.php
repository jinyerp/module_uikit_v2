<?php

namespace Jiny\Uikit\App\Services;

use Jiny\Uikit\App\Helpers\ColorHelper;

class UISettingsService
{
    private static $instance = null;
    private $settings = [];
    
    private function __construct()
    {
        $this->loadSettings();
    }
    
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    /**
     * 설정 로드
     */
    private function loadSettings()
    {
        $this->settings = [
            'defaults' => config('uikit-ui.defaults', []),
            'current' => config('uikit-ui.current', []),
            'colors' => config('uikit-color', []),
            'behavior' => config('uikit-behavior', []),
        ];
    }
    
    /**
     * 현재 테마 가져오기
     */
    public function getCurrentTheme()
    {
        return $this->settings['current']['theme'] ?? $this->settings['defaults']['theme'] ?? 'light';
    }
    
    /**
     * 테마 설정
     */
    public function setTheme($theme)
    {
        $this->settings['current']['theme'] = $theme;
        return $this;
    }
    
    /**
     * 테마별 색상 가져오기
     */
    public function getThemeColors($theme = null)
    {
        $theme = $theme ?? $this->getCurrentTheme();
        return config("uikit-color.classes.{$theme}", []);
    }
    
    /**
     * 색상 팔레트 가져오기
     */
    public function getColorPalette()
    {
        return config('uikit-color.palette', []);
    }
    
    /**
     * 특정 색상 가져오기
     */
    public function getColor($colorName, $variant = 'main')
    {
        $palette = $this->getColorPalette();
        return $palette[$colorName][$variant] ?? null;
    }
    
    /**
     * 색상 밝기 조정
     */
    public function lightenColor($hex, $percent = 20)
    {
        return ColorHelper::lighten($hex, $percent);
    }
    
    /**
     * 색상 어둡게 조정
     */
    public function darkenColor($hex, $percent = 20)
    {
        return ColorHelper::darken($hex, $percent);
    }
    
    /**
     * 색상 대비 계산
     */
    public function getColorContrast($hex)
    {
        return ColorHelper::getContrast($hex);
    }
    
    /**
     * 색상에 투명도 추가
     */
    public function addColorOpacity($hex, $opacity = 1)
    {
        return ColorHelper::withOpacity($hex, $opacity);
    }
    
    /**
     * 색상 팔레트에서 자동 변형 생성
     */
    public function generateColorVariants($baseColors = null)
    {
        if ($baseColors === null) {
            $baseColors = config('uikit-design.color', []);
        }
        
        return ColorHelper::generateColorVariants($baseColors);
    }
    
    /**
     * 구조화된 색상 팔레트 생성
     */
    public function getStructuredColorPalette()
    {
        $baseColors = config('uikit-design.color', []);
        return ColorHelper::structureColorPalette($baseColors);
    }
    
    /**
     * 동작 설정 가져오기
     */
    public function getBehavior($key = null)
    {
        if ($key) {
            return config("uikit-behavior.{$key}", []);
        }
        return config('uikit-behavior', []);
    }
    
    /**
     * 사이드바 설정 가져오기
     */
    public function getSidebarSettings()
    {
        return $this->getBehavior('sidebar');
    }
    
    /**
     * 폼 설정 가져오기
     */
    public function getFormSettings()
    {
        return $this->getBehavior('forms');
    }
    
    /**
     * 테이블 설정 가져오기
     */
    public function getTableSettings()
    {
        return $this->getBehavior('tables');
    }
    
    /**
     * 설정 저장 (세션에)
     */
    public function saveToSession()
    {
        session(['uikit_settings' => $this->settings['current']]);
        return $this;
    }
    
    /**
     * 세션에서 설정 로드
     */
    public function loadFromSession()
    {
        $sessionSettings = session('uikit_settings', []);
        $this->settings['current'] = array_merge($this->settings['current'], $sessionSettings);
        return $this;
    }
    
    /**
     * 모든 설정 가져오기
     */
    public function getAllSettings()
    {
        return $this->settings;
    }
    
    /**
     * 설정 리셋
     */
    public function resetToDefaults()
    {
        $this->settings['current'] = $this->settings['defaults'];
        session()->forget('uikit_settings');
        return $this;
    }
} 