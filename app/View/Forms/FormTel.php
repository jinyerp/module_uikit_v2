<?php
namespace Jiny\Uikit\App\View\Forms;

class FormTel extends FormInputBase
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
            'tel',
            $value,
            $placeholder ?? '010-1234-5678',
            $label,
            $required,
            $disabled,
            $readonly,
            $autocomplete ?? 'tel',
            $class
        );
    }

    public function render()
    {
        return view('jiny-uikit::forms.input');
    }
}
