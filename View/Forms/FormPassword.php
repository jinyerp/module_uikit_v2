<?php
namespace Jiny\Uikit\View\Forms;

class FormPassword extends FormInputBase
{
    public function __construct(
        $name = null,
        $id = null,
        $value = null,
        $placeholder = null,
        $label = null,
        $required = false,
        $disabled = false,
        $readonly = false,
        $autocomplete = null,
        $class = null
    ) {
        parent::__construct(
            $name,
            $id,
            'password',
            $value,
            $placeholder ?? '••••••••',
            $label,
            $required,
            $disabled,
            $readonly,
            $autocomplete ?? 'current-password',
            $class
        );
    }

    public function render()
    {
        return view('jiny-uikit::forms.input');
    }
}
