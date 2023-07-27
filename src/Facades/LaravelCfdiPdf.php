<?php

namespace Strappberry\LaravelCfdiPdf\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Strappberry\LaravelCfdiPdf\LaravelCfdiPdf
 */
class LaravelCfdiPdf extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Strappberry\LaravelCfdiPdf\LaravelCfdiPdf::class;
    }
}
