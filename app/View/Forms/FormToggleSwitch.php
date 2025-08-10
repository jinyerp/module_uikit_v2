<?php
namespace Jiny\Uikit\App\View\Forms;

use Illuminate\View\Component;

class FormToggleSwitch extends Component
{
    public $id;
    public $name;
    public $value;
    public $checked;
    public $label;
    public $class;
    public $ariaLabel;
    public $disabled;
    public $size;
    public $color;

    public function __construct(
        $id = null, 
        $name = null, 
        $value = null, 
        $checked = false, 
        $label = '', 
        $class = '', 
        $ariaLabel = null,
        $disabled = false,
        $size = 'md',
        $color = 'indigo'
    ) {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->value = $value === null ? 1 : $value;
        
        // checked 속성을 올바르게 처리
        if (is_bool($checked)) {
            $this->checked = $checked;
        } elseif (is_string($checked)) {
            $this->checked = in_array(strtolower($checked), ['true', '1', 'on', 'yes']);
        } else {
            $this->checked = (bool) $checked;
        }
        
        $this->label = $label;
        $this->class = $class;
        $this->ariaLabel = $ariaLabel ?? $label;
        $this->disabled = $disabled;
        $this->size = $size;
        $this->color = $color;
    }

    /**
     * 토글 스위치의 크기별 클래스를 반환
     */
    public function getSizeClasses()
    {
        switch ($this->size) {
            case 'sm':
                return [
                    'container' => 'w-8 h-4', // 작은 크기
                    'thumb' => 'size-3', // 작은 thumb
                    'translate' => 'translate-x-4', // 작은 이동 거리
                ];
            case 'lg':
                return [
                    'container' => 'w-14 h-7', // 큰 크기
                    'thumb' => 'size-6', // 큰 thumb
                    'translate' => 'translate-x-7', // 큰 이동 거리
                ];
            default: // md
                return [
                    'container' => 'w-11 h-6', // 중간 크기 (기본)
                    'thumb' => 'size-5', // 중간 thumb
                    'translate' => 'translate-x-5', // 중간 이동 거리
                ];
        }
    }

    /**
     * 토글 스위치의 색상별 클래스를 반환
     */
    public function getColorClasses()
    {
        switch ($this->color) {
            case 'blue':
                return [
                    'off' => 'bg-gray-200',
                    'on' => 'bg-blue-600',
                ];
            case 'green':
                return [
                    'off' => 'bg-gray-200',
                    'on' => 'bg-green-600',
                ];
            case 'red':
                return [
                    'off' => 'bg-gray-200',
                    'on' => 'bg-red-600',
                ];
            case 'yellow':
                return [
                    'off' => 'bg-gray-200',
                    'on' => 'bg-yellow-500',
                ];
            case 'purple':
                return [
                    'off' => 'bg-gray-200',
                    'on' => 'bg-purple-600',
                ];
            default: // indigo
                return [
                    'off' => 'bg-gray-200',
                    'on' => 'bg-indigo-600',
                ];
        }
    }

    public function render()
    {
        return view('jiny-uikit::forms.form-toggle-switch');
    }
}
