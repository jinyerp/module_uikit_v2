<?php

namespace Jiny\Uikit\App\View\Buttons;

class ButtonRoundedOutlineSecondary extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-rounded-outline-secondary';
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
