<?php

namespace Jiny\Uikit\App\View\Buttons;

class ButtonOutlineLight extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-outline-light';
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
