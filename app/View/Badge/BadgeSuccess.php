<?php

namespace Jiny\Uikit\App\View\Badge;

use Illuminate\View\Component;

class BadgeSuccess extends Component
{
    public $text;
    public $class;
    public $typeClass;

    /**
     * Success Badge 컴포넌트 생성
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
     * Success Badge CSS 클래스 반환
     */
    public function getTypeClass()
    {
        return 'inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-green-600/20 ring-inset';
    }
}
