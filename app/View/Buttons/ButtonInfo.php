<?php

namespace Jiny\Uikit\App\View\Buttons;

class ButtonInfo extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-info';
    }

    protected function getVariant(): string
    {
        return 'info';
    }

    protected function isRounded(): bool
    {
        return false;
    }
}
