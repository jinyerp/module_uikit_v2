<?php

namespace Jiny\Uikit\App\Helpers;

class ColorHelper
{
    /**
     * 색상을 밝게 만드는 함수
     */
    public static function lighten($hex, $percent = 20)
    {
        return self::adjustBrightness($hex, $percent);
    }
    
    /**
     * 색상을 어둡게 만드는 함수
     */
    public static function darken($hex, $percent = 20)
    {
        return self::adjustBrightness($hex, -$percent);
    }
    
    /**
     * 색상 밝기 조정
     */
    public static function adjustBrightness($hex, $percent)
    {
        $hex = ltrim($hex, '#');
        
        $r = hexdec(substr($hex, 0, 2));
        $g = hexdec(substr($hex, 2, 2));
        $b = hexdec(substr($hex, 4, 2));
        
        $r = max(0, min(255, $r + ($r * $percent / 100)));
        $g = max(0, min(255, $g + ($g * $percent / 100)));
        $b = max(0, min(255, $b + ($b * $percent / 100)));
        
        return '#' . str_pad(dechex($r), 2, '0', STR_PAD_LEFT) . 
                     str_pad(dechex($g), 2, '0', STR_PAD_LEFT) . 
                     str_pad(dechex($b), 2, '0', STR_PAD_LEFT);
    }
    
    /**
     * 색상 대비 계산
     */
    public static function getContrast($hex)
    {
        $hex = ltrim($hex, '#');
        
        $r = hexdec(substr($hex, 0, 2));
        $g = hexdec(substr($hex, 2, 2));
        $b = hexdec(substr($hex, 4, 2));
        
        $luminance = (0.299 * $r + 0.587 * $g + 0.114 * $b) / 255;
        
        return $luminance > 0.5 ? '#000000' : '#FFFFFF';
    }
    
    /**
     * 색상에 투명도 추가
     */
    public static function withOpacity($hex, $opacity = 1)
    {
        $hex = ltrim($hex, '#');
        
        $r = hexdec(substr($hex, 0, 2));
        $g = hexdec(substr($hex, 2, 2));
        $b = hexdec(substr($hex, 4, 2));
        
        return "rgba($r, $g, $b, $opacity)";
    }
    
    /**
     * 색상 팔레트에서 자동으로 light/dark 변형 생성
     */
    public static function generateColorVariants($baseColors)
    {
        $variants = [];
        
        foreach ($baseColors as $name => $color) {
            if (is_string($color) && strpos($color, '#') === 0) {
                $variants[$name] = $color;
                $variants[$name . '-light'] = self::lighten($color, 30);
                $variants[$name . '-dark'] = self::darken($color, 30);
                $variants[$name . '-contrast'] = self::getContrast($color);
            }
        }
        
        return $variants;
    }
    
    /**
     * 색상 팔레트를 구조화된 형태로 변환
     */
    public static function structureColorPalette($colors)
    {
        $structured = [];
        
        foreach ($colors as $name => $color) {
            if (is_string($color) && strpos($color, '#') === 0) {
                $structured[$name] = [
                    'main' => $color,
                    'light' => self::lighten($color, 30),
                    'dark' => self::darken($color, 30),
                    'contrast' => self::getContrast($color),
                ];
            }
        }
        
        return $structured;
    }
    
    /**
     * 색상이 유효한지 확인
     */
    public static function isValidHex($hex)
    {
        return preg_match('/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/', $hex);
    }
    
    /**
     * 색상 간 거리 계산 (유사도 측정)
     */
    public static function getColorDistance($color1, $color2)
    {
        $rgb1 = self::hexToRgb($color1);
        $rgb2 = self::hexToRgb($color2);
        
        return sqrt(
            pow($rgb1['r'] - $rgb2['r'], 2) +
            pow($rgb1['g'] - $rgb2['g'], 2) +
            pow($rgb1['b'] - $rgb2['b'], 2)
        );
    }
    
    /**
     * HEX를 RGB로 변환
     */
    public static function hexToRgb($hex)
    {
        $hex = ltrim($hex, '#');
        
        return [
            'r' => hexdec(substr($hex, 0, 2)),
            'g' => hexdec(substr($hex, 2, 2)),
            'b' => hexdec(substr($hex, 4, 2))
        ];
    }
    
    /**
     * RGB를 HEX로 변환
     */
    public static function rgbToHex($r, $g, $b)
    {
        return '#' . str_pad(dechex($r), 2, '0', STR_PAD_LEFT) . 
                     str_pad(dechex($g), 2, '0', STR_PAD_LEFT) . 
                     str_pad(dechex($b), 2, '0', STR_PAD_LEFT);
    }
} 