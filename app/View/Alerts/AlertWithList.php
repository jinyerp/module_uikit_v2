<?php

namespace Jiny\Uikit\App\View\Alerts;

use Illuminate\View\Component;

class AlertWithList extends Component
{
    public $title;
    public $items;
    public $type;

    public function __construct($title = '', $items = [], $type = 'danger')
    {
        $this->title = $title;
        $this->items = $items;
        $this->type = $type;
    }

    public function render()
    {
        return view('jiny-uikit::components.alerts.with-list');
    }
}
