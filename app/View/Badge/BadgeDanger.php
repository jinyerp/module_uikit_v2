<?php

namespace Jiny\Uikit\App\View\Badge;

use Illuminate\View\Component;

class BadgeDanger extends Component
{
    public $text;
    public $class;
    public $typeClass;

    /**
     * Danger Badge 컴포넌트 생성
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
     * Danger Badge CSS 클래스 반환
     */
    public function getTypeClass()
    {
        return 'inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-red-600/10 ring-inset';
    }
}
