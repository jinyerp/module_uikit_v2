<?php

namespace Jiny\Uikit\View\Buttons;

class ButtonDanger extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-danger';
    }

    protected function getVariant(): string
    {
        return 'danger';
    }

    protected function isRounded(): bool
    {
        return false;
    }
}
