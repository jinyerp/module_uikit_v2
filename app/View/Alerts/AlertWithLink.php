<?php

namespace Jiny\Uikit\App\View\Alerts;

use Illuminate\View\Component;

class AlertWithLink extends Component
{
    public $title;
    public $linkText;
    public $linkUrl;
    public $type;

    public function __construct($title = '', $linkText = '', $linkUrl = '#', $type = 'warning')
    {
        $this->title = $title;
        $this->linkText = $linkText;
        $this->linkUrl = $linkUrl;
        $this->type = $type;
    }

    public function render()
    {
        return view('jiny-uikit::components.alerts.with-link');
    }
}
