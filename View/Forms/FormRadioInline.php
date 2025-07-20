<?php

namespace Jiny\Uikit\View\Forms;

use Jiny\Uikit\View\Attributes;

class FormRadioInline extends FormRadio
{
    public function __construct(
        $name = null,
        $id = null,
        $legend = null,
        $description = null,
        $items = [],
        $selected = null,
        $required = false,
        $disabled = false,
        $class = null
    ) {
        parent::__construct($name, $id, $legend, $description, $items, $selected, $required, $disabled, $class, true);
    }

    /**
     * 컨테이너에 적용할 속성들을 반환합니다.
     */
    public function containerAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $containerAttributes = [
            'class' => 'mt-6 space-y-6 sm:flex sm:items-center sm:space-y-0 sm:space-x-10',
        ];

        // $attributes에서 container 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'container-') && !isset($containerAttributes[$key])) {
                $containerAttributes[$key] = $value;
            }
        }

        return $containerAttributes;
    }

    /**
     * 개별 라디오 아이템을 렌더링합니다.
     */
    private function renderItem($id, $value, $label, $disabled = false, $description = null)
    {
        $isSelected = $this->isSelected($value);
        $isDisabled = $this->disabled || $disabled;

        $inputClass = 'relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden';

        $html = '<div class="flex items-center">';
        $html .= '<input id="' . $id . '" type="radio" name="' . $this->name . '" value="' . $value . '"';

        if ($isSelected) {
            $html .= ' checked';
        }

        if ($isDisabled) {
            $html .= ' disabled';
        }

        if ($this->required) {
            $html .= ' required';
        }

        $html .= ' class="' . $inputClass . '" />';
        $html .= '<label for="' . $id . '" class="ml-3 block text-sm/6 font-medium text-gray-900">' . $label . '</label>';
        $html .= '</div>';

        return $html;
    }
}
