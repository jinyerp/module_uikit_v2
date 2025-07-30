<?php

namespace Jiny\Uikit\App\View\Components;

use Illuminate\View\Component;

class SidebarItem extends Component
{
    public $item;
    public $depth;
    public $menuService;
    public $colors;

    public function __construct($item, $depth = 0, $menuService = null, $colors = [])
    {
        $this->item = $item;
        $this->depth = $depth;
        $this->menuService = $menuService;
        $this->colors = $colors;
    }

    public function render()
    {
        return view('jiny-uikit::components.sidebar-item', [
            'item' => $this->item,
            'depth' => $this->depth,
            'menuService' => $this->menuService,
            'colors' => $this->colors
        ]);
    }
}
