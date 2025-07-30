<?php

namespace Jiny\Uikit\App\View\Forms;

class FormAlertSuccess extends FormAlert
{
    public function __construct(
        $title = null,
        $message = null,
        $showIcon = true,
        $dismissible = false,
        $class = null
    ) {
        parent::__construct($title, $message, 'success', $showIcon, $dismissible, $class);
    }

    public function render()
    {
        return view('jiny-uikit::forms.alert', [
            'component' => $this
        ]);
    }
}
