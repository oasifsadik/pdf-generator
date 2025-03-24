<?php

namespace Codeurwaypdf\PdfGenerator;

use Barryvdh\DomPDF\Facade\Pdf;

class PdfGenerator
{
    public function generate(string $view, array $data = [], string $filename = 'document.pdf')
    {
        // Load the view and pass the data
        $pdf = Pdf::loadView($view, $data);
        
        // Return the PDF as a download
        return $pdf->download($filename);
    }
}
