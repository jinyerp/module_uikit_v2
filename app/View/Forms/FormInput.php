<?php

namespace Jiny\Uikit\App\View\Forms;

use Illuminate\View\Component;

class FormInput extends Component
{
    public function __construct(
        public $name = null,
        public $id = null,
        public $type = 'text',
        public $label = null,
        public $value = null,
        public $placeholder = null,
        public $required = false,
        public $disabled = false,
        public $readonly = false,
        public $autocomplete = null
    ) {
        $this->id = $id ?? $name;
    }

    /**
     * 컴포넌트를 렌더링합니다.
     */
    public function render()
    {
        return view('jiny-uikit::components.forms.input');
    }
}
