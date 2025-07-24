<?php

namespace Jiny\Uikit\View\Buttons;

class ButtonLight extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-light';
    }

    protected function getVariant(): string
    {
        return 'light';
    }

    protected function isRounded(): bool
    {
        return false;
    }
}
