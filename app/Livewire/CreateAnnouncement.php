<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
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
        $category = Category::find($this->category);
        
        
        $announcement = $category->announcements()->create([
            'title' => $this->title,
            'price'=> $this->price,
            'description' => $this->description 
        ]);

        auth()->user()->announcements()->save($announcement);
        
        

       
        
       

        $this->title='';
        $this->price='';
        $this->description= '';
        $this->message = 'Articolo aggiunto con successo!!!';

        
        

    }
        
    







            
     
            
}
