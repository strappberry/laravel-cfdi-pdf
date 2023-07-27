<?php

namespace Strappberry\LaravelCfdiPdf;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Strappberry\LaravelCfdiPdf\Commands\LaravelCfdiPdfCommand;

class LaravelCfdiPdfServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-cfdi-pdf')
            ->hasConfigFile('cfdi-pdf')
            ->hasViews('laravel-cfdi-pdf')
            ->hasRoute('web')
            ->hasCommand(LaravelCfdiPdfCommand::class);
    }
}
