<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $w;
    private $h;
    private $fileName;
    private $path;
    /**
     * Create a new job instance.
     */
    public function __construct($filePath, $w, $h)
    {
        $this->path = dirname($filePath);
        $this->fileName = basename($filePath);
        $this->w = $w;
        $this->h = $h;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $w = $this->w;
        $h = $this->h;
        //path attuale dove ricercare le immagini
        $searchPath = storage_path("app/public/{$this->path}/{$this->fileName}");
        //path dove salvo le immagini croppate
        $destinationPath = storage_path("app/public/{$this->path}/crop_{$w}x{$h}_{$this->fileName}");
        $watermarkPath = base_path('resources/img/watermark.png');
        
        //croppo l'immagine
        $croppedImage = Image::load($searchPath)
        ->crop(Manipulations::CROP_CENTER, $w, $h)
        ->watermark($watermarkPath)
        ->watermarkWidth(65, Manipulations::UNIT_PERCENT)
        ->watermarkHeight(65, Manipulations::UNIT_PERCENT)
        ->watermarkPosition(Manipulations::POSITION_CENTER) 
        ->watermarkPadding(30, 50, 0, 0)
        ->save($destinationPath); 
    }
}
