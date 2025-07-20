<?php
namespace Jiny\Uikit\View\Forms;

class FormDate extends FormInputBase
{
    public $min;
    public $max;

    public function __construct(
        $name = null,
        $id = null,
        $value = null,
        $placeholder = null,
        $label = null,
        $required = false,
        $disabled = false,
        $readonly = false,
        $min = null,
        $max = null,
        $class = null
    ) {
        parent::__construct(
            $name,
            $id,
            'date',
            $value,
            $placeholder,
            $label,
            $required,
            $disabled,
            $readonly,
            null,
            $class
        );

        $this->min = $min;
        $this->max = $max;
    }

    public function inputAttributes()
    {
        $attributes = parent::inputAttributes();

        if ($this->min !== null) {
            $attributes['min'] = $this->min;
        }

        if ($this->max !== null) {
            $attributes['max'] = $this->max;
        }

        return $attributes;
    }

    public function render()
    {
        return view('jiny-uikit::forms.input');
    }
}
