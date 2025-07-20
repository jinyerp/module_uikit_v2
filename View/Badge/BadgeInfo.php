<?php

namespace Jiny\Uikit\View\Badge;

use Illuminate\View\Component;

class BadgeInfo extends Component
{
    public $text;
    public $class;
    public $typeClass;

    /**
     * Info Badge 컴포넌트 생성
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
     * Info Badge CSS 클래스 반환
     */
    public function getTypeClass()
    {
        return 'inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-blue-700/10 ring-inset';
    }
}
