<?php

namespace Jiny\Uikit\App\View\Cards;

use Illuminate\View\Component;

class Card extends Component
{
    public $rounded;
    public $shadow;
    public $background;

    public function __construct($rounded = true, $shadow = false, $background = 'white')
    {
        $this->rounded = $rounded;
        $this->shadow = $shadow;
        $this->background = $background;
    }

    public function render()
    {
        return view('jiny-uikit::components.cards.card');
    }
}
