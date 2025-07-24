<?php

namespace Jiny\Uikit\View\Buttons;

class ButtonRoundedOutlineInfo extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-rounded-outline-info';
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
