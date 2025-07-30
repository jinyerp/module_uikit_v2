<?php

namespace Jiny\Uikit\App\View\Buttons;

class ButtonRoundedDark extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-rounded-dark';
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
