<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;

class HomeIndex extends Component
{
    public $selectedCategory;
    public $announcements;
    
    public function render()
    {
        // Carica tutte le categorie
        $categories = Category::orderBy('title')->get();

        // Filtra gli annunci in base alla categoria selezionata
        if ($this->selectedCategory) {
            $this->announcements = Announcement::where('is_accepted', true)->where('category_id', $this->selectedCategory)->get()->sortByDesc('created_at')->take(6);
        } else {
            $this->announcements = Announcement::where('is_accepted', true)->get()->sortByDesc('created_at')->take(6);
        }

        return view('livewire.home-index', compact('categories'));
    }

}
