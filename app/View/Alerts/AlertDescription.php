<?php

namespace Jiny\Uikit\App\View\Alerts;

use Illuminate\View\Component;

class AlertDescription extends Component
{
    public $title;
    public $type;

    public function __construct($title = 'Attention needed', $type = 'warning')
    {
        $this->title = $title;
        $this->type = $type;
    }

    public function render()
    {
        return view('jiny-uikit::components.alerts.description');
    }
}
