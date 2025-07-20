<?php

namespace Jiny\Uikit\View\Forms;

use Jiny\Uikit\View\Attributes;

class FormRadioList extends FormRadio
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
        parent::__construct($name, $id, $legend, $description, $items, $selected, $required, $disabled, $class, false);
    }

    /**
     * 컨테이너에 적용할 속성들을 반환합니다.
     */
    public function containerAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $containerAttributes = [
            'class' => 'mt-2.5 divide-y divide-gray-200',
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
        $descriptionId = $id . '-description';

        $inputClass = 'relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden';

        $html = '<div class="relative flex items-start pt-3.5 pb-4">';
        $html .= '<div class="min-w-0 flex-1 text-sm/6">';
        $html .= '<label for="' . $id . '" class="font-medium text-gray-900">' . $label . '</label>';

        if ($description) {
            $html .= '<p id="' . $descriptionId . '" class="text-gray-500">' . $description . '</p>';
        }

        $html .= '</div>';
        $html .= '<div class="ml-3 flex h-6 items-center">';
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

        if ($description) {
            $html .= ' aria-describedby="' . $descriptionId . '"';
        }

        $html .= ' class="' . $inputClass . '" />';
        $html .= '</div>';
        $html .= '</div>';

        return $html;
    }
}
