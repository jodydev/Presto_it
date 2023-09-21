<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announcement;

class AnnouncementIndex extends Component
{
    //filter bar per titolo
    public $filter = '';
    public function render()
    {
        if($this->filter !== ''){
        $all_announcements = Announcement::where('title', $this->filter )->get();
    } else {
        $all_announcements = Announcement::all();
    }
        return view('livewire.announcement-index', ['announcements' => $all_announcements]);
    }
}
