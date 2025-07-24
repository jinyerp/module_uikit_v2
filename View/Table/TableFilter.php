<?php

namespace Jiny\Uikit\View\Table;

use Illuminate\View\Component;

class TableFilter extends Component
{
    public $route;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route = null)
    {
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('jiny-uikit::table.table-filter');
    }
}
