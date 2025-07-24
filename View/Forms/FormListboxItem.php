<?php
namespace Jiny\Uikit\View\Forms;

class FormListboxItem extends FormInputBase
{
    public $value;
    public $selectedValue;

    public function __construct($value = null, $selectedValue = null)
    {
        $this->value = $value;
        $this->selectedValue = $selectedValue;
    }

    public function render()
    {
        return view('jiny-uikit::forms.form-listbox-item', [
            'value' => $this->value,
            'selectedValue' => $this->selectedValue
        ]);
    }
}
