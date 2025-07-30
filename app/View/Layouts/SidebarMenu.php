<?php

namespace Jiny\Uikit\App\View\Layouts;

use Illuminate\View\Component;
use Jiny\Uikit\App\Services\UISidebarMenuService;
use Jiny\Uikit\App\Helpers\PathHelper;

class SidebarMenu extends Component
{
    public $theme;
    public $config;
    public $colors;
    public $menuService;
    public $menuPath;
    public $hasMenu;
    public $fileExists;

    public function __construct($theme = 'light', $config = [], $menuPath = null)
    {
        $this->theme = $theme;
        $this->config = $config;
        $this->menuPath = PathHelper::normalizePath($menuPath);
        $this->colors = $this->getThemeColors($theme);

        // menuPath가 null인 경우 메뉴 서비스를 생성하지 않음
        if ($this->menuPath !== null) {
            $this->menuService = new UISidebarMenuService($this->menuPath);
            $this->fileExists = $this->menuService->fileExists();

            // 파일이 존재하는 경우에만 활성 메뉴 설정
            if ($this->fileExists) {
                $this->menuService->setActiveMenuByUrl();
                $this->hasMenu = true;
            } else {
                $this->hasMenu = false;
            }
        } else {
            $this->menuService = null;
            $this->hasMenu = false;
            $this->fileExists = false;
        }
    }

    private function getThemeColors($theme)
    {
        $colorSchemes = [
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
        ];

        return $colorSchemes[$theme] ?? $colorSchemes['light'];
    }

    public function render()
    {
        return view('jiny-uikit::components.layouts.sidebar.base', [
            'colors' => $this->colors,
            'menuService' => $this->menuService,
            'hasMenu' => $this->hasMenu,
            'fileExists' => $this->fileExists,
            'menuPath' => $this->menuPath,
            'topMenu' => $this->hasMenu ? $this->menuService->getTopMenu() : [],
            'teamsMenu' => $this->hasMenu ? $this->menuService->getTeamsMenu() : [],
            'bottomMenu' => $this->hasMenu ? $this->menuService->getBottomMenu() : []
        ]);
    }
}
