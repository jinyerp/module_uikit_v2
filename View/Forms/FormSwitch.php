<?php

namespace Jiny\Uikit\View\Forms;

use Jiny\Uikit\View\Attributes;

class FormSwitch extends FormInputBase
{
    public $label;
    public $ariaLabel;
    public $size;

    public function __construct(
        $name = null,
        $id = null,
        $label = null,
        $value = null,
        $checked = false,
        $required = false,
        $disabled = false,
        $class = null,
        $ariaLabel = null,
        $size = 'default'
    ) {
        parent::__construct($name, $id, $label, $checked, $required, $disabled, $class);

        $this->label = $label;
        $this->ariaLabel = $ariaLabel ?? $label;
        $this->size = $size;
    }

    public function render()
    {
        return view('jiny-uikit::forms.switch', [
            'component' => $this
        ]);
    }

    /**
     * switch 컨테이너에 적용할 속성들을 반환합니다.
     */
    public function switchContainerAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $switchContainerAttributes = [
            'class' => $this->getSwitchContainerClass(),
        ];

        // $attributes에서 switch-container 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'switch-container-') && !isset($switchContainerAttributes[$key])) {
                $switchContainerAttributes[$key] = $value;
            }
        }

        return $switchContainerAttributes;
    }

    /**
     * switch input에 적용할 속성들을 반환합니다.
     */
    public function switchInputAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $switchInputAttributes = [
            'type' => 'checkbox',
            'name' => $this->name,
            'id' => $this->id,
            'aria-label' => $this->ariaLabel,
            'class' => 'absolute inset-0 appearance-none focus:outline-hidden',
        ];

        if ($this->checked) {
            $switchInputAttributes['checked'] = 'checked';
        }

        if ($this->required) {
            $switchInputAttributes['required'] = 'required';
        }

        if ($this->disabled) {
            $switchInputAttributes['disabled'] = 'disabled';
        }

        // $attributes에서 switch-input 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'switch-input-') && !isset($switchInputAttributes[$key])) {
                $switchInputAttributes[$key] = $value;
            }
        }

        return $switchInputAttributes;
    }

    /**
     * switch thumb에 적용할 속성들을 반환합니다.
     */
    public function switchThumbAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $switchThumbAttributes = [
            'class' => $this->getSwitchThumbClass(),
        ];

        // $attributes에서 switch-thumb 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'switch-thumb-') && !isset($switchThumbAttributes[$key])) {
                $switchThumbAttributes[$key] = $value;
            }
        }

        return $switchThumbAttributes;
    }

    /**
     * 라벨에 적용할 속성들을 반환합니다.
     */
    public function labelAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $labelAttributes = [
            'for' => $this->id,
            'class' => 'text-sm font-medium text-gray-900',
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
     * switch 컨테이너의 클래스를 반환합니다.
     */
    private function getSwitchContainerClass()
    {
        $baseClass = 'group relative inline-flex shrink-0 rounded-full bg-gray-200 p-0.5 inset-ring inset-ring-gray-900/5 outline-offset-2 outline-indigo-600 transition-colors duration-200 ease-in-out has-checked:bg-indigo-600 has-focus-visible:outline-2 dark:bg-white/5 dark:inset-ring-white/10 dark:outline-indigo-500 dark:has-checked:bg-indigo-500';

        switch ($this->size) {
            case 'small':
                return $baseClass . ' w-9';
            case 'large':
                return $baseClass . ' w-14';
            default:
                return $baseClass . ' w-11';
        }
    }

    /**
     * switch thumb의 클래스를 반환합니다.
     */
    private function getSwitchThumbClass()
    {
        $baseClass = 'rounded-full bg-white shadow-xs ring-1 ring-gray-900/5 transition-transform duration-200 ease-in-out group-has-checked:translate-x-5';

        switch ($this->size) {
            case 'small':
                return $baseClass . ' size-4';
            case 'large':
                return $baseClass . ' size-6';
            default:
                return $baseClass . ' size-5';
        }
    }
}
