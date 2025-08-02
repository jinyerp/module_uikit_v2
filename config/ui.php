<?php

return [
    // 기본 UI 설정값
    'defaults' => [
        'theme' => 'light',
        'language' => 'ko',
        'timezone' => 'Asia/Seoul',
        'sidebar_collapsed' => false,
        'show_breadcrumbs' => true,
        'show_page_title' => true,
        'auto_save_forms' => true,
        'notifications_position' => 'top-right',
    ],

    // 현재 활성화된 설정 (런타임에 변경 가능)
    'current' => [
        'theme' => env('UIKIT_THEME', 'light'),
        'sidebar_collapsed' => false,
        'show_user_info' => true,
        'show_team_switcher' => true,
    ],

    // 레거시 호환성을 위한 별칭
    'color' => config('uikit-design.color', []),
    'theme' => config('uikit-design.theme', []),
];
