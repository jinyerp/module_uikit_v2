<?php

namespace Jiny\Uikit\App\View\Forms;

use Jiny\Uikit\App\View\Attributes;

class FormRadioItem extends FormInputBase
{
        public $value;
    public $label;
    public $groupName;
    public $checked;
        public $inline;
    public $list;
    public $description;
    public $descriptionId;

    public function __construct(
        $name = null,
        $value = null,
        $label = null,
        $id = null,
        $groupName = null,
        $checked = false,
        $required = false,
        $disabled = false,
        $class = null,
        $inline = false,
        $list = false,
        $description = null
    ) {
        parent::__construct($name, $id, $label, $checked, $required, $disabled, $class);

        $this->value = $value;
        $this->label = $label;
        $this->groupName = $groupName;
        $this->checked = $checked;
        $this->inline = $inline;
        $this->list = $list;
        $this->description = $description;
        $this->descriptionId = $this->id . '-description';
    }

        /**
     * 라디오 input에 적용할 속성들을 반환합니다.
     */
    public function radioAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $radioAttributes = [
            'id' => $this->id,
            'type' => 'radio',
            'name' => $this->groupName,
            'value' => $this->value,
            'class' => 'relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden',
        ];

        if ($this->checked) {
            $radioAttributes['checked'] = 'checked';
        }

        if ($this->required) {
            $radioAttributes['required'] = 'required';
        }

        if ($this->disabled) {
            $radioAttributes['disabled'] = 'disabled';
        }

        // description이 있으면 aria-describedby 추가
        if ($this->description) {
            $radioAttributes['aria-describedby'] = $this->descriptionId;
        }

        // $attributes에서 radio 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'radio-') && !isset($radioAttributes[$key])) {
                $radioAttributes[$key] = $value;
            }
        }

        return $radioAttributes;
    }

        /**
     * 라벨에 적용할 속성들을 반환합니다.
     */
    public function labelAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $labelAttributes = [
            'for' => $this->id,
            'class' => $this->inline ? 'ml-3 block text-sm/6 font-medium text-gray-900' : 'font-medium text-gray-900',
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
     * 컨테이너에 적용할 속성들을 반환합니다.
     */
    public function containerAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        if ($this->list) {
            $containerAttributes = [
                'class' => 'relative flex items-start pt-3.5 pb-4',
            ];
        } elseif ($this->inline) {
            $containerAttributes = [
                'class' => 'flex items-center',
            ];
        } else {
            $containerAttributes = [
                'class' => 'relative flex items-start',
            ];
        }

        // $attributes에서 container 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'container-') && !isset($containerAttributes[$key])) {
                $containerAttributes[$key] = $value;
            }
        }

        return $containerAttributes;
    }

        /**
     * 라디오 버튼 컨테이너에 적용할 속성들을 반환합니다.
     */
    public function radioContainerAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        if ($this->list) {
            $radioContainerAttributes = [
                'class' => 'ml-3 flex h-6 items-center',
            ];
        } else {
            $radioContainerAttributes = [
                'class' => 'flex h-6 items-center',
            ];
        }

        // $attributes에서 radio-container 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'radio-container-') && !isset($radioContainerAttributes[$key])) {
                $radioContainerAttributes[$key] = $value;
            }
        }

        return $radioContainerAttributes;
    }

            /**
     * 콘텐츠 컨테이너에 적용할 속성들을 반환합니다.
     */
    public function contentContainerAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        if ($this->list) {
            $contentContainerAttributes = [
                'class' => 'min-w-0 flex-1 text-sm/6',
            ];
        } elseif ($this->inline) {
            $contentContainerAttributes = [
                'class' => 'ml-3 block text-sm/6 font-medium text-gray-900',
            ];
        } else {
            $contentContainerAttributes = [
                'class' => 'ml-3 text-sm/6',
            ];
        }

        // $attributes에서 content-container 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'content-container-') && !isset($contentContainerAttributes[$key])) {
                $contentContainerAttributes[$key] = $value;
            }
        }

        return $contentContainerAttributes;
    }

    /**
     * 설명에 적용할 속성들을 반환합니다.
     */
    public function descriptionAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $descriptionAttributes = [
            'id' => $this->descriptionId,
            'class' => 'text-gray-500',
        ];

        // $attributes에서 description 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'description-') && !isset($descriptionAttributes[$key])) {
                $descriptionAttributes[$key] = $value;
            }
        }

        return $descriptionAttributes;
    }
}
