<?php

namespace App\Http\Controllers;

use App\Models\Produs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateProdController extends Controller
{
    public function addProd(Request $req){
        $path = new Produs();
        $path->category=$req->input('category');
        $path->nameProd=$req->input('nameProd');
        $path->priceProd=$req->input('priceProd');
        $path->informationProd=$req->input('informationProd');

        $req->file('image')->store('uploads','public');
        $path->image=$req->file('image')->hashName();
        $path->save();
            return view('verificare',['paths'=>Produs::all()]);
    }
    public function viewTelefoane(Request $req){
        
         return view('all-links-navbar.telefoane',['paths'=>Produs::where('category','Telefoane')->get()]);
    }
    public function viewTablete(Request $req){
        return view('all-links-navbar.tablete',['paths'=>Produs::where('category','Tablete')->get()]);
    }
   public function viewLaptopuri(Request $req){
        return view('all-links-navbar.laptopuri',['paths'=>Produs::where('category','Laptopuri')->get()]);
    }
    public function viewCalculatoare(Request $req){
        return view('all-links-navbar.calculatoare',['paths'=>Produs::where('category','Calculatoare')->get()]);
    }
    public function viewElectrocasnice(Request $req){
        return view('all-links-navbar.electrocasnice',['paths'=>Produs::where('category','Electrocasnice')->get()]);
    }
    public function viewTrotinete(Request $req){
        return view('all-links-navbar.trotinete',['paths'=>Produs::where('category','Trotinete')->get()]);
    }
    public function viewRoboti(Request $req){
        return view('all-links-navbar.roboti',['paths'=>Produs::where('category','Roboti')->get()]);
    }
    public function viewAudio(Request $req){
        return view('all-links-navbar.audio',['paths'=>Produs::where('category','Audio')->get()]);
    }
    public function viewApple(Request $req){
        return view('all-links-navbar.apple',['paths'=>Produs::where('category','Apple')->get()]);
    }
    public function viewSamsung(Request $req){
        return view('all-links-navbar.samsung',['paths'=>Produs::where('category','Samsung')->get()]);
    }
    public function viewSport(Request $req){
        return view('all-links-navbar.sport',['paths'=>Produs::where('category','Sport')->get()]);
    }
    public function viewTV(Request $req){
        return view('all-links-navbar.tv',['paths'=>Produs::where('category','TV')->get()]);
    }
    // paginarea 
    
}
