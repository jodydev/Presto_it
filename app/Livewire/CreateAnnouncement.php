<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use GuzzleHttp\Promise\Create;

class CreateAnnouncement extends Component

{
    
    public $title, $description, $price, $category, $message;

    protected $rules = [
        'title' => 'required|min:5',
        'description' => 'required|min:8',
        'price' => 'required|numeric',
        'category' => 'required'

    ];

    protected $messages = [
        'required' => 'il campo :attribute è obbligatorio',
        'min' => 'il campo :attribute è troppo corto',
        'numeric' => 'il campo :attribute deve essere un numero'
    ];
   
    public function render()
      {
          return view('livewire.create-announcement');
      }
      public function updated($propertyName){
        $this->validatedOnly($propertyName);
      }

    public function store(){
        $categories = Category::all();
        $announcement = new Announcement();

        $announcement->title = $this->title;
        $announcement->description = $this->description;
        $announcement->price = $this->price;
        $announcement->user_id = auth()->user()->id;
        $announcement->category_id = Category::find($id);
        $announcement->save();

        $this->message = 'Articolo aggiornato con successo!!!';

        
        

    }
        
    







            
     
            
}
