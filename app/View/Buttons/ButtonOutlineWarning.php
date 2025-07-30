<?php

namespace Jiny\Uikit\App\View\Buttons;

class ButtonOutlineWarning extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-outline-warning';
    }

    protected function getVariant(): string
    {
        return 'outline';
    }

    protected function isRounded(): bool
    {
        return false;
    }
}
