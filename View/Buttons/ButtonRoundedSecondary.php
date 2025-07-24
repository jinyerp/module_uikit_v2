<?php

namespace Jiny\Uikit\View\Buttons;

class ButtonRoundedSecondary extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-rounded-secondary';
    }

    protected function getVariant(): string
    {
        return 'secondary';
    }

    protected function isRounded(): bool
    {
        return true;
    }
}
