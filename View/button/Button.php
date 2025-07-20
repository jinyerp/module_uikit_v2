<?php

namespace Jiny\Uikit\View\Button;

use Illuminate\View\Component;

class Button extends Component
{
    // 상수 정의
    public const SIZES = ['xs', 'sm', 'md', 'lg', 'xl'];
    public const VARIANTS = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'outline', 'soft'];
    public const TYPES = ['button', 'submit', 'reset'];

    public $type;
    public $size;
    public $variant;
    public $disabled;
    public $fullWidth;
    public $href;

    public function __construct(
        $type = 'button',
        $size = 'md',
        $variant = 'primary',
        $disabled = false,
        $fullWidth = false,
        $href = null
    ) {
        // 유효성 검사
        $this->type = $this->validateType($type);
        $this->size = $this->validateSize($size);
        $this->variant = $this->validateVariant($variant);
        $this->disabled = (bool) $disabled;
        $this->fullWidth = (bool) $fullWidth;
        $this->href = $href;
    }

    /**
     * 버튼 타입 유효성 검사
     */
    private function validateType($type): string
    {
        if (!in_array($type, self::TYPES)) {
            return 'button';
        }
        return $type;
    }

    /**
     * 버튼 크기 유효성 검사
     */
    private function validateSize($size): string
    {
        if (!in_array($size, self::SIZES)) {
            return 'md';
        }
        return $size;
    }

    /**
     * 버튼 변형 유효성 검사
     */
    private function validateVariant($variant): string
    {
        if (!in_array($variant, self::VARIANTS)) {
            return 'primary';
        }
        return $variant;
    }

    /**
     * 컴포넌트가 비활성화되었는지 확인
     */
    public function isDisabled(): bool
    {
        return $this->disabled;
    }

    /**
     * 전체 너비 버튼인지 확인
     */
    public function isFullWidth(): bool
    {
        return $this->fullWidth;
    }

    /**
     * 링크인지 확인
     */
    public function isLink(): bool
    {
        return !empty($this->href);
    }

    /**
     * 버튼의 CSS 클래스 생성
     */
    public function getClasses(): string
    {
        $baseClasses = 'inline-flex items-center justify-center font-semibold text-white shadow-xs focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:opacity-50 disabled:cursor-not-allowed';

        // 크기별 클래스
        $sizeClasses = [
            'xs' => 'rounded-sm px-2 py-1 text-xs',
            'sm' => 'rounded-sm px-2 py-1 text-sm',
            'md' => 'rounded-md px-2.5 py-1.5 text-sm',
            'lg' => 'rounded-md px-3 py-2 text-sm',
            'xl' => 'rounded-md px-3.5 py-2.5 text-sm'
        ];

        // 변형별 클래스
        $variantClasses = [
            'primary' => 'bg-indigo-600 hover:bg-indigo-500 text-white',
            'secondary' => 'bg-gray-600 hover:bg-gray-500',
            'success' => 'bg-green-600 hover:bg-green-500',
            'danger' => 'bg-red-600 hover:bg-red-500',
            'warning' => 'bg-yellow-600 hover:bg-yellow-500',
            'info' => 'bg-blue-600 hover:bg-blue-500',
            'light' => 'bg-gray-100 hover:bg-gray-200 text-gray-900',
            'outline' => 'bg-white text-gray-900 shadow-xs ring-1 ring-gray-300 ring-inset hover:bg-gray-50',
            'soft' => 'bg-indigo-50 text-indigo-600 shadow-xs hover:bg-indigo-100'
        ];

        $classes = $baseClasses . ' ' . $sizeClasses[$this->size] . ' ' . $variantClasses[$this->variant];

        if ($this->fullWidth) {
            $classes .= ' w-full';
        }

        return $classes;
    }

    public function render()
    {
        return view('jiny-uikit::button.button');
    }
}
