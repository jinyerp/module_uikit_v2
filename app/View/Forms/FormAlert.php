<?php

namespace Jiny\Uikit\App\View\Forms;

use Jiny\Uikit\App\View\Attributes;

class FormAlert extends FormInputBase
{
    public $title;
    public $message;
    public $type;
    public $showIcon;
    public $dismissible;

    public function __construct(
        $title = null,
        $message = null,
        $type = 'info',
        $showIcon = true,
        $dismissible = false,
        $class = null
    ) {
        parent::__construct(null, null, null, false, false, false, $class);

        $this->title = $title;
        $this->message = $message;
        $this->type = $type;
        $this->showIcon = $showIcon;
        $this->dismissible = $dismissible;
    }

    /**
     * 알림 컨테이너에 적용할 속성들을 반환합니다.
     */
    public function alertContainerAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $alertContainerAttributes = [
            'class' => $this->getAlertContainerClass(),
        ];

        // $attributes에서 alert-container 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'alert-container-') && !isset($alertContainerAttributes[$key])) {
                $alertContainerAttributes[$key] = $value;
            }
        }

        return $alertContainerAttributes;
    }

    /**
     * 아이콘 컨테이너에 적용할 속성들을 반환합니다.
     */
    public function iconContainerAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $iconContainerAttributes = [
            'class' => 'shrink-0',
        ];

        // $attributes에서 icon-container 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'icon-container-') && !isset($iconContainerAttributes[$key])) {
                $iconContainerAttributes[$key] = $value;
            }
        }

        return $iconContainerAttributes;
    }

    /**
     * 아이콘에 적용할 속성들을 반환합니다.
     */
    public function iconAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $iconAttributes = [
            'viewBox' => '0 0 20 20',
            'fill' => 'currentColor',
            'data-slot' => 'icon',
            'aria-hidden' => 'true',
            'class' => $this->getIconClass(),
        ];

        // $attributes에서 icon 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'icon-') && !isset($iconAttributes[$key])) {
                $iconAttributes[$key] = $value;
            }
        }

        return $iconAttributes;
    }

    /**
     * 내용 컨테이너에 적용할 속성들을 반환합니다.
     */
    public function contentContainerAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $contentContainerAttributes = [
            'class' => 'ml-3',
        ];

        // $attributes에서 content-container 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'content-container-') && !isset($contentContainerAttributes[$key])) {
                $contentContainerAttributes[$key] = $value;
            }
        }

        return $contentContainerAttributes;
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
     * 메시지에 적용할 속성들을 반환합니다.
     */
    public function messageAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $messageAttributes = [
            'class' => $this->getMessageClass(),
        ];

        // $attributes에서 message 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'message-') && !isset($messageAttributes[$key])) {
                $messageAttributes[$key] = $value;
            }
        }

        return $messageAttributes;
    }

    /**
     * 닫기 버튼에 적용할 속성들을 반환합니다.
     */
    public function dismissButtonAttributes()
    {
        $attributes = $this->attributes->getAttributes();

        $dismissButtonAttributes = [
            'type' => 'button',
            'class' => $this->getDismissButtonClass(),
            'aria-label' => 'Close',
        ];

        // $attributes에서 dismiss-button 관련 속성들 병합
        foreach ($attributes as $key => $value) {
            if (str_starts_with($key, 'dismiss-button-') && !isset($dismissButtonAttributes[$key])) {
                $dismissButtonAttributes[$key] = $value;
            }
        }

        return $dismissButtonAttributes;
    }

    /**
     * 알림 컨테이너의 클래스를 반환합니다.
     */
    private function getAlertContainerClass()
    {
        $baseClass = 'rounded-md p-4';

        switch ($this->type) {
            case 'success':
                return $baseClass . ' bg-green-50';
            case 'warning':
                return $baseClass . ' bg-yellow-50';
            case 'error':
                return $baseClass . ' bg-red-50';
            case 'info':
                return $baseClass . ' bg-blue-50';
            default:
                return $baseClass . ' bg-gray-50';
        }
    }

    /**
     * 아이콘의 클래스를 반환합니다.
     */
    private function getIconClass()
    {
        $baseClass = 'size-5';

        switch ($this->type) {
            case 'success':
                return $baseClass . ' text-green-400';
            case 'warning':
                return $baseClass . ' text-yellow-400';
            case 'error':
                return $baseClass . ' text-red-400';
            case 'info':
                return $baseClass . ' text-blue-400';
            default:
                return $baseClass . ' text-gray-400';
        }
    }

    /**
     * 제목의 클래스를 반환합니다.
     */
    private function getTitleClass()
    {
        $baseClass = 'text-sm font-medium';

        switch ($this->type) {
            case 'success':
                return $baseClass . ' text-green-800';
            case 'warning':
                return $baseClass . ' text-yellow-800';
            case 'error':
                return $baseClass . ' text-red-800';
            case 'info':
                return $baseClass . ' text-blue-800';
            default:
                return $baseClass . ' text-gray-800';
        }
    }

    /**
     * 메시지의 클래스를 반환합니다.
     */
    private function getMessageClass()
    {
        $baseClass = 'mt-2 text-sm';

        switch ($this->type) {
            case 'success':
                return $baseClass . ' text-green-700';
            case 'warning':
                return $baseClass . ' text-yellow-700';
            case 'error':
                return $baseClass . ' text-red-700';
            case 'info':
                return $baseClass . ' text-blue-700';
            default:
                return $baseClass . ' text-gray-700';
        }
    }

    /**
     * 닫기 버튼의 클래스를 반환합니다.
     */
    private function getDismissButtonClass()
    {
        $baseClass = 'inline-flex h-5 w-5 rounded-md p-0.5';

        switch ($this->type) {
            case 'success':
                return $baseClass . ' bg-green-50 text-green-400 hover:bg-green-100';
            case 'warning':
                return $baseClass . ' bg-yellow-50 text-yellow-400 hover:bg-yellow-100';
            case 'error':
                return $baseClass . ' bg-red-50 text-red-400 hover:bg-red-100';
            case 'info':
                return $baseClass . ' bg-blue-50 text-blue-400 hover:bg-blue-100';
            default:
                return $baseClass . ' bg-gray-50 text-gray-400 hover:bg-gray-100';
        }
    }

    /**
     * 아이콘 SVG 경로를 반환합니다.
     */
    public function getIconPath()
    {
        switch ($this->type) {
            case 'success':
                return 'M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z';
            case 'warning':
                return 'M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495ZM10 5a.75.75 0 0 1 .75.75v3.5a.75.75 0 0 1-1.5 0v-3.5A.75.75 0 0 1 10 5Zm0 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z';
            case 'error':
                return 'M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z';
            case 'info':
                return 'M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.75.75 0 01.736.686l.305 2.184a.75.75 0 001.334.613l.415-2.927a.75.75 0 00-1.415-.494l-.42 2.927a.75.75 0 01-1.334-.613L9.253 9.5H9z';
            default:
                return 'M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.75.75 0 01.736.686l.305 2.184a.75.75 0 001.334.613l.415-2.927a.75.75 0 00-1.415-.494l-.42 2.927a.75.75 0 01-1.334-.613L9.253 9.5H9z';
        }
    }

    /**
     * 컴포넌트를 렌더링합니다.
     */
    public function render()
    {
        return view('jiny::uikit.forms.alert');
    }
}
