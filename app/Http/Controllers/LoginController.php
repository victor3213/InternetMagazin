<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(Request $req){
        // Verificarea daca user-ul este locagt deja el sa se duca la pagina de profil
        if(Auth::check()){
            return redirect()->route('profile');
        }
        // --------------------------------------------
        $formFields =$req->only(['email', 'password']);
        // Gasim adminul si il trimitem la pagina de admin
          $user = DB::table('users')->where('email', $req->input('email'))->first();
          
        if($user->role_id == 2){
            return redirect()->route('adminpage');
        }
        // -----------------------------------
        // daca userul sa logat si datele
        if(Auth::attempt($formFields)){
            return redirect()->route('profile');
        }
         return redirect()->back()->withErrors([
            'email' => 'Email-ul este gresit',
            'password'=> 'Parola este gresita' 
        ]);
    }
}
