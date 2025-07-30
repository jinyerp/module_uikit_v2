<?php

namespace Jiny\Uikit\App\View\Buttons;

class ButtonRoundedPrimary extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-rounded-primary';
    }

    protected function getVariant(): string
    {
        return 'primary';
    }

    protected function isRounded(): bool
    {
        return true;
    }
}
