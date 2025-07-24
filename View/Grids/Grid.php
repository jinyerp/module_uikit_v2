<?php

namespace Jiny\Uikit\View\Grids;

use Illuminate\View\Component;

class Grid extends Component
{
    public $col;

    /**
     * Create a new component instance.
     *
     * @param int $col
     * @return void
     */
    public function __construct($col = 1)
    {
        $this->col = $col;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('jiny-uikit::grids.grid');
    }
}
