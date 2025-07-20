<?php

namespace Jiny\Uikit\View\Badge;

use Illuminate\View\Component;

class BadgePurple extends Component
{
    public $text;
    public $class;

    /**
     * Purple Badge 컴포넌트 생성
     */
    public function __construct($text = '', $class = '')
    {
        $this->text = $text;
        $this->class = $class;
    }

    /**
     * 컴포넌트 렌더링
     */
    public function render()
    {
        return view('jiny-uikit::badge.badge');
    }

    /**
     * Purple Badge CSS 클래스 반환
     */
    public function getTypeClass()
    {
        return 'inline-flex items-center rounded-md bg-purple-50 px-2 py-1 text-xs font-medium text-purple-700 ring-1 ring-purple-700/10 ring-inset';
    }
}
