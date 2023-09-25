<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Mostro la vista profilo
    public function index () {

        $current_user_id = auth()->user()->id;

        $user = User::find($current_user_id);

        return view('users.profile', ['user' => $user]);

    }

}
