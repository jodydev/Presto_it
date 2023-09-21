<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeUserRevisor extends Command
{
    /**
     * The name and signature of the console command.
     * 
     * @var string
     */
    protected $signature = 'presto:make-user-revisor {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'fai diventare revisore un utente';


   
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->argument('email');
        
        // Esegui una query per trovare l'utente con l'email specificata
        $user = \App\Models\User::where('email', $email)->first();
    
        if (!$user) {
            $this->error('Utente non trovato');
            return;
        }
    
        $user->is_revisor = true;
        $user->save();
    
        $this->info("L'utente {$user->name} è ora un revisore.");
    }
}
