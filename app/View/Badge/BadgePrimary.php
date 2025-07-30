<?php

namespace Jiny\Uikit\App\View\Badge;

use Illuminate\View\Component;

class BadgePrimary extends Component
{
    public $text;
    public $class;
    public $typeClass;

    /**
     * Primary Badge 컴포넌트 생성
     */
    public function __construct($text = '', $class = '')
    {
        $this->text = $text;
        $this->class = $class;
        $this->typeClass = $this->getTypeClass();
    }

    /**
     * 컴포넌트 렌더링
     */
    public function render()
    {
        return view('jiny-uikit::badge.badge');
    }

    /**
     * Primary Badge CSS 클래스 반환
     */
    public function getTypeClass()
    {
        return 'inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-gray-500/10 ring-inset';
    }
}
