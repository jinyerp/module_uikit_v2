<?php

namespace Jiny\Uikit\View\Buttons;

class ButtonOutlineSuccess extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-outline-success';
    }

    protected function getVariant(): string
    {
        return 'outline';
    }

    protected function isRounded(): bool
    {
        return false;
    }
}
