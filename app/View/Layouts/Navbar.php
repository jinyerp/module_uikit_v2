<?php

namespace Jiny\Uikit\App\View\Layouts;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $theme;
    public $logo;
    public $logoAlt;
    public $navItems;
    public $userName;
    public $userEmail;
    public $userAvatar;
    public $showNotifications;
    public $showMobileMenu;
    public $colors;

    public function __construct(
        $theme = 'light',
        $logo = null,
        $logoAlt = 'Your Company',
        $navItems = [],
        $userName = 'Tom Cook',
        $userEmail = 'tom@example.com',
        $userAvatar = 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        $showNotifications = true,
        $showMobileMenu = true
    ) {
        $this->theme = $theme;
        $this->logo = $logo ?? $this->getDefaultLogo($theme);
        $this->logoAlt = $logoAlt;
        $this->navItems = $navItems;
        $this->userName = $userName;
        $this->userEmail = $userEmail;
        $this->userAvatar = $userAvatar;
        $this->showNotifications = $showNotifications;
        $this->showMobileMenu = $showMobileMenu;
        $this->colors = $this->getThemeColors($theme);
    }

    private function getDefaultLogo($theme)
    {
        $logoColors = [
            'light' => '?color=indigo&shade=600',
            'dark' => '?color=indigo&shade=500',
            'blue' => '?color=indigo&shade=300'
        ];

        $color = $logoColors[$theme] ?? $logoColors['light'];
        return 'https://tailwindcss.com/plus-assets/img/logos/mark.svg' . $color;
    }

    private function getThemeColors($theme)
    {
        $colorSchemes = [
            'light' => [
                'nav_bg' => 'bg-white',
                'nav_border' => 'border-b border-gray-200',
                'active_bg' => 'bg-indigo-50',
                'active_text' => 'text-indigo-700',
                'active_border' => 'border-indigo-500',
                'text' => 'text-gray-500',
                'text_hover' => 'hover:text-gray-700',
                'border_hover' => 'hover:border-gray-300',
                'button_bg' => 'bg-white',
                'button_text' => 'text-gray-400',
                'button_hover_text' => 'hover:text-gray-500',
                'button_focus_ring' => 'focus:ring-indigo-500',
                'mobile_button_bg' => 'bg-white',
                'mobile_button_text' => 'text-gray-400',
                'mobile_button_hover_bg' => 'hover:bg-gray-100',
                'mobile_button_hover_text' => 'hover:text-gray-500',
                'mobile_menu_bg' => 'bg-white',
                'mobile_menu_border' => 'border-gray-200',
                'mobile_menu_text' => 'text-gray-600',
                'mobile_menu_hover_bg' => 'hover:bg-gray-50',
                'mobile_menu_hover_text' => 'hover:text-gray-800',
                'user_text' => 'text-gray-800',
                'user_email' => 'text-gray-500',
                'dropdown_bg' => 'bg-white',
                'dropdown_text' => 'text-gray-700',
                'dropdown_hover_bg' => 'focus:bg-gray-100'
            ],
            'dark' => [
                'nav_bg' => 'bg-gray-800',
                'nav_border' => '',
                'active_bg' => 'bg-gray-900',
                'active_text' => 'text-white',
                'active_border' => '',
                'text' => 'text-gray-300',
                'text_hover' => 'hover:text-white',
                'border_hover' => '',
                'button_bg' => 'bg-gray-800',
                'button_text' => 'text-gray-400',
                'button_hover_text' => 'hover:text-white',
                'button_focus_ring' => 'focus:ring-white',
                'mobile_button_bg' => 'bg-gray-800',
                'mobile_button_text' => 'text-gray-400',
                'mobile_button_hover_bg' => 'hover:bg-gray-700',
                'mobile_button_hover_text' => 'hover:text-white',
                'mobile_menu_bg' => 'bg-gray-800',
                'mobile_menu_border' => 'border-gray-700',
                'mobile_menu_text' => 'text-gray-300',
                'mobile_menu_hover_bg' => 'hover:bg-gray-700',
                'mobile_menu_hover_text' => 'hover:text-white',
                'user_text' => 'text-white',
                'user_email' => 'text-gray-400',
                'dropdown_bg' => 'bg-white',
                'dropdown_text' => 'text-gray-700',
                'dropdown_hover_bg' => 'focus:bg-gray-100'
            ],
            'blue' => [
                'nav_bg' => 'bg-indigo-600',
                'nav_border' => '',
                'active_bg' => 'bg-indigo-700',
                'active_text' => 'text-white',
                'active_border' => '',
                'text' => 'text-white',
                'text_hover' => 'hover:text-white',
                'border_hover' => '',
                'button_bg' => 'bg-indigo-600',
                'button_text' => 'text-indigo-200',
                'button_hover_text' => 'hover:text-white',
                'button_focus_ring' => 'focus:ring-white',
                'mobile_button_bg' => 'bg-indigo-600',
                'mobile_button_text' => 'text-indigo-200',
                'mobile_button_hover_bg' => 'hover:bg-indigo-500/75',
                'mobile_button_hover_text' => 'hover:text-white',
                'mobile_menu_bg' => 'bg-indigo-600',
                'mobile_menu_border' => 'border-indigo-700',
                'mobile_menu_text' => 'text-white',
                'mobile_menu_hover_bg' => 'hover:bg-indigo-500/75',
                'mobile_menu_hover_text' => 'hover:text-white',
                'user_text' => 'text-white',
                'user_email' => 'text-indigo-300',
                'dropdown_bg' => 'bg-white',
                'dropdown_text' => 'text-gray-700',
                'dropdown_hover_bg' => 'focus:bg-gray-100'
            ]
        ];

        return $colorSchemes[$theme] ?? $colorSchemes['light'];
    }

    public function render()
    {
        return view('jiny-uikit::components.layouts.stacked.navbar', [
            'theme' => $this->theme,
            'logo' => $this->logo,
            'logoAlt' => $this->logoAlt,
            'navItems' => $this->navItems,
            'userName' => $this->userName,
            'userEmail' => $this->userEmail,
            'userAvatar' => $this->userAvatar,
            'showNotifications' => $this->showNotifications,
            'showMobileMenu' => $this->showMobileMenu,
            'colors' => $this->colors
        ]);
    }
}
