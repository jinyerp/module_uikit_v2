<?php

namespace Jiny\Uikit\View\Buttons;

class ButtonOutlineDark extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-outline-dark';
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
