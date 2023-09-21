<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index(){

        $announcement_to_accept = Announcement::where('is_accepted', null)->first();
        return view('revisors.index', [
             'announcement' => $announcement_to_accept
            ]);
    }
    //Accetto l'annuncio dando valore true alla colonna is_accepted
    public function acceptAnnouncement($id){
        
        Announcement::setAccepted(true, $id);
        return redirect()->back()->with('message', "L'annuncio è stato accettato con successo");
    }
    //Rifiuto l'annuncio dando valore false alla colonna is_accepted
    public function declineAnnouncement($id){
        Announcement::setAccepted(false, $id);
        return redirect()->back()->with('message', "L'annuncio è stato scartato con successo");
    }

    public function becomeRevisor(){
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));

        return redirect()->back()->with('message', "Hai richiesto di diventare Revisore presso Presto.it\nUn nostro addetto valuterà la tua candidatura" );
    }

    public function makeRevisor(User $user){
        Artisan::call('presto:make-user-revisor', ["email" =>$user->email]);
        
        return redirect('/')->with('message', "L'utente " . $user->name . " è ora un Revisore");
    }
}
