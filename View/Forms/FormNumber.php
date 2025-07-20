<?php
namespace Jiny\Uikit\View\Forms;

class FormNumber extends FormInputBase
{
    public $min;
    public $max;
    public $step;

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
        $step = null,
        $class = null
    ) {
        parent::__construct(
            $name,
            $id,
            'number',
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
        $this->step = $step;
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

        if ($this->step !== null) {
            $attributes['step'] = $this->step;
        }

        return $attributes;
    }

    public function render()
    {
        return view('jiny-uikit::forms.input');
    }
}
