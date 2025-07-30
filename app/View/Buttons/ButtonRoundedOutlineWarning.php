<?php

namespace Jiny\Uikit\App\View\Buttons;

class ButtonRoundedOutlineWarning extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-rounded-outline-warning';
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
