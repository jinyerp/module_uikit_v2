<?php

namespace Jiny\Uikit\App\View\Buttons;

class ButtonOutlineDanger extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-outline-danger';
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
