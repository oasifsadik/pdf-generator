<?php

namespace Codeurwaypdf\PdfGenerator\Tests;

use Codeurwaypdf\PdfGenerator\Facades\PdfGenerator;
use Illuminate\Support\Facades\File;
use Orchestra\Testbench\TestCase;

class PdfGeneratorTest extends TestCase
{
    /** @test */
    public function it_generates_a_pdf()
    {
        // Data to pass into the PDF view
        $data = [
            'title' => 'Sample PDF',
            'content' => 'This is a sample PDF generated using our custom package.',
        ];

        // Generate PDF and get the output file
        $pdf = PdfGenerator::generate('pdf.sample', $data, 'test.pdf');

        // Assert that the PDF file is created successfully
        $this->assertTrue(File::exists('test.pdf'));
    }
}
