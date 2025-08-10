<?php

return [
    'color' => [
        'primary'         => '#1E40AF', // Blue-800
        'primary-light'   => '#3B82F6', // Blue-500
        'primary-dark'    => '#1E3A8A', // Blue-900
        'secondary'       => '#64748B', // Gray-500
        'secondary-light' => '#E5E7EB', // Gray-200
        'secondary-dark'  => '#374151', // Gray-700
        'success'         => '#10B981', // Green-500
        'success-light'   => '#6EE7B7', // Green-300
        'success-dark'    => '#047857', // Green-700
        'danger'          => '#EF4444', // Red-500
        'danger-light'    => '#FCA5A5', // Red-300
        'danger-dark'     => '#DC2626', // Red-700
        'warning'         => '#F59E42', // Amber-500
        'warning-light'   => '#FDE68A', // Amber-200
        'warning-dark'    => '#D97706', // Amber-700
        'info'            => '#0EA5E9', // Sky-500
        'info-light'      => '#7DD3FC', // Sky-300
        'info-dark'       => '#0369A1', // Sky-700
    ],

    'theme' => [
        'light' => [
            'sidebar_bg' => 'bg-white',
            'sidebar_border' => 'border-r border-gray-200',
            'active_bg' => 'bg-gray-50',
            'active_text' => 'text-indigo-600',
            'text' => 'text-gray-700',
            'text_muted' => 'text-gray-400',
            'hover_bg' => 'hover:bg-gray-50',
            'hover_text' => 'hover:text-indigo-600',
            'team_bg' => 'bg-white',
            'team_border' => 'border-gray-200',
            'team_hover_border' => 'group-hover:border-indigo-600',
            'team_hover_text' => 'group-hover:text-indigo-600',
            'logo_color' => '?color=indigo&shade=600'
        ],
        'dark' => [
            'sidebar_bg' => 'bg-gray-900',
            'sidebar_border' => 'ring-1 ring-white/10',
            'active_bg' => 'bg-gray-800',
            'active_text' => 'text-white',
            'text' => 'text-gray-400',
            'text_muted' => 'text-gray-400',
            'hover_bg' => 'hover:bg-gray-800',
            'hover_text' => 'hover:text-white',
            'team_bg' => 'bg-gray-800',
            'team_border' => 'border-gray-700',
            'team_hover_border' => '',
            'team_hover_text' => 'group-hover:text-white',
            'logo_color' => '?color=indigo&shade=500'
        ],
        'blue' => [
            'sidebar_bg' => 'bg-indigo-600',
            'sidebar_border' => '',
            'active_bg' => 'bg-indigo-700',
            'active_text' => 'text-white',
            'text' => 'text-indigo-200',
            'text_muted' => 'text-indigo-200',
            'hover_bg' => 'hover:bg-indigo-700',
            'hover_text' => 'hover:text-white',
            'team_bg' => 'bg-indigo-500',
            'team_border' => 'border-indigo-400',
            'team_hover_border' => '',
            'team_hover_text' => 'group-hover:text-white',
            'logo_color' => '?color=white'
        ]
    ],

    'spacing' => [
        'xs' => '0.25rem',    // 4px
        'sm' => '0.5rem',     // 8px
        'md' => '1rem',       // 16px
        'lg' => '1.5rem',     // 24px
        'xl' => '2rem',       // 32px
        '2xl' => '3rem',      // 48px
    ],

    'typography' => [
        'font_sizes' => [
            'xs' => '0.75rem',    // 12px
            'sm' => '0.875rem',   // 14px
            'base' => '1rem',     // 16px
            'lg' => '1.125rem',   // 18px
            'xl' => '1.25rem',    // 20px
            '2xl' => '1.5rem',    // 24px
            '3xl' => '1.875rem',  // 30px
        ],
        'font_weights' => [
            'light' => '300',
            'normal' => '400',
            'medium' => '500',
            'semibold' => '600',
            'bold' => '700',
        ]
    ],

    // 색상 계산 유틸리티
    'color_utils' => [
        // 색상을 밝게 만드는 함수
        'lighten' => function($hex, $percent = 20) {
            return self::adjustBrightness($hex, $percent);
        },

        // 색상을 어둡게 만드는 함수
        'darken' => function($hex, $percent = 20) {
            return self::adjustBrightness($hex, -$percent);
        },

        // 색상 대비 계산
        'getContrast' => function($hex) {
            return self::calculateContrast($hex);
        },

        // 색상 투명도 조정
        'withOpacity' => function($hex, $opacity = 1) {
            return self::addOpacity($hex, $opacity);
        }
    ]
];

/**
 * 색상 밝기 조정 함수
 */
if (!function_exists('adjustBrightness')) {
    function adjustBrightness($hex, $percent) {
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
}

/**
 * 색상 대비 계산 함수
 */
if (!function_exists('calculateContrast')) {
    function calculateContrast($hex) {
        $hex = ltrim($hex, '#');

        $r = hexdec(substr($hex, 0, 2));
        $g = hexdec(substr($hex, 2, 2));
        $b = hexdec(substr($hex, 4, 2));

        $luminance = (0.299 * $r + 0.587 * $g + 0.114 * $b) / 255;

        return $luminance > 0.5 ? '#000000' : '#FFFFFF';
    }
}

/**
 * 색상에 투명도 추가 함수
 */
if (!function_exists('addOpacity')) {
    function addOpacity($hex, $opacity) {
        $hex = ltrim($hex, '#');

        $r = hexdec(substr($hex, 0, 2));
        $g = hexdec(substr($hex, 2, 2));
        $b = hexdec(substr($hex, 4, 2));

        return "rgba($r, $g, $b, $opacity)";
    }
}
