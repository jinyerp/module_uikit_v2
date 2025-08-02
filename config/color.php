<?php

return [
    // 기본 색상 팔레트
    'palette' => [
        'primary' => [
            'main' => '#1E40AF', // Blue-800
            'light' => '#3B82F6', // Blue-500
            'dark' => '#1E3A8A',  // Blue-900
            'contrast' => '#FFFFFF',
        ],
        'secondary' => [
            'main' => '#64748B', // Gray-500
            'light' => '#E5E7EB', // Gray-200
            'dark' => '#374151',  // Gray-700
            'contrast' => '#FFFFFF',
        ],
        'success' => [
            'main' => '#10B981', // Green-500
            'light' => '#6EE7B7', // Green-300
            'dark' => '#047857',  // Green-700
            'contrast' => '#FFFFFF',
        ],
        'danger' => [
            'main' => '#EF4444', // Red-500
            'light' => '#FCA5A5', // Red-300
            'dark' => '#DC2626',  // Red-700
            'contrast' => '#FFFFFF',
        ],
        'warning' => [
            'main' => '#F59E42', // Amber-500
            'light' => '#FDE68A', // Amber-200
            'dark' => '#D97706',  // Amber-700
            'contrast' => '#000000',
        ],
        'info' => [
            'main' => '#0EA5E9', // Sky-500
            'light' => '#7DD3FC', // Sky-300
            'dark' => '#0369A1',  // Sky-700
            'contrast' => '#FFFFFF',
        ],
    ],
    
    // 테마별 색상 스키마
    'themes' => [
        'light' => [
            'background' => [
                'primary' => '#FFFFFF',
                'secondary' => '#F9FAFB',
                'tertiary' => '#F3F4F6',
            ],
            'text' => [
                'primary' => '#111827',
                'secondary' => '#6B7280',
                'muted' => '#9CA3AF',
                'inverse' => '#FFFFFF',
            ],
            'border' => [
                'primary' => '#E5E7EB',
                'secondary' => '#F3F4F6',
                'focus' => '#3B82F6',
            ],
            'state' => [
                'hover' => '#F9FAFB',
                'active' => '#EFF6FF',
                'selected' => '#DBEAFE',
                'disabled' => '#F3F4F6',
            ],
        ],
        'dark' => [
            'background' => [
                'primary' => '#111827',
                'secondary' => '#1F2937',
                'tertiary' => '#374151',
            ],
            'text' => [
                'primary' => '#F9FAFB',
                'secondary' => '#D1D5DB',
                'muted' => '#9CA3AF',
                'inverse' => '#111827',
            ],
            'border' => [
                'primary' => '#374151',
                'secondary' => '#4B5563',
                'focus' => '#60A5FA',
            ],
            'state' => [
                'hover' => '#1F2937',
                'active' => '#1E40AF',
                'selected' => '#1E3A8A',
                'disabled' => '#374151',
            ],
        ],
        'blue' => [
            'background' => [
                'primary' => '#1E40AF',
                'secondary' => '#1E3A8A',
                'tertiary' => '#1D4ED8',
            ],
            'text' => [
                'primary' => '#FFFFFF',
                'secondary' => '#DBEAFE',
                'muted' => '#93C5FD',
                'inverse' => '#1E40AF',
            ],
            'border' => [
                'primary' => '#3B82F6',
                'secondary' => '#60A5FA',
                'focus' => '#FFFFFF',
            ],
            'state' => [
                'hover' => '#1E3A8A',
                'active' => '#1D4ED8',
                'selected' => '#1E3A8A',
                'disabled' => '#3B82F6',
            ],
        ],
    ],
    
    // CSS 클래스 매핑 (Tailwind CSS)
    'classes' => [
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
    ]
]; 