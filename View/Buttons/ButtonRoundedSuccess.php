<?php

namespace Jiny\Uikit\View\Buttons;

class ButtonRoundedSuccess extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-rounded-success';
    }

    protected function getVariant(): string
    {
        return 'success';
    }

    protected function isRounded(): bool
    {
        return true;
    }
}
