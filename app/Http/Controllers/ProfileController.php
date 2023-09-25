<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('users.profile');
    }

    public function update(Request $request)
{
    $user = Auth::user();

    // Validazione dei dati del form
    $request->validate([
        'phone_number' => 'nullable|string',
        'city' => 'nullable|string',
        'address' => 'nullable|string',
        'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Immagine del profilo
    ]);

    // Aggiornamento delle informazioni del profilo
    $user->phone_number = $request->input('phone_number');
    $user->city = $request->input('city');
    $user->address = $request->input('address');

    // Caricamento dell'immagine del profilo (se fornita)
    if ($request->hasFile('profile_image')) {
        $imagePath = $request->file('profile_image')->store('profile_images', 'public');
        $user->profile_image = $imagePath;
    }

    $user->save();

    return redirect()->route('profile')->with('success', 'Informazioni del profilo aggiornate con successo.');
}

public function updateProfileImage(Request $request)
{
    $user = auth()->user();

    if ($request->hasFile('profile_image')) {
        $image = $request->file('profile_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('profile-images', $imageName, 'public');

        $user->profile_image = 'storage/profile-images/' . $imageName;
        $user->save();
    }

    return redirect()->back();
}

}

