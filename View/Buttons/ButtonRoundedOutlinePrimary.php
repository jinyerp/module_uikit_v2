<?php

namespace Jiny\Uikit\View\Buttons;

class ButtonRoundedOutlinePrimary extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-rounded-outline-primary';
    }

    protected function getVariant(): string
    {
        return 'outline';
    }

    protected function isRounded(): bool
    {
        return true;
    }
}
