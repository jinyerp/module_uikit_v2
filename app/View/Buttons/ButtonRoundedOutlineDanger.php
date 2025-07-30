<?php

namespace Jiny\Uikit\App\View\Buttons;

class ButtonRoundedOutlineDanger extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-rounded-outline-danger';
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
