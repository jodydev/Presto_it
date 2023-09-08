<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        $categories = Category::all();
        // prendo gli ultimi 8 articoli e li metto in ordine dal più recente
        $announcements = Announcement::take(8)->get()->sortByDesc('created_at');
        return view('index', [
            'categories' => $categories,
            'announcements' => $announcements
        ]);
    }
}
