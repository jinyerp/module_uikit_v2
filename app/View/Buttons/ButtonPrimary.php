<?php

namespace Jiny\Uikit\App\View\Buttons;

use Jiny\Uikit\App\View\ColorComponent;

class ButtonPrimary extends ColorComponent
{
    public $color;

    public function __construct()
    {
        parent::__construct();
        $this->color = $this->colors['primary'];
    }

    protected function getViewName(): string
    {
        return 'jiny-uikit::button.button-primary';
    }

    protected function getVariant(): string
    {
        return 'primary';
    }

    protected function isRounded(): bool
    {
        return false;
    }
}
