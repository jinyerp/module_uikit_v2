<?php

namespace Jiny\Uikit\App\View\Buttons;

class ButtonRoundedDanger extends Buttons
{
    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-rounded-danger';
    }

    protected function getVariant(): string
    {
        return 'danger';
    }

    protected function isRounded(): bool
    {
        return true;
    }
}
