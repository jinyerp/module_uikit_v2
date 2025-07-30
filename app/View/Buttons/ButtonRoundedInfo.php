<?php

namespace Jiny\Uikit\App\View\Buttons;

class ButtonRoundedInfo extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-rounded-info';
    }

    protected function getVariant(): string
    {
        return 'info';
    }

    protected function isRounded(): bool
    {
        return true;
    }
}
