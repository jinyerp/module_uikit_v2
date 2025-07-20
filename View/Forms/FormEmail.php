<?php
namespace Jiny\Uikit\View\Forms;

class FormEmail extends FormInputBase
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
            'email',
            $value,
            $placeholder ?? 'you@example.com',
            $label,
            $required,
            $disabled,
            $readonly,
            $autocomplete ?? 'email',
            $class
        );
    }

    public function render()
    {
        return view('jiny-uikit::forms.input');
    }
}
