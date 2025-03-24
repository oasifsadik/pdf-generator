<?php

namespace Codeurwaypdf\PdfGenerator;

use Illuminate\Support\ServiceProvider;

class PdfGeneratorServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register the PdfGenerator class
        $this->app->singleton(PdfGenerator::class, function ($app) {
            return new PdfGenerator();
        });
    }

    public function boot()
    {
        // Add any package bootstrapping code here (if necessary)
    }
}
