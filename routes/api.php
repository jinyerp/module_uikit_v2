<?php

use Illuminate\Support\Facades\Route;
use Jiny\Uikit\Http\Controllers\Api\UikitComponentController;
use Jiny\Uikit\Http\Controllers\Api\UikitThemeController;
use Jiny\Uikit\Http\Controllers\Api\UikitIconController;

/**
 * UIKit API Routes
 */
Route::prefix('uikit')->name('uikit.')->group(function() {

    // 컴포넌트 관련 API
    Route::prefix('components')->name('components.')->group(function() {
        Route::get('/', [UikitComponentController::class, 'index'])->name('index');
        Route::get('/{component}', [UikitComponentController::class, 'show'])->name('show');
        Route::get('/{component}/preview', [UikitComponentController::class, 'preview'])->name('preview');
        Route::get('/{component}/code', [UikitComponentController::class, 'code'])->name('code');
        Route::get('/{component}/variants', [UikitComponentController::class, 'variants'])->name('variants');
    });

    // 테마 관련 API
    Route::prefix('themes')->name('themes.')->group(function() {
        Route::get('/', [UikitThemeController::class, 'index'])->name('index');
        Route::get('/{theme}', [UikitThemeController::class, 'show'])->name('show');
        Route::get('/{theme}/preview', [UikitThemeController::class, 'preview'])->name('preview');
        Route::get('/{theme}/download', [UikitThemeController::class, 'download'])->name('download');
    });

    // 아이콘 관련 API
    Route::prefix('icons')->name('icons.')->group(function() {
        Route::get('/', [UikitIconController::class, 'index'])->name('index');
        Route::get('/search', [UikitIconController::class, 'search'])->name('search');
        Route::get('/{icon}', [UikitIconController::class, 'show'])->name('show');
        Route::get('/{icon}/svg', [UikitIconController::class, 'svg'])->name('svg');
        Route::get('/{icon}/download', [UikitIconController::class, 'download'])->name('download');
    });

    // 유틸리티 API
    Route::prefix('utils')->name('utils.')->group(function() {
        Route::get('/colors', function() {
            return response()->json([
                'primary' => ['#007bff', '#0056b3', '#004085'],
                'secondary' => ['#6c757d', '#545b62', '#3d4449'],
                'success' => ['#28a745', '#1e7e34', '#155724'],
                'danger' => ['#dc3545', '#c82333', '#a71e2a'],
                'warning' => ['#ffc107', '#e0a800', '#d39e00'],
                'info' => ['#17a2b8', '#138496', '#117a8b'],
                'light' => ['#f8f9fa', '#e2e6ea', '#dae0e5'],
                'dark' => ['#343a40', '#23272b', '#1d2124']
            ]);
        })->name('colors');

        Route::get('/spacing', function() {
            return response()->json([
                'xs' => '0.25rem',
                'sm' => '0.5rem',
                'md' => '1rem',
                'lg' => '1.5rem',
                'xl' => '3rem'
            ]);
        })->name('spacing');

        Route::get('/typography', function() {
            return response()->json([
                'h1' => ['font-size' => '2.5rem', 'font-weight' => '300'],
                'h2' => ['font-size' => '2rem', 'font-weight' => '300'],
                'h3' => ['font-size' => '1.75rem', 'font-weight' => '300'],
                'h4' => ['font-size' => '1.5rem', 'font-weight' => '300'],
                'h5' => ['font-size' => '1.25rem', 'font-weight' => '300'],
                'h6' => ['font-size' => '1rem', 'font-weight' => '300'],
                'body' => ['font-size' => '1rem', 'font-weight' => '400'],
                'small' => ['font-size' => '0.875rem', 'font-weight' => '400']
            ]);
        })->name('typography');
    });

});
