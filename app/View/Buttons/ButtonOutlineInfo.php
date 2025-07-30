<?php

namespace Jiny\Uikit\App\View\Buttons;

class ButtonOutlineInfo extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-outline-info';
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
