<?php

namespace Jiny\Uikit\View\Buttons;

class ButtonRoundedOutlineDark extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-rounded-outline-dark';
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
