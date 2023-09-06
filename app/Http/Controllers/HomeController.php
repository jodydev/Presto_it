<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        $categories = Category::all();
        $announcements = Announcement::all();
        return view('index', [
            'categories' => $categories,
            'announcements' => $announcements
        ]);
    }
}
