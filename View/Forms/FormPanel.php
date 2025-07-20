<?php

namespace Jiny\Uikit\View\Forms;

use Jiny\Uikit\View\Attributes;

class FormPanel extends FormInputBase
{
    public $title;
    public $description;
    public $buttonText;
    public $buttonAction;
    public $variant;

    public function __construct(
        $title = null,
        $description = null,
        $buttonText = null,
        $buttonAction = null,
        $variant = 'default',
        $class = null
    ) {
        parent::__construct(null, null, null, false, false, false, $class);

        $this->title = $title;
        $this->description = $description;
        $this->buttonText = $buttonText;
        $this->buttonAction = $buttonAction;
        $this->variant = $variant;
    }

    public function render()
    {
        return view('jiny-uikit::forms.panel', [
            'component' => $this
        ]);
    }

    /**
     * 패널 컨테이너에 적용할 속성들을 반환합니다.
     */
    public function panelContainerAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $panelContainerAttributes = [
            'class' => $this->getPanelContainerClass(),
        ];

        // $attributes에서 panel-container 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'panel-container-') && !isset($panelContainerAttributes[$key])) {
                $panelContainerAttributes[$key] = $value;
            }
        }

        return $panelContainerAttributes;
    }

    /**
     * 패널 내부 컨테이너에 적용할 속성들을 반환합니다.
     */
    public function panelInnerAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $panelInnerAttributes = [
            'class' => 'px-4 py-5 sm:p-6',
        ];

        // $attributes에서 panel-inner 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'panel-inner-') && !isset($panelInnerAttributes[$key])) {
                $panelInnerAttributes[$key] = $value;
            }
        }

        return $panelInnerAttributes;
    }

    /**
     * 제목에 적용할 속성들을 반환합니다.
     */
    public function titleAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $titleAttributes = [
            'class' => $this->getTitleClass(),
        ];

        // $attributes에서 title 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'title-') && !isset($titleAttributes[$key])) {
                $titleAttributes[$key] = $value;
            }
        }

        return $titleAttributes;
    }

    /**
     * 설명에 적용할 속성들을 반환합니다.
     */
    public function descriptionAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $descriptionAttributes = [
            'class' => $this->getDescriptionClass(),
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
     * 버튼에 적용할 속성들을 반환합니다.
     */
    public function buttonAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $buttonAttributes = [
            'type' => 'button',
            'class' => $this->getButtonClass(),
        ];

        // $attributes에서 button 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'button-') && !isset($buttonAttributes[$key])) {
                $buttonAttributes[$key] = $value;
            }
        }

        return $buttonAttributes;
    }

    /**
     * 패널 컨테이너의 클래스를 반환합니다.
     */
    private function getPanelContainerClass()
    {
        $baseClass = 'bg-gray-50 sm:rounded-lg';

        switch ($this->variant) {
            case 'success':
                return 'bg-green-50 sm:rounded-lg';
            case 'warning':
                return 'bg-yellow-50 sm:rounded-lg';
            case 'error':
                return 'bg-red-50 sm:rounded-lg';
            case 'info':
                return 'bg-blue-50 sm:rounded-lg';
            default:
                return $baseClass;
        }
    }

    /**
     * 제목의 클래스를 반환합니다.
     */
    private function getTitleClass()
    {
        $baseClass = 'text-base font-semibold text-gray-900';

        switch ($this->variant) {
            case 'success':
                return 'text-base font-semibold text-green-900';
            case 'warning':
                return 'text-base font-semibold text-yellow-900';
            case 'error':
                return 'text-base font-semibold text-red-900';
            case 'info':
                return 'text-base font-semibold text-blue-900';
            default:
                return $baseClass;
        }
    }

    /**
     * 설명의 클래스를 반환합니다.
     */
    private function getDescriptionClass()
    {
        $baseClass = 'mt-2 max-w-xl text-sm text-gray-500';

        switch ($this->variant) {
            case 'success':
                return 'mt-2 max-w-xl text-sm text-green-700';
            case 'warning':
                return 'mt-2 max-w-xl text-sm text-yellow-700';
            case 'error':
                return 'mt-2 max-w-xl text-sm text-red-700';
            case 'info':
                return 'mt-2 max-w-xl text-sm text-blue-700';
            default:
                return $baseClass;
        }
    }

    /**
     * 버튼의 클래스를 반환합니다.
     */
    private function getButtonClass()
    {
        $baseClass = 'inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs ring-1 ring-gray-300 ring-inset hover:bg-gray-50';

        switch ($this->variant) {
            case 'success':
                return 'inline-flex items-center rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-xs ring-1 ring-green-300 ring-inset hover:bg-green-700';
            case 'warning':
                return 'inline-flex items-center rounded-md bg-yellow-600 px-3 py-2 text-sm font-semibold text-white shadow-xs ring-1 ring-yellow-300 ring-inset hover:bg-yellow-700';
            case 'error':
                return 'inline-flex items-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs ring-1 ring-red-300 ring-inset hover:bg-red-700';
            case 'info':
                return 'inline-flex items-center rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-xs ring-1 ring-blue-300 ring-inset hover:bg-blue-700';
            default:
                return $baseClass;
        }
    }
}
