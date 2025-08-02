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

    public function __construct($theme = null, $config = [], $menuPath = null)
    {
        // 테마 설정: 전달받은 테마가 있으면 사용, 없으면 기본값 사용
        $this->theme = $theme ?? config('uikit-ui.defaults.theme', 'light');
        $this->config = $config;
        $this->menuPath = PathHelper::normalizePath($menuPath);
        
        // 색상 설정: 새로운 color.php에서 읽어오기
        $this->colors = $this->getThemeColors($this->theme);

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
        // 새로운 color.php 설정에서 CSS 클래스 읽어오기
        $themeColors = config('uikit-color.classes.' . $theme);
        
        if ($themeColors) {
            return $themeColors;
        }
        
        // 기본값으로 light 테마 반환
        return config('uikit-color.classes.light', [
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
        ]);
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
