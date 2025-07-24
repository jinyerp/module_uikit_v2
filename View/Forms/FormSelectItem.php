<?php
namespace Jiny\Uikit\View\Forms;

use Illuminate\View\Component;

class FormSelectItem extends Component
{
    public $value;
    public $name;
    public $selected;

    public function __construct(
        $value = null,
        $name = null,
        $selected = null
    ) {
        $this->value = $value;
        $this->name = $name;
        $this->selected = $selected;
    }

    public function render()
    {
        return view('jiny-uikit::forms.select-item');
    }
}
