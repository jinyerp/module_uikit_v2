<?php
namespace Jiny\Uikit\View\Forms;

use Illuminate\View\Component;

class FormSelectCheck extends Component
{
    public $name;
    public $id;
    public $label;
    public $options;
    public $selected;
    public $placeholder;
    public $required;
    public $disabled;
    public $class;
    public $optionValue;
    public $optionLabel;
    public $optionKey;
    public $uniqueId;

    public function __construct(
        $name = null,
        $id = null,
        $label = null,
        $selected = null,
        $placeholder = null,
        $required = false,
        $disabled = false,
        $class = null
    ) {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->label = $label;
        $this->selected = $selected;
        $this->placeholder = $placeholder ?? '선택해주세요';
        $this->required = $required;
        $this->disabled = $disabled;
        $this->class = $class;

        // 고유 ID 생성
        $this->uniqueId = $this->generateUniqueId();
    }

    /**
     * 고유 ID를 생성합니다.
     */
    private function generateUniqueId()
    {
        $base = $this->id ?? $this->name ?? 'select';
        return $base . '_' . uniqid() . '_' . rand(1000, 9999);
    }

    public function render()
    {
        return view('jiny-uikit::forms.select-check');
    }

    /**
     * 선택된 옵션의 라벨을 반환합니다.
     */
    public function getSelectedLabel()
    {
        if ($this->selected === null) {
            return $this->placeholder;
        }

        foreach ($this->options as $option) {
            $value = is_array($option) ? $option[$this->optionValue] : $option;
            if ($value == $this->selected) {
                return is_array($option) ? $option[$this->optionLabel] : $option;
            }
        }

        return $this->placeholder;
    }

    /**
     * 옵션이 선택되었는지 확인합니다.
     */
    public function isSelected($option)
    {
        $value = is_array($option) ? $option[$this->optionValue] : $option;
        return $value == $this->selected;
    }

    /**
     * 옵션의 라벨을 반환합니다.
     */
    public function getOptionLabel($option)
    {
        return is_array($option) ? $option[$this->optionLabel] : $option;
    }

    /**
     * 옵션의 값을 반환합니다.
     */
    public function getOptionValue($option)
    {
        return is_array($option) ? $option[$this->optionValue] : $option;
    }

    /**
     * 옵션의 키를 반환합니다.
     */
    public function getOptionKey($option, $index)
    {
        if (is_array($option) && isset($option[$this->optionKey])) {
            return $option[$this->optionKey];
        }
        return $index;
    }

    /**
     * 컨테이너에 적용할 속성들을 반환합니다.
     */
    public function containerAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $containerAttributes = [
            'class' => 'relative',
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
            'id' => $this->uniqueId . '-label',
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

        /**
     * 버튼에 적용할 속성들을 반환합니다.
     */
    public function buttonAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $buttonAttributes = [
            'type' => 'button',
            'aria-expanded' => 'false',
            'aria-haspopup' => 'listbox',
            'aria-labelledby' => $this->uniqueId . '-label',
            'class' => 'grid w-full cursor-default grid-cols-1 rounded-md bg-white py-1.5 pr-2 pl-3 text-left text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6',
        ];

        if ($this->disabled) {
            $buttonAttributes['disabled'] = 'disabled';
            $buttonAttributes['class'] .= ' opacity-50 cursor-not-allowed';
        }

        // $attributes에서 버튼 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'button-') && !isset($buttonAttributes[$key])) {
                $buttonAttributes[$key] = $value;
            }
        }

        return $buttonAttributes;
    }

        /**
     * 리스트박스에 적용할 속성들을 반환합니다.
     */
    public function listboxAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $listboxAttributes = [
            'role' => 'listbox',
            'tabindex' => '-1',
            'aria-labelledby' => $this->uniqueId . '-label',
            'class' => 'absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black/5 focus:outline-hidden sm:text-sm',
        ];

        // $attributes에서 리스트박스 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'listbox-') && !isset($listboxAttributes[$key])) {
                $listboxAttributes[$key] = $value;
            }
        }

        return $listboxAttributes;
    }
}
