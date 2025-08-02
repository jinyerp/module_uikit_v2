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
        'badge-primary' => \Jiny\Uikit\App\View\Badge\BadgePrimary::class,
        'badge-danger' => \Jiny\Uikit\App\View\Badge\BadgeDanger::class,
        'badge-warning' => \Jiny\Uikit\App\View\Badge\BadgeWarning::class,
        'badge-success' => \Jiny\Uikit\App\View\Badge\BadgeSuccess::class,
        'badge-info' => \Jiny\Uikit\App\View\Badge\BadgeInfo::class,
        'badge-indigo' => \Jiny\Uikit\App\View\Badge\BadgeIndigo::class,
        'badge-purple' => \Jiny\Uikit\App\View\Badge\BadgePurple::class,
        'badge-pink' => \Jiny\Uikit\App\View\Badge\BadgePink::class,
    ],

    // 향후 추가될 컴포넌트들을 위한 섹션들
    'button' => [
        // Button 컴포넌트들
        'button-primary' => \Jiny\Uikit\App\View\Buttons\ButtonPrimary::class,
        'button-secondary' => \Jiny\Uikit\App\View\Buttons\ButtonSecondary::class,
        'button-success' => \Jiny\Uikit\App\View\Buttons\ButtonSuccess::class,
        'button-danger' => \Jiny\Uikit\App\View\Buttons\ButtonDanger::class,
        'button-warning' => \Jiny\Uikit\App\View\Buttons\ButtonWarning::class,
        'button-info' => \Jiny\Uikit\App\View\Buttons\ButtonInfo::class,
        'button-light' => \Jiny\Uikit\App\View\Buttons\ButtonLight::class,
        'button-dark' => 'jiny-uikit::button.button-dark',

        'button-outline-primary' => \Jiny\Uikit\App\View\Buttons\ButtonOutlinePrimary::class,
        'button-outline-secondary' => \Jiny\Uikit\App\View\Buttons\ButtonOutlineSecondary::class,
        'button-outline-success' => \Jiny\Uikit\App\View\Buttons\ButtonOutlineSuccess::class,
        'button-outline-danger' => \Jiny\Uikit\App\View\Buttons\ButtonOutlineDanger::class,
        'button-outline-warning' => \Jiny\Uikit\App\View\Buttons\ButtonOutlineWarning::class,
        'button-outline-info' => \Jiny\Uikit\App\View\Buttons\ButtonOutlineInfo::class,
        'button-outline-light' => \Jiny\Uikit\App\View\Buttons\ButtonOutlineLight::class,
        'button-outline-dark' => \Jiny\Uikit\App\View\Buttons\ButtonOutlineDark::class,

        'button-rounded-primary' => \Jiny\Uikit\App\View\Buttons\ButtonRoundedPrimary::class,
        'button-rounded-secondary' => \Jiny\Uikit\App\View\Buttons\ButtonRoundedSecondary::class,
        'button-rounded-success' => \Jiny\Uikit\App\View\Buttons\ButtonRoundedSuccess::class,
        'button-rounded-danger' => \Jiny\Uikit\App\View\Buttons\ButtonRoundedDanger::class,
        'button-rounded-warning' => \Jiny\Uikit\App\View\Buttons\ButtonRoundedWarning::class,
        'button-rounded-info' => \Jiny\Uikit\App\View\Buttons\ButtonRoundedInfo::class,
        'button-rounded-light' => \Jiny\Uikit\App\View\Buttons\ButtonRoundedLight::class,
        'button-rounded-dark' => \Jiny\Uikit\App\View\Buttons\ButtonRoundedDark::class,

        'button-rounded-outline-primary' => \Jiny\Uikit\App\View\Buttons\ButtonRoundedOutlinePrimary::class,
        'button-rounded-outline-secondary' => \Jiny\Uikit\App\View\Buttons\ButtonRoundedOutlineSecondary::class,
        'button-rounded-outline-success' => \Jiny\Uikit\App\View\Buttons\ButtonRoundedOutlineSuccess::class,
        'button-rounded-outline-danger' => \Jiny\Uikit\App\View\Buttons\ButtonRoundedOutlineDanger::class,
        'button-rounded-outline-warning' => \Jiny\Uikit\App\View\Buttons\ButtonRoundedOutlineWarning::class,
        'button-rounded-outline-info' => \Jiny\Uikit\App\View\Buttons\ButtonRoundedOutlineInfo::class,
        'button-rounded-outline-light' => \Jiny\Uikit\App\View\Buttons\ButtonRoundedOutlineLight::class,
        'button-rounded-outline-dark' => \Jiny\Uikit\App\View\Buttons\ButtonRoundedOutlineDark::class,
    ],

    'card' => [
        'card' => \Jiny\Uikit\App\View\Cards\Card::class,
    ],

    'form' => [
        // Form 컴포넌트들
        'form-section' => \Jiny\Uikit\App\View\Forms\FormSection::class,
        'form-checkbox' => \Jiny\Uikit\App\View\Forms\FormCheckbox::class,
        'form-input' => \Jiny\Uikit\App\View\Forms\FormInput::class,
        'form-email' => \Jiny\Uikit\App\View\Forms\FormEmail::class,
        'form-password' => \Jiny\Uikit\App\View\Forms\FormPassword::class,
        'form-number' => \Jiny\Uikit\App\View\Forms\FormNumber::class,
        'form-tel' => \Jiny\Uikit\App\View\Forms\FormTel::class,
        'form-phone' => \Jiny\Uikit\App\View\Forms\FormTel::class,
        'form-url' => \Jiny\Uikit\App\View\Forms\FormUrl::class,
        'form-date' => \Jiny\Uikit\App\View\Forms\FormDate::class,
        'form-time' => \Jiny\Uikit\App\View\Forms\FormTime::class,
        'form-search' => \Jiny\Uikit\App\View\Forms\FormSearch::class,

        'form-select-check' => \Jiny\Uikit\App\View\Forms\FormSelectCheck::class,
        'form-select-item' => \Jiny\Uikit\App\View\Forms\FormSelectItem::class,
        'form-listbox' => \Jiny\Uikit\App\View\Forms\FormListbox::class,
        'form-listbox-item' => \Jiny\Uikit\App\View\Forms\FormListboxItem::class,
        'form-textarea' => \Jiny\Uikit\App\View\Forms\FormTextarea::class,
        'form-radio' => \Jiny\Uikit\App\View\Forms\FormRadio::class,
        'form-radio-item' => \Jiny\Uikit\App\View\Forms\FormRadioItem::class,
        'form-radio-inline' => \Jiny\Uikit\App\View\Forms\FormRadioInline::class,
        'form-radio-list' => \Jiny\Uikit\App\View\Forms\FormRadioList::class,
        'form-switch' => \Jiny\Uikit\App\View\Forms\FormSwitch::class,
        'form-panel' => \Jiny\Uikit\App\View\Forms\FormPanel::class,
        'alert' => \Jiny\Uikit\App\View\Forms\FormAlert::class,
        'alert-success' => \Jiny\Uikit\App\View\Forms\FormAlertSuccess::class,
        'alert-warning' => \Jiny\Uikit\App\View\Forms\FormAlertWarning::class,
        'alert-error' => \Jiny\Uikit\App\View\Forms\FormAlertError::class,
        'alert-info' => \Jiny\Uikit\App\View\Forms\FormAlertInfo::class,
    ],

    'modal' => [
        // Modal 컴포넌트들
    ],

    'modal_ajax' => [
        'create-popup' => \Jiny\Uikit\App\View\ModalAjax\ModalAjaxCreate::class,
    ],

    // 팝업 컴포넌트들
    'popup' => [
        'popup-create' => \Jiny\Uikit\App\View\Popup\PopupCreate::class,
        'popup-edit' => \Jiny\Uikit\App\View\Popup\PopupEdit::class,
    ],

    'table' => [
        // Table 컴포넌트들
        'table-stripe' => \Jiny\Uikit\App\View\Table\TableStripe::class,
        'table-thead' => \Jiny\Uikit\App\View\Table\TableThead::class,
        'table-th' => \Jiny\Uikit\App\View\Table\TableTh::class,
        'table-row' => \Jiny\Uikit\App\View\Table\TableRow::class,
        'table-filter' => \Jiny\Uikit\App\View\Table\TableFilter::class,
        'table-border' => \Jiny\Uikit\App\View\Table\TableBorder::class,
    ],

    'dropdown' => [
        'dropdown-link' => \Jiny\Uikit\App\View\Components\DropdownLink::class,
    ],

    'grid' => [
        'grid' => \Jiny\Uikit\App\View\Grids\Grid::class,
    ],

    'div' => [
        'border-rounded' => \Jiny\Uikit\App\View\Div\BorderRounded::class,
    ],

    'alert' => [
        'alert-description' => \Jiny\Uikit\App\View\Alerts\AlertDescription::class,
        'alert-with-link' => \Jiny\Uikit\App\View\Alerts\AlertWithLink::class,
        'alert-with-list' => \Jiny\Uikit\App\View\Alerts\AlertWithList::class,
    ],

    'sidebar' => [
        'menu' => \Jiny\Uikit\App\View\Layouts\SidebarMenu::class,
        'sidebar-menu' => \Jiny\Uikit\App\View\Layouts\SidebarMenu::class,
        'open-sidebar-button' => \Jiny\Uikit\App\View\Layouts\OpenSidebarButton::class,
    ],

    'icon' => [
        'icon' => \Jiny\Uikit\App\View\Components\Icon::class,
    ],

    'avatar' => [
        'avatar' => \Jiny\Uikit\App\View\Components\Avatar::class,
    ],

    'nav' => [
        'navbar' => \Jiny\Uikit\App\View\Layouts\Navbar::class,
    ],

    'link' => [
        'link-primary' => 'jiny-uikit::links.link-primary',
        'link-secondary' => 'jiny-uikit::links.link-secondary',
        'link-success' => 'jiny-uikit::links.link-success',
        'link-info' => 'jiny-uikit::links.link-info',
        'link-warning' => 'jiny-uikit::links.link-warning',
        'link-danger' => 'jiny-uikit::links.link-danger',
        'link-light' => 'jiny-uikit::links.link-light',
        'link-dark' => 'jiny-uikit::links.link-dark',
    ]
];
