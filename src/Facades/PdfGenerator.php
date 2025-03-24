<?php

namespace Codeurwaypdf\PdfGenerator\Facades;

use Illuminate\Support\Facades\Facade;

class PdfGenerator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Codeurwaypdf\PdfGenerator\PdfGenerator::class;
    }
}
