<?php

namespace Jiny\Uikit\App\View\ModalAjax;

use Illuminate\View\Component;

class ModalAjaxCreate extends Component
{
    public $title;
    public $size;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = null, $size = 'md')
    {
        $this->title = $title;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('jiny-uikit::modal_ajax.create-popup');
    }
}
