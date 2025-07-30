<?php

namespace Jiny\Uikit\App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UikitController extends Controller
{
    public function index()
    {
        return view('jiny-uikit::index');
    }

    public function formInput()
    {
        return view('jiny-uikit::samples.form-input');
    }

    public function formSelectCheck()
    {
        return view('jiny-uikit::samples.form-select-check');
    }

    public function formTextarea()
    {
        return view('jiny-uikit::samples.form-textarea');
    }

    public function formRadio()
    {
        return view('jiny-uikit::samples.form-radio');
    }

    public function formRadioInline()
    {
        return view('jiny-uikit::samples.form-radio-inline');
    }

    public function formRadioList()
    {
        return view('jiny-uikit::samples.form-radio-list');
    }

    public function formSwitch()
    {
        return view('jiny-uikit::samples.form-switch');
    }

    public function formPanel()
    {
        return view('jiny-uikit::samples.form-panel');
    }

    public function alert()
    {
        return view('jiny-uikit::samples.alert');
    }

    public function buttons()
    {
        return view('jiny-uikit::samples.buttons');
    }

    public function alerts(Request $request)
    {
        $theme = $request->get('theme', 'light');
        return view('jiny-uikit::demo.alerts', compact('theme'));
    }

    public function avatar()
    {
        return view('jiny-uikit::demo.avatar');
    }

    public function navTop()
    {
        return view('jiny-uikit::demo.nav-top');
    }
}
