<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use GuzzleHttp\Promise\Create;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\File;

class CreateAnnouncement extends Component

{
    use WithFileUploads;

    public $title, $description, $price, $category, $message;
    public $temporary_images;
    public $fileName;
    public $images = []; 
    public $imageId;
    public $formId;

        //messaggi di errore custommizzati
        protected $rules = [
            'title' => 'required|min:5',
            'description' => 'required|min:8',
            'temporary_images.*' => 'image|max:1024',
            'price' => 'required|numeric|between:0,99999.99',
            'images.*' => 'image|max:1024'
        ];
    
         //messaggi di errore custommizzati
        //'numeric'=>'Il campo :attribute deve essere numerico'
    
        protected $messages =
        ['required'=>'Il campo :attribute è obbligatorio',
        'title.required'=>'Il campo titolo è obbligatorio',
        'min'=>'Hai inserito pochi caratteri...scrivi qualcosa di più',
        'price.numeric'=>'Il prezzo deve essere un numero. es. 1234.56',
        'price.between'=>'Diminuisci il prezzo...altrimenti non venderai mai il tuo articolo!!!',
        'description.required'=>'Meglio descrivi il tuo articolo, più successo avrà.',
        'temporary_images.*.image'=>'Formato non valido. Inserisci .jpg o .png',
        'temporary_images.*.max'=>'Immagine troppo pesante. Max 1 MB.'];
    
    public function render()
      {
          return view('livewire.create-announcement');
      }
      //metto prima lettera maiuscola a input title e description
      public function capitalizeTitle()
      {
          $this->title = ucfirst($this->title);
      }
      public function capitalizeDescription()
        {
            $this->description = ucfirst($this->description);
        }
        //attribuisco il valore images[] a temporary_images + validazione
        public function updatedTemporaryImages(){
            if($this->validate([
                'temporary_images.*' => 'image'
            ])){
                foreach($this->temporary_images as $image){
                    $this->images[] = $image;
                    
                }
                
            }
        }
        //do la possibilità a utente di eliminare le foto scelte prima di salvare l'annuncio
        public function removeImage($key){
            if(in_array($key, array_keys($this->images))){
                unset($this->images[$key]);
            }
        }
        //salvo l'annuncio
    public function store(){

        $validated = $this->validate(
        );

        //assegno i campi all'annuncio passando per la categoria usando il metodo announcements
        $category = Category::find($this->category);
        
        $announcement= $category->announcements()->create($validated);
        if(count($this->images)){
            foreach($this->images as $image){
            
                $newFileName = "announcements/{$announcement->id}";
                $path = $image->store($newFileName, 'public');
                $newImage = $announcement->images()->create(['path' => $path ]);
                
             RemoveFaces::withChain([
                //croppo l'immagine
                new ResizeImage($path, 150, 150),
                //avvio la sicureszza delle immagini di google
                new GoogleVisionSafeSearch($newImage->id),
                //avvio imserimento labels immagine
                new GoogleVisionLabelImage($newImage->id),
             ])->dispatch($newImage->id);
            }
            //ho dovuto eliminare il metodo deleteDirectory perché usciva errore in vista "This driver does not support creating temporary URLs."
            //l'ho rimessa, pare funzioni ma rimangono le immagini caricate in precedenza, se funziona non si tocca xD
            File::deleteDirectory(storage_path('livewire-tmp'));
        }
        //assegno l'annuncio all'utente
      
        auth()->user()->announcements()->save($announcement);
        //svuoto il form dopo il save
        $this->title='';
        $this->price='';
        $this->description= '';
        $this->category= '';
        $this->temporary_images =[];
        //$this->images = [];
        $this->formId =uniqid();
        $this->message = 'Articolo aggiunto con successo. 
                          Attendi la conferma da parte di un revisore.';

    }
        
}
