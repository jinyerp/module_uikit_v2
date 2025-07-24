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
        $baseClasses = 'inline-flex items-center justify-center font-semibold text-white shadow-xs focus-visible:outline-2 focus-visible:outline-offset-2 disabled:opacity-50 disabled:cursor-not-allowed';

        // 크기별 클래스
        $sizeClasses = [
            'xs' => 'rounded-sm px-2 py-1 text-xs',
            'sm' => 'rounded-sm px-2 py-1 text-sm',
            'md' => 'rounded-md px-2.5 py-1.5 text-sm',
            'lg' => 'rounded-md px-3 py-2 text-sm',
            'xl' => 'rounded-md px-3.5 py-2.5 text-sm'
        ];

        // config에서 색상값 읽기
        $colors = config('jiny.uikit.ui.color', []);
        $variantColors = [
            'primary'   => $colors['primary'] ?? '#1E40AF',
            'secondary' => $colors['secondary'] ?? '#64748B',
            'success'   => $colors['success'] ?? '#10B981',
            'danger'    => $colors['danger'] ?? '#EF4444',
            'warning'   => $colors['warning'] ?? '#F59E42',
            'info'      => $colors['info'] ?? '#0EA5E9',
            'light'     => $colors['secondary-light'] ?? '#E5E7EB',
            'outline'   => $colors['primary-light'] ?? '#3B82F6',
            'soft'      => $colors['primary-light'] ?? '#3B82F6',
        ];

        $variant = $this->variant;
        $color = $variantColors[$variant] ?? $variantColors['primary'];

        // variant별 클래스 생성 (bg, hover 등)
        $variantClasses = [
            'primary'   => 'bg-['.$color.'] hover:opacity-90 text-white',
            'secondary' => 'bg-['.$color.'] hover:opacity-90 text-white',
            'success'   => 'bg-['.$color.'] hover:opacity-90 text-white',
            'danger'    => 'bg-['.$color.'] hover:opacity-90 text-white',
            'warning'   => 'bg-['.$color.'] hover:opacity-90 text-white',
            'info'      => 'bg-['.$color.'] hover:opacity-90 text-white',
            'light'     => 'bg-['.$color.'] hover:opacity-90 text-gray-900',
            'outline'   => 'bg-white text-['.$color.'] shadow-xs ring-1 ring-gray-300 ring-inset hover:bg-gray-50',
            'soft'      => 'bg-['.$color.'] text-['.$color.'] shadow-xs hover:opacity-80',
        ];

        $classes = $baseClasses . ' ' . $sizeClasses[$this->size] . ' ' . ($variantClasses[$variant] ?? $variantClasses['primary']);

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
