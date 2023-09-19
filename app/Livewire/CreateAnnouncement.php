<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use GuzzleHttp\Promise\Create;

class CreateAnnouncement extends Component

{
    use WithFileUploads;

    public $title, $description, $price, $category, $message;
    public $temporary_images;
    public $imageName;
    public $images = []; 

    

   
 
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
        public function removeImages($key){
            if(in_array($key, array_keys($this->images))){
                unset($this->images[$key]);
            }
        }
        //salvo l'annuncio
    public function store(){

        $validated = $this->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:8',
            'price' => 'required|numeric',
            'temporary_images.*' => 'image|max:1024',
            'images.*' => 'image|max:1024'
        
        ]);

        //assegno i campi all'annuncio passando per la categoria usando il metodo announcements
        $category = Category::find($this->category);
        $announcement = $category->announcements()->create([
            'title' => $this->title,
            'price'=> $this->price,
            'description' => $this->description 
        ]);
        //assegno l'annuncio all'utente
        auth()->user()->announcements()->save($announcement);
        //svuoto il form dopo il save
        $this->title='';
        $this->price='';
        $this->description= '';
        $this->category= '';
        $this->message = 'Articolo aggiunto con successo!!!';

    }
        
}
