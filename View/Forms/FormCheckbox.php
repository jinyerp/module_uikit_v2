<?php
namespace Jiny\Uikit\View\Forms;

use Illuminate\View\Component;

class FormCheckbox extends Component
{
    public $id;
    public $name;
    public $value;
    public $checked;
    public $label;
    public $class;

    public function __construct($id = null, $name = null, $value = null, $checked = false, $label = '', $class = '')
    {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->value = $value === null ? 1 : $value;
        $this->checked = filter_var($checked, FILTER_VALIDATE_BOOLEAN);
        $this->label = $label;
        $this->class = $class;
    }

    public function render()
    {
        return view('jiny-uikit::forms.checkbox');
    }
}
