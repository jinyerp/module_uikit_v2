<?php

namespace Jiny\Uikit\View\Buttons;

use Jiny\Uikit\View\Button\Button;

abstract class Buttons extends Button
{
    public $variant;
    protected $viewName;
    protected $isRounded;

    public function __construct(
        $type = 'button',
        $size = 'md',
        $variant = 'primary',
        $disabled = false,
        $fullWidth = false,
        $href = null
    ) {
        $this->variant = $variant;
        $this->viewName = $this->getViewName();
        $this->isRounded = $this->isRounded();

        parent::__construct($type, $size, $variant, $disabled, $fullWidth, $href);
    }

    /**
     * 각 버튼 클래스에서 구현해야 하는 메소드
     * 버튼 타입에 따른 view 이름을 반환
     */
    abstract protected function getViewName(): string;

    /**
     * 각 버튼 클래스에서 구현해야 하는 메소드
     * 버튼 타입에 따른 variant를 반환
     */
    abstract protected function getVariant(): string;

    /**
     * 각 버튼 클래스에서 구현해야 하는 메소드
     * rounded 스타일 여부를 반환
     */
    abstract protected function isRounded(): bool;

    public function render()
    {
        return view($this->viewName);
    }

    /**
     * 버튼의 CSS 클래스 생성 (기본 Button 클래스의 메소드 오버라이드)
     */
    public function getClasses(): string
    {
        $baseClasses = 'inline-flex items-center justify-center font-semibold shadow-xs focus-visible:outline-2 focus-visible:outline-offset-2 disabled:opacity-50 disabled:cursor-not-allowed transition-colors duration-200';

        // 크기별 클래스
        $sizeClasses = [
            'xs' => $this->isRounded ? 'rounded-full px-2 py-1 text-xs' : 'rounded-sm px-2 py-1 text-xs',
            'sm' => $this->isRounded ? 'rounded-full px-2 py-1 text-sm' : 'rounded-sm px-2 py-1 text-sm',
            'md' => $this->isRounded ? 'rounded-full px-2.5 py-1.5 text-sm' : 'rounded-md px-2.5 py-1.5 text-sm',
            'lg' => $this->isRounded ? 'rounded-full px-3 py-2 text-sm' : 'rounded-md px-3 py-2 text-sm',
            'xl' => $this->isRounded ? 'rounded-full px-3.5 py-2.5 text-sm' : 'rounded-md px-3.5 py-2.5 text-sm'
        ];

        // 변형별 클래스
        $variantClasses = $this->getVariantClasses();

        $classes = $baseClasses . ' ' . $sizeClasses[$this->size] . ' ' . $variantClasses;

        if ($this->fullWidth) {
            $classes .= ' w-full';
        }

        return $classes;
    }

    /**
     * 각 버튼 타입별 CSS 클래스 반환
     */
    protected function getVariantClasses(): string
    {
        $variant = $this->getVariant();

        $classes = [
            'primary' => 'bg-indigo-600 hover:bg-indigo-500 text-white focus-visible:outline-indigo-600',
            'secondary' => 'bg-gray-600 hover:bg-gray-500 text-white focus-visible:outline-gray-600',
            'success' => 'bg-green-600 hover:bg-green-500 text-white focus-visible:outline-green-600',
            'danger' => 'bg-red-600 hover:bg-red-500 text-white focus-visible:outline-red-600',
            'warning' => 'bg-yellow-600 hover:bg-yellow-500 text-white focus-visible:outline-yellow-600',
            'info' => 'bg-blue-600 hover:bg-blue-500 text-white focus-visible:outline-blue-600',
            'light' => 'bg-gray-100 hover:bg-gray-200 text-gray-900 focus-visible:outline-gray-600',
            'outline' => 'bg-white text-gray-900 shadow-xs ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus-visible:outline-gray-600',
            'soft' => 'bg-indigo-50 text-indigo-600 shadow-xs hover:bg-indigo-100 focus-visible:outline-indigo-600'
        ];

        return $classes[$variant] ?? $classes['primary'];
    }
}
