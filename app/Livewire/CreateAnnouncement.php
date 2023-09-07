<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use GuzzleHttp\Promise\Create;

class CreateAnnouncement extends Component

{
    
    public $title, $description, $price, $category, $message;

    

   
   
    public function render()
      {
          return view('livewire.create-announcement');
      }
     

    public function store(){
        $validated = $this->validate([
            'title' => 'required|min:5',
        'description' => 'required|min:8',
        'price' => 'required|numeric'
        
        ]);
        
        $announcement = new Announcement();

        $announcement->title = $this->title;
        $announcement->description = $this->description;
        $announcement->price = $this->price;
        $announcement->user_id = auth()->user()->id;
        $announcement->category_id = Category::find($id);
        $announcement->save();

        $this->title='';
        $this->price='';
        $this->description= '';
        $this->message = 'Articolo aggiunto con successo!!!';

        
        

    }
        
    







            
     
            
}
