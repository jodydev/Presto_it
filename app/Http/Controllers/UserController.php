<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Mostro la vista profilo
    public function index () {

        $id = auth()->user()->id;

        $user = User::find($id);

        return view('users.profile', ['user' => $user]);

    }

    public function update(Request $request,){
        
        $user = auth()->user();
        
        $user->city = $request->city;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        
         
        if ($request->file('profile_image')) {
          $imageId =uniqid();
          $user->profile_image = 'profile-image-' . $imageId . '.' . $request->file('profile_image')->extension();
          $user->profile_image_id = $imageId;
          $fileName = 'profile-image' . $imageId . '.' . $request->file('profile_image')->extension();
          $profile_image = $request->file('profile_image')->storeAs('public', $fileName);
  
          }

          $user->save();

    }

}
