<?php

namespace Jiny\Uikit\View\Buttons;

class ButtonRoundedWarning extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-rounded-warning';
    }

    protected function getVariant(): string
    {
        return 'warning';
    }

    protected function isRounded(): bool
    {
        return true;
    }
}
