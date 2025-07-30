<?php

namespace Jiny\Uikit\App\View\Components;

use Illuminate\View\Component;

class Avatar extends Component
{
    public $src;
    public $alt;
    public $size;
    public $class;

    public function __construct($src = '', $alt = '', $size = 'size-6', $class = '')
    {
        $this->src = $src;
        $this->alt = $alt;
        $this->size = $size;
        $this->class = $class;
    }

    public function render()
    {
        return view('jiny-uikit::components.avatar');
    }
}
