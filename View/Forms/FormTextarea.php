<?php

namespace Jiny\Uikit\View\Forms;

use Jiny\Uikit\View\Attributes;

class FormTextarea extends FormInputBase
{
    public $rows;
    public $cols;
    public $placeholder;
    public $maxlength;
    public $minlength;
    public $readonly;
    public $wrap;

    public function __construct(
        $name = null,
        $id = null,
        $label = null,
        $value = null,
        $rows = 4,
        $cols = null,
        $placeholder = null,
        $required = false,
        $disabled = false,
        $readonly = false,
        $class = null,
        $maxlength = null,
        $minlength = null,
        $wrap = 'soft'
    ) {
        parent::__construct($name, $id, $label, $value, $required, $disabled, $class);

        $this->rows = $rows;
        $this->cols = $cols;
        $this->placeholder = $placeholder;
        $this->maxlength = $maxlength;
        $this->minlength = $minlength;
        $this->readonly = $readonly;
        $this->wrap = $wrap;
    }

    /**
     * textarea에 적용할 속성들을 반환합니다.
     */
    public function textareaAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $textareaAttributes = [
            'id' => $this->id,
            'name' => $this->name,
            'rows' => $this->rows,
            'class' => 'block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6',
        ];

        if ($this->cols) {
            $textareaAttributes['cols'] = $this->cols;
        }

        if ($this->placeholder) {
            $textareaAttributes['placeholder'] = $this->placeholder;
        }

        if ($this->required) {
            $textareaAttributes['required'] = 'required';
        }

        if ($this->disabled) {
            $textareaAttributes['disabled'] = 'disabled';
            $textareaAttributes['class'] .= ' opacity-50 cursor-not-allowed';
        }

        if ($this->readonly) {
            $textareaAttributes['readonly'] = 'readonly';
        }

        if ($this->maxlength) {
            $textareaAttributes['maxlength'] = $this->maxlength;
        }

        if ($this->minlength) {
            $textareaAttributes['minlength'] = $this->minlength;
        }

        $textareaAttributes['wrap'] = $this->wrap;

        // $attributes에서 textarea 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'textarea-') && !isset($textareaAttributes[$key])) {
                $textareaAttributes[$key] = $value;
            }
        }

        return $textareaAttributes;
    }

    /**
     * 컨테이너에 적용할 속성들을 반환합니다.
     */
    public function containerAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $containerAttributes = [
            'class' => 'mt-2',
        ];

        // $attributes에서 컨테이너 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'container-') && !isset($containerAttributes[$key])) {
                $containerAttributes[$key] = $value;
            }
        }

        return $containerAttributes;
    }

    /**
     * 라벨에 적용할 속성들을 반환합니다.
     */
    public function labelAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $labelAttributes = [
            'for' => $this->id,
            'class' => 'block text-sm/6 font-medium text-gray-900',
        ];

        // $attributes에서 라벨 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'label-') && !isset($labelAttributes[$key])) {
                $labelAttributes[$key] = $value;
            }
        }

        return $labelAttributes;
    }
}
