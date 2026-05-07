<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;

class ExportStaticSite extends Command
{
    protected $signature = 'export:static';
    protected $description = 'Exporta todas las vistas de Blade a archivos HTML estáticos en dist/';

    public function handle()
    {
        $this->info('Iniciando exportación...');

        $routes = [
            '/' => 'home',
            '/projects/factibilidad' => 'projects.factibilidad',
            '/projects/areacostanera' => 'projects.areacostanera',

        ];

        File::ensureDirectoryExists(base_path('dist/images/factibilidad'));

        foreach ($routes as $url => $viewName) {
            $html = View::make($viewName)->render();

            $outputPath = $url === '/' ? '/index.html' : $url . '/index.html';
            $fullPath = base_path('dist' . $outputPath);

            File::ensureDirectoryExists(dirname($fullPath));

            File::put($fullPath, $html);
        }

        if (File::isDirectory(public_path('images'))) {
            File::copyDirectory(public_path('images'), base_path('dist/images'));
        }
    }
}
