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

    //Richiama elenco annunci pubblicati
    public function tableAnnouncement(Request $request){
        if ($request->ajax()) {
        $announcement_list = Announcement::where('user_id','!=',$request->id)->get();
        return Datatables::of($announcement_list)

        ->addIndexColumn()
        ->addColumn('azioni', function($row){

               $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Mostra" class="edit btn btn-primary btn-sm editPost">Mostra</a>';

               $btn = $btn.'<a href="\revisors.accept'."\\".$row->id.'" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Accetta" class="btn btn-danger btn-sm deletePost">Accetta</a>';

               $btn = $btn.' <a href="{{route(\'revisors.decline\', '.$row->id.')}}" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Rifiuta" class="btn btn-danger btn-sm deletePost">Rifiuta</a>';

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
