<?php
namespace Jiny\Uikit\View\Forms;

class FormSearch extends FormInputBase
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
            'search',
            $value,
            $placeholder ?? '검색어를 입력하세요...',
            $label,
            $required,
            $disabled,
            $readonly,
            $autocomplete ?? 'off',
            $class
        );
    }

    public function render()
    {
        return view('jiny-uikit::forms.input');
    }
}
