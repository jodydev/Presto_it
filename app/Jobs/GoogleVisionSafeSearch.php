<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionSafeSearch implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
 
    private $announcement_image_id;
    /**
     * Create a new job instance.
     */
    public function __construct($announcement_image_id)
    {
        $this->announcement_image_id = $announcement_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = Image::find($this->announcement_image_id);

        if(!$i){
            return;
        }

        $image = file_get_contents(storage_path('app/public/' . $i->path));

        put_env('GOOGLE_APPLICATION_CREDENTIALS=' .base_path('2023-05-11-hkpt-presto-user-story-7.json'));
        //faccio il controllo immagine
        $imageAnnotator = new ImageAnnotatorClient();
        $response = $imageAnnotator->safeSearcDetection($image);
        $imageAnnotator->close();
        
        //creo il semaforo e assegno il valore di sicurezza all'immagine
        $safe = $response->getSafeSearchAnnotation();

        $likelihoodName = [
            'text-secondary fas fa-circle' ,  'text-success fas fa-circle',  'text-success fas fa-circle',
            'text-warning fas fa-circle',  'text-warning fas fa-circle',  'text-danger fas fa-circle'
        ];

        $i->adult = $likelihoofName[$adult];
        $i->medical = $likelihoofName[$medical];
        $i->spoof = $likelihoofName[$spoof];
        $i->violence = $likelihoofName[$violence];
        $i->racy = $likelihoofName[$racy];

        $i->save();
        
    }
}
