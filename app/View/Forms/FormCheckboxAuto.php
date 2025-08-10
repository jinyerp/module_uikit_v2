<?php
namespace Jiny\Uikit\App\View\Forms;

use Illuminate\View\Component;

class FormCheckboxAuto extends Component
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
        
        // checked 속성을 올바르게 처리
        if (is_bool($checked)) {
            $this->checked = $checked;
        } elseif (is_string($checked)) {
            $this->checked = in_array(strtolower($checked), ['true', '1', 'on', 'yes']);
        } else {
            $this->checked = (bool) $checked;
        }
        
        $this->label = $label;
        $this->class = $class;
    }

    public function render()
    {
        return view('jiny-uikit::forms.form-checkbox-auto');
    }
}
