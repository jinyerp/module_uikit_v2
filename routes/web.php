<?php
use Illuminate\Support\Facades\Route;
use Jiny\Uikit\App\Http\Controllers\UikitController;

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
    Route::get('/buttons', [UikitController::class, 'buttons'])->name('uikit.buttons');
    Route::get('/alerts', [UikitController::class, 'alerts'])->name('uikit.alerts');

    Route::get('/avatars', function () {
        return view('jiny-uikit::demo.avatars');
    })->name('uikit.avatars');

        Route::get('/empty-states', [UikitController::class, 'emptyStates'])->name('uikit.empty-states');
    Route::get('/badges', [UikitController::class, 'badges'])->name('uikit.badges');
    Route::get('/breadcrumbs', [UikitController::class, 'breadcrumbs'])->name('uikit.breadcrumbs');
    Route::get('/buttons', [UikitController::class, 'buttons'])->name('uikit.buttons');
    Route::get('/cards', [UikitController::class, 'cards'])->name('uikit.cards');
    Route::get('/dropdowns', [UikitController::class, 'dropdowns'])->name('uikit.dropdowns');
    Route::get('/forms', [UikitController::class, 'forms'])->name('uikit.forms');
});
