<?php

namespace Jiny\Uikit\View\Buttons;

class ButtonOutlinePrimary extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-outline-primary';
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
