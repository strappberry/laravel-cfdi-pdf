<?php

namespace Strappberry\LaravelCfdiPdf\Controllers;

use Spipu\Html2Pdf\Html2Pdf;

class DebugController
{
    public function render()
    {
        $html = view('laravel-cfdi-pdf::layouts.default', [
            //
        ])->render();

        $html2pdf = new Html2Pdf();
        $html2pdf->writeHTML($html);
        $html2pdf->output();
    }
}
