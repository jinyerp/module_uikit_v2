<?php

namespace Jiny\Uikit\View;

use Illuminate\View\Component;

class ColorComponent extends Component
{
    public $colors = [];

    public function __construct()
    {
        $this->colors = [
            'primary'         => '#1E40AF', // Blue-800
            'primary-light'   => '#3B82F6', // Blue-500
            'secondary'       => '#64748B', // Gray-500
            'secondary-light' => '#E5E7EB', // Gray-200
            'success'         => '#10B981', // Green-500
            'success-light'   => '#6EE7B7', // Green-300
            'danger'          => '#EF4444', // Red-500
            'danger-light'    => '#FCA5A5', // Red-300
            'warning'         => '#F59E42', // Amber-500
            'warning-light'   => '#FDE68A', // Amber-200
            'info'            => '#0EA5E9', // Sky-500
            'info-light'      => '#7DD3FC', // Sky-300
        ];
    }

    /**
     * 컴포넌트 렌더링
     */
    public function render()
    {
        $viewFile = $this->getViewName();
        return view($viewFile);
    }




}
