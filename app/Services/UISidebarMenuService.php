<?php

namespace Jiny\Uikit\App\Services;

use Illuminate\Support\Facades\File;
use Jiny\Uikit\App\Helpers\PathHelper;

class UISidebarMenuService
{
    protected $menuData;
    protected $menuPath;
    protected $fileExists;

    public function __construct($menuPath = null)
    {
        $this->menuPath = PathHelper::normalizePath($menuPath ?? __DIR__ . '/../../../resources/menus/sidebar.json');
        $this->loadMenuData();
    }

    protected function loadMenuData()
    {
        if (File::exists($this->menuPath)) {
            $this->fileExists = true;
            $jsonContent = File::get($this->menuPath);
            $this->menuData = json_decode($jsonContent, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                $this->menuData = null;
            }
        } else {
            $this->fileExists = false;
            $this->menuData = null;
        }
    }

    public function fileExists()
    {
        return $this->fileExists;
    }

    public function getTopMenu()
    {
        return $this->menuData['top_menu'] ?? [];
    }

    public function getTeamsMenu()
    {
        return $this->menuData['teams'] ?? [];
    }

    public function getBottomMenu()
    {
        return $this->menuData['bottom_menu'] ?? [];
    }

    public function setActiveMenuByUrl($currentUrl = null)
    {
        if (!$this->menuData) {
            return;
        }

        $currentUrl = $currentUrl ?? request()->path();

        // 모든 메뉴에서 활성 상태 초기화
        $this->resetActiveState($this->menuData);

        // 현재 URL과 일치하는 메뉴 찾기
        $this->setActiveMenuRecursive($this->menuData, $currentUrl);
    }

    private function resetActiveState(&$menuData)
    {
        if (isset($menuData['top_menu'])) {
            foreach ($menuData['top_menu'] as &$item) {
                $this->resetActiveStateRecursive($item);
            }
        }
        if (isset($menuData['teams'])) {
            foreach ($menuData['teams'] as &$item) {
                $this->resetActiveStateRecursive($item);
            }
        }
        if (isset($menuData['bottom_menu'])) {
            foreach ($menuData['bottom_menu'] as &$item) {
                $this->resetActiveStateRecursive($item);
            }
        }
    }

    private function resetActiveStateRecursive(&$item)
    {
        if (isset($item['active'])) {
            $item['active'] = false;
        }
        if (isset($item['children']) && is_array($item['children'])) {
            foreach ($item['children'] as &$child) {
                $this->resetActiveStateRecursive($child);
            }
        }
    }

    private function setActiveMenuRecursive(&$menuData, $currentUrl)
    {
        $sections = ['top_menu', 'teams', 'bottom_menu'];

        foreach ($sections as $section) {
            if (isset($menuData[$section])) {
                foreach ($menuData[$section] as &$item) {
                    $this->setActiveMenuRecursiveChildren($item, $currentUrl);
                }
            }
        }
    }

    private function setActiveMenuRecursiveChildren(&$item, $currentUrl)
    {
        if (isset($item['url']) && PathHelper::isUrlMatch($item['url'], $currentUrl)) {
            $item['active'] = true;
        }

        if (isset($item['children']) && is_array($item['children'])) {
            foreach ($item['children'] as &$child) {
                $this->setActiveMenuRecursiveChildren($child, $currentUrl);
            }

            // 자식 중에 활성 상태가 있으면 부모도 활성으로 설정
            if ($this->hasActiveChild($item['children'])) {
                $item['active'] = true;
            }
        }
    }

    private function hasActiveChild($children)
    {
        foreach ($children as $child) {
            if (isset($child['active']) && $child['active']) {
                return true;
            }
            if (isset($child['children']) && $this->hasActiveChild($child['children'])) {
                return true;
            }
        }
        return false;
    }
}
