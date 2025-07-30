<?php

namespace Jiny\Uikit\App\View\Components;

use Illuminate\View\Component;

class Icon extends Component
{
    public $name;
    public $size;
    public $class;

    /**
     * Create a new component instance.
     *
     * @param string|null $name
     * @param string $size
     * @param string $class
     * @return void
     */
    public function __construct($name = null, $size = 'w-5 h-5', $class = '')
    {
        $this->name = $name;
        $this->size = $size;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('jiny-uikit::components.icon');
    }
} 