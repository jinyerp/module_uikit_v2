<?php

namespace Jiny\Uikit\App\View\Buttons;

class ButtonDark extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-dark';
    }

    protected function getVariant(): string
    {
        return 'dark';
    }

    protected function isRounded(): bool
    {
        return false;
    }
}
