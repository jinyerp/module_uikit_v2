<?php

namespace Jiny\Uikit\App\View\Buttons;

class ButtonSecondary extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-secondary';
    }

    protected function getVariant(): string
    {
        return 'secondary';
    }

    protected function isRounded(): bool
    {
        return false;
    }
}
