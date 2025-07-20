<?php

use Illuminate\Support\Facades\Route;
use Jiny\Uikit\Http\Controllers\UikitController;
use Jiny\Uikit\Http\Controllers\Controller;

Route::prefix('uikit')->group(function () {
    Route::get('/', [UikitController::class, 'index'])->name('uikit.index');
    Route::get('/form-input', [UikitController::class, 'formInput'])->name('uikit.form-input');
    Route::get('/form-select-check', [UikitController::class, 'formSelectCheck'])->name('uikit.form-select-check');
    Route::get('/form-textarea', [UikitController::class, 'formTextarea'])->name('uikit.form-textarea');
    Route::get('/form-radio', [UikitController::class, 'formRadio'])->name('uikit.form-radio');
    Route::get('/form-radio-inline', [UikitController::class, 'formRadioInline'])->name('uikit.form-radio-inline');
    Route::get('/form-radio-list', [UikitController::class, 'formRadioList'])->name('uikit.form-radio-list');
    Route::get('/form-switch', [UikitController::class, 'formSwitch'])->name('uikit.form-switch');
    Route::get('/form-panel', [UikitController::class, 'formPanel'])->name('uikit.form-panel');
    Route::get('/alert', [UikitController::class, 'alert'])->name('uikit.alert');
});
