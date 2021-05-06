<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminPanelController extends Controller
{
    // Adaugarea unui user
    public function AddminAddUser(Request $req){
         // Verificarea daca user-ul este locagt deja el sa se duca la pagina de profil
         if(Auth::check()){
            return redirect()->route('profile');
        }
        
        // --------------------------------------------
        // Validarea datelor
        $validateFields = $req->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:6|max:18'
        ]);
        // verificam daca acest utilizator exista
        if(User::where('email', $validateFields['email'])->exists()){
          return  redirect(route('adminpage'))->withErrors([
                'email' => 'Acest email este deja folosit'
            ]);
        }
        // -----------------------
        $user = User::create($validateFields);
        if($user){
            Auth::login($user);
            return redirect()->route('adminpage')->withError([
                'formFields' => 'Adaugare reusita',
            ]);
        }
         return redirect()->route('adminpage')->withError([
            'name' => 'Numele este gresit',
            'email' => 'Email-ul este gresita',
            'password' => 'Parola este gresita'
        ]);
    }
    // ----------------------------------------------
}
        






