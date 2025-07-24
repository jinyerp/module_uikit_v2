<?php

namespace Jiny\Uikit\View\Buttons;

class ButtonOutlineSecondary extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-outline-secondary';
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
