<?php

namespace Jiny\Uikit\View\Buttons;

class ButtonRoundedOutlineLight extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-rounded-outline-light';
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
