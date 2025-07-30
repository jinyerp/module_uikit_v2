<?php
namespace Jiny\Uikit\App\View\Forms;

use Illuminate\View\Component;

abstract class FormInputBase extends Component
{
    public $name;
    public $id;
    public $type;
    public $value;
    public $placeholder;
    public $label;
    public $required;
    public $disabled;
    public $readonly;
    public $autocomplete;
    public $class;

    public function __construct(
        $name = null,
        $id = null,
        $type = 'text',
        $value = null,
        $placeholder = null,
        $label = null,
        $required = false,
        $disabled = false,
        $readonly = false,
        $autocomplete = null,
        $class = null
    ) {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->type = $type;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->label = $label;
        $this->required = $required;
        $this->disabled = $disabled;
        $this->readonly = $readonly;
        $this->autocomplete = $autocomplete;
        $this->class = $class;
    }

    /**
     * 입력 필드에 적용할 속성들을 반환합니다.
     */
    public function inputAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        // 기본 속성들
        $inputAttributes = [
            'id' => $this->id,
            'type' => $this->type,
            'name' => $this->name,
            'value' => $this->value,
            'placeholder' => $this->placeholder,
        ];

        // 조건부 속성들
        if ($this->required) {
            $inputAttributes['required'] = 'required';
        }

        if ($this->disabled) {
            $inputAttributes['disabled'] = 'disabled';
        }

        if ($this->readonly) {
            $inputAttributes['readonly'] = 'readonly';
        }

        if ($this->autocomplete) {
            $inputAttributes['autocomplete'] = $this->autocomplete;
        }

        // 클래스 병합
        $baseClass = 'block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6';
        $inputAttributes['class'] = trim($baseClass . ' ' . ($this->class ?? '') . ' ' . ($attributes['class'] ?? ''));

        // $attributes에서 추가 속성들 병합 (class 제외)
        foreach ($attributes as $key => $value) {
            if ($key !== 'class' && !isset($inputAttributes[$key])) {
                $inputAttributes[$key] = $value;
            }
        }

        return $inputAttributes;
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
