<?php

namespace Jiny\Uikit\App\View\Badge;

use Illuminate\View\Component;

class Badge extends Component
{
    public $type;
    public $text;
    public $class;

    /**
     * Badge 컴포넌트 생성
     */
    public function __construct($type = 'primary', $text = '', $class = '')
    {
        $this->type = $type;
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
     * Badge 타입에 따른 CSS 클래스 반환
     */
    public function getTypeClass()
    {
        $classes = [
            'primary' => 'inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-gray-500/10 ring-inset',
            'danger' => 'inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-red-600/10 ring-inset',
            'warning' => 'inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-yellow-600/20 ring-inset',
            'success' => 'inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-green-600/20 ring-inset',
            'info' => 'inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-blue-700/10 ring-inset',
            'indigo' => 'inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700 ring-1 ring-indigo-700/10 ring-inset',
            'purple' => 'inline-flex items-center rounded-md bg-purple-50 px-2 py-1 text-xs font-medium text-purple-700 ring-1 ring-purple-700/10 ring-inset',
            'pink' => 'inline-flex items-center rounded-md bg-pink-50 px-2 py-1 text-xs font-medium text-pink-700 ring-1 ring-pink-700/10 ring-inset',
        ];

        return $classes[$this->type] ?? $classes['primary'];
    }
}
