<?php

use Illuminate\Support\Facades\Route;
use Strappberry\LaravelCfdiPdf\Controllers\DebugController;

if (config('app.env') == 'local') {
    Route::get('laravel-cfdi-pdf/render', [DebugController::class, 'render']);
}
