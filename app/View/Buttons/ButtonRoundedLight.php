<?php

namespace Jiny\Uikit\App\View\Buttons;

class ButtonRoundedLight extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-rounded-light';
    }

    protected function getVariant(): string
    {
        return 'light';
    }

    protected function isRounded(): bool
    {
        return true;
    }
}
