<?php

namespace Jiny\Uikit\View\Buttons;

class ButtonSuccess extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-success';
    }

    protected function getVariant(): string
    {
        return 'success';
    }

    protected function isRounded(): bool
    {
        return false;
    }
}
