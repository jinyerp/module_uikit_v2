<?php
namespace Jiny\Uikit\View\Forms;

class FormInput extends FormInputBase
{
    public function render()
    {
        return view('jiny-uikit::forms.input', [
            'component' => $this
        ]);
    }
}
