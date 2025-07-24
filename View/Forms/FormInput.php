<?php
namespace Jiny\Uikit\View\Forms;

class FormInput extends FormInputBase
{
    public $label;
    public $id;
    public $type;

    public function __construct($label = null, $id = null, $type = null)
    {
        $this->label = $label;
        $this->type = $type;

        if($id) {
            $this->id = $id;
        } else {
            $this->id = str_replace('_', '-', $this->name);
        }
    }

    public function render()
    {
        return view('jiny-uikit::forms.input', [
            'label' => $this->label
        ]);
    }
}
