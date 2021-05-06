<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function save(Request $req){
        // Verificarea daca user-ul este locagt deja el sa se duca la pagina de profil
        if(Auth::check()){
            return redirect()->route('profile');
        }
        
        // --------------------------------------------
        $validateFields = $req->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:6|max:18'
        ]);
        // verificam daca acest utilizator exista
        if(User::where('email', $validateFields['email'])->exists()){
          return  redirect(route('registrare'))->withErrors([
                'email' => 'Acest email este deja folosit'
            ]);
        }
        // -----------------------
        $user = User::create($validateFields);
        if($user){
            Auth::login($user);
            return redirect()->route('profile');
        }
         return redirect()->route('registrare')->withError([
            'name' => 'Numele este gresit',
            'email' => 'Email-ul este gresita',
            'password' => 'Parola este gresita'
        ]);
    }
}
