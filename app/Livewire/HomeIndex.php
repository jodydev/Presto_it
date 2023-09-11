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
        $categories = Category::all();

        // Filtra gli annunci in base alla categoria selezionata
        if ($this->selectedCategory) {
            $this->announcements = Announcement::where('category_id', $this->selectedCategory)->take(8)->get()->sortByDesc('created_at');
        } else {
            $this->announcements = Announcement::take(8)->get()->sortByDesc('created_at');
        }

        return view('livewire.home-index', compact('categories'));
    }
}
