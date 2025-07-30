<?php
namespace Jiny\Uikit\App\View\Forms;

class FormListbox extends FormInputBase
{
    public $label;
    public $selected;
    public $name;

    public function __construct($label = null, $selected = null, $name = null)
    {
        $this->label = $label;
        $this->selected = $selected;
        $this->name = $name;
    }

    public function render()
    {
        return view('jiny-uikit::forms.form-listbox', [
            'label' => $this->label,
            'selected' => $this->selected,
            'name' => $this->name
        ]);
    }
}
