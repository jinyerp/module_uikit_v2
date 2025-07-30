<?php

namespace Jiny\Uikit\App\View\Forms;

use Illuminate\View\Component;

class FormTextarea extends Component
{
    public function __construct(
        public $name = null,
        public $id = null,
        public $label = null,
        public $value = null,
        public $rows = 4,
        public $cols = null,
        public $placeholder = null,
        public $required = false,
        public $disabled = false,
        public $readonly = false,
        public $maxlength = null,
        public $minlength = null,
        public $wrap = 'soft'
    ) {
        $this->id = $id ?? $name;
    }

    /**
     * 컴포넌트를 렌더링합니다.
     */
    public function render()
    {
        return view('jiny-uikit::components.forms.textarea');
    }
}
