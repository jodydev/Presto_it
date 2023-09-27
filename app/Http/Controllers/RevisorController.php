<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;
use DataTables;

class RevisorController extends Controller
{
    public function index(){

        $announcement_to_accept = Announcement::where('is_accepted', null)->first();
            return view('revisors.index', [
             'announcement' => $announcement_to_accept
            ]);
    }

//richiama l'annuncio su cui clicca il revisore
    public function announcement($id_announcement){

        $show_announcement = Announcement::where('id', $id_announcement)->first();
        return view('revisors.announcement', [
             'announcement' => $show_announcement
            ]);
    }
    

    //Richiama elenco annunci pubblicati
    public function tableAnnouncement(Request $request){
        if ($request->ajax()) {
        $announcement_list = Announcement::where('user_id','!=',Auth::id())->get();
        // $announcement_list=Announcement::all();
        return Datatables::of($announcement_list)
        
        // ->addColumn('categoria', function(Announcement $a){
        //     return $a->title;
        // })

        ->addIndexColumn()
        ->addColumn('azioni', function($row){

            $btn = '<div class="d-flex"> <button type="button" data-id="'.$row->id.'" data-original-title="Mostra" onclick="mostrAnnuncio(this)" class="button-mostra rounded-4 shadow-lg">Mostra</button>';
           
            if ($row->is_accepted !=1) { 
            $btn = $btn. '<form id="button-accetta" action="/revisore/accetta/'.$row->id.'" method="post">
            <input type="hidden" name="_token" value="'.csrf_token().'" /> 
            <input type="hidden" name="_method" value="PATCH" />
            <input type="submit" value="Accetta" class="button-accetta rounded-4 shadow-lg">
            </form>';    
            }    
            
            if ($row->is_accepted !=0 || $row->is_accepted === null) { 
                $btn = $btn. '<form id="button-rifiuta" action="/revisore/rifiuta/'.$row->id.'" method="post">
                <input type="hidden" name="_token" value="'.csrf_token().'" /> 
                <input type="hidden" name="_method" value="PATCH" />
                <input type="submit" value="Rifiuta" class="button-rifiuta rounded-4 shadow-lg">
                </form>';    
                }    
                $btn = $btn.'</div>';

            return $btn;
        })

        ->rawColumns(['azioni'])
        ->make(true);
            }

            return view('revisors.index');
        }

           
    //Accetto l'annuncio dando valore true alla colonna is_accepted
    public function acceptAnnouncement($id){
        
        Announcement::setAccepted(true, $id);
        return redirect()->back()->with('message', "L'annuncio è stato accettato con successo");
    }
    //Rifiuto l'annuncio dando valore false alla colonna is_accepted
    public function declineAnnouncement($id){
        Announcement::setAccepted(false, $id);
        return redirect()->back()->with('message', "L'annuncio è stato rifiutato con successo");
    }

    public function becomeRevisor(Request $request){
        $request->validate([
            'user_message' => 'required|string',
            'pdf_file' => 'required|mimes:pdf|max:2048', // Accetta solo file PDF con dimensione massima di 2MB
        ]);
        $user_message = $request->user_message;
        $user = Auth::user(); // Ottieni l'utente autenticato

        Mail::to('admin@presto.it')->send(new BecomeRevisor($user_message, $user, $request->file('pdf_file')));
    

        return redirect()->back()->with('message', "Hai richiesto di diventare Revisore presso Presto.it\nUn nostro addetto valuterà la tua candidatura" );
    }

    public function makeRevisor(User $user){
        Artisan::call('presto:make-user-revisor', ["email" =>$user->email]);
        
        return redirect('/')->with('message', "L'utente " . $user->name . " è ora un Revisore");
    }
}
