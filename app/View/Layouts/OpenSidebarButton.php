<?php

namespace Jiny\Uikit\App\View\Layouts;

use Illuminate\View\Component;

class OpenSidebarButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('jiny-uikit::components.open-sidebar-button');
    }
}
