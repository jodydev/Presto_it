<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use GuzzleHttp\Promise\Create;

class CreateAnnouncement extends Component

{
    
    public $title;
    public $description;
    public $price;

    public function render()
      {
          return view('livewire.create-announcement');
      }

    public function store(){

        $announcement = new Announcement();

        $announcement->title = $this -> title;
        $announcement->description = $this -> description;
        $announcement->price = $this -> price;

         $announcement->save();

    }
        
    







            
     
            
}
