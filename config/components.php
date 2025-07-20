<?php

return [
    /*
    |--------------------------------------------------------------------------
    | UIKit Components
    |--------------------------------------------------------------------------
    |
    | 이 파일은 jiny-uikit 패키지에서 제공하는 모든 컴포넌트를 정의합니다.
    | 각 컴포넌트는 'ui::' 네임스페이스로 등록됩니다.
    |
    */

    'badge' => [
        'badge-primary' => \Jiny\Uikit\View\Badge\BadgePrimary::class,
        'badge-danger' => \Jiny\Uikit\View\Badge\BadgeDanger::class,
        'badge-warning' => \Jiny\Uikit\View\Badge\BadgeWarning::class,
        'badge-success' => \Jiny\Uikit\View\Badge\BadgeSuccess::class,
        'badge-info' => \Jiny\Uikit\View\Badge\BadgeInfo::class,
        'badge-indigo' => \Jiny\Uikit\View\Badge\BadgeIndigo::class,
        'badge-purple' => \Jiny\Uikit\View\Badge\BadgePurple::class,
        'badge-pink' => \Jiny\Uikit\View\Badge\BadgePink::class,
    ],

        // 향후 추가될 컴포넌트들을 위한 섹션들
        'button' => [
            // Button 컴포넌트들
            'button-primary' => \Jiny\Uikit\View\Buttons\ButtonPrimary::class,
            'button-secondary' => \Jiny\Uikit\View\Buttons\ButtonSecondary::class,
            'button-success' => \Jiny\Uikit\View\Buttons\ButtonSuccess::class,
            'button-danger' => \Jiny\Uikit\View\Buttons\ButtonDanger::class,
            'button-warning' => \Jiny\Uikit\View\Buttons\ButtonWarning::class,
            'button-info' => \Jiny\Uikit\View\Buttons\ButtonInfo::class,
            'button-light' => \Jiny\Uikit\View\Buttons\ButtonLight::class,

            'button-outline-primary' => \Jiny\Uikit\View\Buttons\ButtonOutlinePrimary::class,
            'button-outline-secondary' => \Jiny\Uikit\View\Buttons\ButtonOutlineSecondary::class,
            'button-outline-success' => \Jiny\Uikit\View\Buttons\ButtonOutlineSuccess::class,
            'button-outline-danger' => \Jiny\Uikit\View\Buttons\ButtonOutlineDanger::class,
            'button-outline-warning' => \Jiny\Uikit\View\Buttons\ButtonOutlineWarning::class,
            'button-outline-info' => \Jiny\Uikit\View\Buttons\ButtonOutlineInfo::class,
            'button-outline-light' => \Jiny\Uikit\View\Buttons\ButtonOutlineLight::class,
            'button-outline-dark' => \Jiny\Uikit\View\Buttons\ButtonOutlineDark::class,

            'button-rounded-primary' => \Jiny\Uikit\View\Buttons\ButtonRoundedPrimary::class,
            'button-rounded-secondary' => \Jiny\Uikit\View\Buttons\ButtonRoundedSecondary::class,
            'button-rounded-success' => \Jiny\Uikit\View\Buttons\ButtonRoundedSuccess::class,
            'button-rounded-danger' => \Jiny\Uikit\View\Buttons\ButtonRoundedDanger::class,
            'button-rounded-warning' => \Jiny\Uikit\View\Buttons\ButtonRoundedWarning::class,
            'button-rounded-info' => \Jiny\Uikit\View\Buttons\ButtonRoundedInfo::class,
            'button-rounded-light' => \Jiny\Uikit\View\Buttons\ButtonRoundedLight::class,
            'button-rounded-dark' => \Jiny\Uikit\View\Buttons\ButtonRoundedDark::class,

            'button-rounded-outline-primary' => \Jiny\Uikit\View\Buttons\ButtonRoundedOutlinePrimary::class,
            'button-rounded-outline-secondary' => \Jiny\Uikit\View\Buttons\ButtonRoundedOutlineSecondary::class,
            'button-rounded-outline-success' => \Jiny\Uikit\View\Buttons\ButtonRoundedOutlineSuccess::class,
            'button-rounded-outline-danger' => \Jiny\Uikit\View\Buttons\ButtonRoundedOutlineDanger::class,
            'button-rounded-outline-warning' => \Jiny\Uikit\View\Buttons\ButtonRoundedOutlineWarning::class,
            'button-rounded-outline-info' => \Jiny\Uikit\View\Buttons\ButtonRoundedOutlineInfo::class,
            'button-rounded-outline-light' => \Jiny\Uikit\View\Buttons\ButtonRoundedOutlineLight::class,
            'button-rounded-outline-dark' => \Jiny\Uikit\View\Buttons\ButtonRoundedOutlineDark::class,
        ],

    'card' => [
        // Card 컴포넌트들
    ],

    'form' => [
        // Form 컴포넌트들
        'form-section' => \Jiny\Uikit\View\Forms\FormSection::class,
        'form-checkbox' => \Jiny\Uikit\View\Forms\FormCheckbox::class,
        'form-input' => \Jiny\Uikit\View\Forms\FormInput::class,
        'form-email' => \Jiny\Uikit\View\Forms\FormEmail::class,
        'form-password' => \Jiny\Uikit\View\Forms\FormPassword::class,
        'form-number' => \Jiny\Uikit\View\Forms\FormNumber::class,
        'form-tel' => \Jiny\Uikit\View\Forms\FormTel::class,
        'form-url' => \Jiny\Uikit\View\Forms\FormUrl::class,
        'form-date' => \Jiny\Uikit\View\Forms\FormDate::class,
        'form-time' => \Jiny\Uikit\View\Forms\FormTime::class,
        'form-search' => \Jiny\Uikit\View\Forms\FormSearch::class,
        'form-select-check' => \Jiny\Uikit\View\Forms\FormSelectCheck::class,
        'form-textarea' => \Jiny\Uikit\View\Forms\FormTextarea::class,
        'form-radio' => \Jiny\Uikit\View\Forms\FormRadio::class,
        'form-radio-item' => \Jiny\Uikit\View\Forms\FormRadioItem::class,
        'form-radio-inline' => \Jiny\Uikit\View\Forms\FormRadioInline::class,
        'form-radio-list' => \Jiny\Uikit\View\Forms\FormRadioList::class,
        'form-switch' => \Jiny\Uikit\View\Forms\FormSwitch::class,
        'form-panel' => \Jiny\Uikit\View\Forms\FormPanel::class,
        'alert' => \Jiny\Uikit\View\Forms\FormAlert::class,
        'alert-success' => \Jiny\Uikit\View\Forms\FormAlertSuccess::class,
        'alert-warning' => \Jiny\Uikit\View\Forms\FormAlertWarning::class,
        'alert-error' => \Jiny\Uikit\View\Forms\FormAlertError::class,
        'alert-info' => \Jiny\Uikit\View\Forms\FormAlertInfo::class,
    ],

    'modal' => [
        // Modal 컴포넌트들
    ],

    'table' => [
        // Table 컴포넌트들
    ],
];
