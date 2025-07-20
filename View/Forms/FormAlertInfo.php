<?php

namespace Jiny\Uikit\View\Forms;

class FormAlertInfo extends FormAlert
{
    public function __construct(
        $title = null,
        $message = null,
        $showIcon = true,
        $dismissible = false,
        $class = null
    ) {
        parent::__construct($title, $message, 'info', $showIcon, $dismissible, $class);
    }

    public function render()
    {
        return view('jiny-uikit::forms.alert', [
            'component' => $this
        ]);
    }
}
