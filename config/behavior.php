<?php

return [
    'sidebar' => [
        'collapsible' => true,
        'remember_state' => true,
        'auto_collapse_on_mobile' => true,
        'show_user_info' => true,
        'show_team_switcher' => true,
        'max_teams_display' => 5,
        'animation_duration' => 300, // milliseconds
    ],
    
    'navigation' => [
        'breadcrumbs_enabled' => true,
        'show_page_title' => true,
        'auto_highlight_current' => true,
        'max_menu_depth' => 3,
    ],
    
    'forms' => [
        'auto_save_draft' => true,
        'draft_save_interval' => 30000, // milliseconds
        'show_validation_errors' => true,
        'highlight_required_fields' => true,
        'auto_focus_first_field' => true,
    ],
    
    'tables' => [
        'default_page_size' => 25,
        'available_page_sizes' => [10, 25, 50, 100],
        'remember_user_preferences' => true,
        'enable_sorting' => true,
        'enable_filtering' => true,
        'enable_bulk_actions' => true,
        'sticky_header' => true,
    ],
    
    'modals' => [
        'close_on_escape' => true,
        'close_on_backdrop_click' => true,
        'prevent_scroll' => true,
        'animation_duration' => 200,
    ],
    
    'notifications' => [
        'position' => 'top-right', // top-right, top-left, bottom-right, bottom-left
        'auto_hide' => true,
        'auto_hide_delay' => 5000, // milliseconds
        'max_visible' => 5,
        'stack_notifications' => true,
    ],
    
    'responsive' => [
        'mobile_breakpoint' => 768, // pixels
        'tablet_breakpoint' => 1024, // pixels
        'desktop_breakpoint' => 1280, // pixels
    ],
    
    'performance' => [
        'lazy_loading_enabled' => true,
        'image_optimization' => true,
        'cache_styles' => true,
        'minify_assets' => true,
    ],
    
    'accessibility' => [
        'enable_keyboard_navigation' => true,
        'enable_screen_reader_support' => true,
        'high_contrast_mode' => false,
        'focus_indicators' => true,
    ]
]; 