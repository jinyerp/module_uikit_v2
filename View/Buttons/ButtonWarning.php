<?php

namespace Jiny\Uikit\View\Buttons;

use Jiny\Uikit\View\Button\Button;

class ButtonWarning extends Button
{
    public function __construct(
        $type = 'button',
        $size = 'md',
        $disabled = false,
        $fullWidth = false,
        $href = null
    ) {
        parent::__construct($type, $size, 'warning', $disabled, $fullWidth, $href);
    }

    public function render()
    {
        return view('jiny-uikit::button.button-warning');
    }
}
