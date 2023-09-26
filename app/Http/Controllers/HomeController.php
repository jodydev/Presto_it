<?php

namespace App\Http\Controllers;

use App\Mail\NewsLetter;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function setLanguage($lang){
        
        session()->put('locale',$lang);

        return redirect()->back();

        
    }

    

    public function index (){
        $lang = session('locale');

        $categories = Category::all();
        // prendo gli ultimi 8 articoli e li metto in ordine dal più recente
        $announcements = Announcement::take(8)->get()->sortByDesc('created_at');

        return view('index', [
            'categories' => $categories,
            'announcements' => $announcements,
            'lang' => $lang,
        ]);
    }

    public function contacts (){

        return view ('contatti');
    }

    public function privacy (){

        return view ('privacy');
    }

    public function newsletter(Request $request){
        $email = $request->email;

        Mail::to($email)->send(new NewsLetter($email));
        return redirect()->back()->with('message', 'Controlla la tua email per vedere se la tua iscrizione è andata a buon fine');
    }
   
}
