<?php

namespace Jiny\Uikit\App\View\Buttons;

class ButtonRoundedOutlineSuccess extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-rounded-outline-success';
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
