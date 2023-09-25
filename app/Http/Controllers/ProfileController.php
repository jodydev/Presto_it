<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\ProfileImage;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('users.profile');

    }


}

