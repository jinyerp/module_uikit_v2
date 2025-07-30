<?php

namespace Jiny\Uikit\App\View\Forms;

use Jiny\Uikit\App\View\Attributes;

class FormRadio extends FormInputBase
{
    public $legend;
    public $description;
    public $items;
    public $selected;
    public $inline;

    public function __construct(
        $name = null,
        $id = null,
        $legend = null,
        $description = null,
        $items = [],
        $selected = null,
        $required = false,
        $disabled = false,
        $class = null,
        $inline = false
    ) {
        parent::__construct($name, $id, $legend, $selected, $required, $disabled, $class);

        $this->legend = $legend;
        $this->description = $description;
        $this->items = $items;
        $this->selected = $selected;
        $this->inline = $inline;
    }

    /**
     * fieldset에 적용할 속성들을 반환합니다.
     */
    public function fieldsetAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $fieldsetAttributes = [
            'class' => $this->class,
        ];

        // $attributes에서 fieldset 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'fieldset-') && !isset($fieldsetAttributes[$key])) {
                $fieldsetAttributes[$key] = $value;
            }
        }

        return $fieldsetAttributes;
    }

    /**
     * legend에 적용할 속성들을 반환합니다.
     */
    public function legendAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $legendAttributes = [
            'class' => 'text-sm/6 font-semibold text-gray-900',
        ];

        // $attributes에서 legend 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'legend-') && !isset($legendAttributes[$key])) {
                $legendAttributes[$key] = $value;
            }
        }

        return $legendAttributes;
    }

    /**
     * 설명에 적용할 속성들을 반환합니다.
     */
    public function descriptionAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $descriptionAttributes = [
            'class' => 'mt-1 text-sm/6 text-gray-600',
        ];

        // $attributes에서 description 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'description-') && !isset($descriptionAttributes[$key])) {
                $descriptionAttributes[$key] = $value;
            }
        }

        return $descriptionAttributes;
    }

    /**
     * 컨테이너에 적용할 속성들을 반환합니다.
     */
    public function containerAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $containerAttributes = [
            'class' => $this->inline ? 'mt-6 space-x-6' : 'mt-6 space-y-6',
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
     * 선택된 값이 주어진 값과 일치하는지 확인합니다.
     */
    public function isSelected($value)
    {
        if (is_array($this->selected)) {
            return in_array($value, $this->selected);
        }

        return $this->selected == $value;
    }

        /**
     * 라디오 아이템을 렌더링합니다.
     */
    public function renderItems()
    {
        $html = '';

        foreach ($this->items as $item) {
            if (is_array($item)) {
                $value = $item['value'] ?? '';
                $label = $item['label'] ?? '';
                $id = $item['id'] ?? $this->name . '_' . $value;
                $disabled = $item['disabled'] ?? false;
                $description = $item['description'] ?? null;
            } else {
                $value = $item;
                $label = $item;
                $id = $this->name . '_' . $value;
                $disabled = false;
                $description = null;
            }

            $html .= $this->renderItem($id, $value, $label, $disabled, $description);
        }

        return $html;
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

        $html = '<div class="relative flex items-start">';
        $html .= '<div class="flex h-6 items-center">';
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

        $html .= '<div class="ml-3 text-sm/6">';
        $html .= '<label for="' . $id . '" class="font-medium text-gray-900">' . $label . '</label>';

        if ($description) {
            $html .= '<p id="' . $descriptionId . '" class="text-gray-500">' . $description . '</p>';
        }

        $html .= '</div>';
        $html .= '</div>';

        return $html;
    }
}
