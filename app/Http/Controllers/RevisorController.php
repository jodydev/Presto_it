<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index(){

        $announcement_to_accept = Announcement::where('is_accepted', null)->first();
        return view('revisors.index', [
             'announcement' => $announcement_to_accept
            ]);
    }
    //Accetto l'annuncio dando valore true alla colonna is_accepted
    public function acceptAnnouncement(Announcement $announcement){
        $announcement->setAccepted(true);
        return redirect->back()->with('message', "L'annuncio è stato accettato con successo");
    }
    //Rifiuto l'annuncio dando valore false alla colonna is_accepted
    public function rejectAnnouncement(Announcement $announcement){
        $announcement->setAccepted(false);
        return redirect->back()->with('message', "L'annuncio è stato scartato con successo");
    }
}
