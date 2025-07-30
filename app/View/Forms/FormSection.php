<?php
namespace Jiny\Uikit\App\View\Forms;

use Illuminate\View\Component;

class FormSection extends Component
{
    public $title;
    public $description;

    public function __construct($title = '', $description = '')
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function render()
    {
        return view('jiny-uikit::forms.section');
    }
}
