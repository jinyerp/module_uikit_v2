<?php

namespace Jiny\Uikit\App\View\Buttons;

class ButtonWarning extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-warning';
    }

    protected function getVariant(): string
    {
        return 'warning';
    }

    protected function isRounded(): bool
    {
        return false;
    }
}
