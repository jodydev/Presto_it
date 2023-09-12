<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index(){

        $announcement_to_accept = Announcement::where('is_accepted', null)->first();
        return view('revisors.index', [
             'announcement_to_accept' => $announcement_to_accept
            ]);
    }
}
