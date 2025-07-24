<?php
namespace Jiny\Uikit\View\Components;

use Illuminate\View\Component;

class DropdownLink extends Component
{
    public $text;
    public $icon;
    public $content;
    public $id;
    public $textDefault;
    public $textActive;

    public function __construct($text = null, $icon = null, $content = null, $id = null, $textDefault = null, $textActive = null)
    {
        $this->text = $text;
        $this->icon = $icon;
        $this->content = $content;
        $this->id = $id;
        $this->textDefault = $textDefault;
        $this->textActive = $textActive;
    }

    public function render()
    {
        return view('jiny-uikit::components.dropdown-link');
    }
}
