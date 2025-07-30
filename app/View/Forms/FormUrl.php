<?php
namespace Jiny\Uikit\App\View\Forms;

class FormUrl extends FormInputBase
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
            'url',
            $value,
            $placeholder ?? 'https://example.com',
            $label,
            $required,
            $disabled,
            $readonly,
            $autocomplete ?? 'url',
            $class
        );
    }

    public function render()
    {
        return view('jiny-uikit::forms.input');
    }
}
