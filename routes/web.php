<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    return view('home');
})->name('home');
// Pagina la care ai acces doar daca esti logat sau inregistrat pe pagina
Route::view('/profile', 'profile')->middleware('auth')->name('profile');
// ------------------------------------------------------------------
Route::get('/registrare', function () {
// Verificare daca utilizatorul este deja logat apu el sa nu aiba acces la aceasta pagina
    if(Auth::check()){
        return redirect()->route('profile');
    }
// ------------------------------------
    return view('registrare');
})->name('registrare');
Route::get('/login', function () {
    // Verificare daca utilizatorul este deja logat apu el sa nu aiba acces la aceasta pagina
    if(Auth::check()){
        return redirect()->route('profile');
    }
// --------------------------------------
    return view('login');
})->name('login');

// Route pentru forma de inregistrare
Route::post('/registrare', 'App\Http\Controllers\RegistrationController@save');
// Route pentru forma de logOut
Route::get('logout', function(){
    Auth::logout();
    return redirect('/');
})->name('logout');
// Route pentru forma de login
Route::post('/login','App\Http\Controllers\LoginController@login');
// Route pentru pagina de admin pentru admini
Route::get('/adminpage', function () {
    return view('adminpage');
})->name('adminpage');
// Route pentru pagina de adaugare a unui user de catre admin
Route::get('pages-for-admin.addUser', function () {
    return view('pages-for-admin.addUser');
})->name('addUser');
// Routul de adaugarea a unui user de pe pagina de admin
Route::post('/addUser/AddminAddUser','App\Http\Controllers\AdminPanelController@AddminAddUser')->name('AddminAddUser');
// 
// 
Route::get('/verificare', function () {
    return view('verificare');
})->name('verificare');
// 
// 
// Pagina adminului de adaugarea a produselor
Route::get('pages-for-admin.addProduct', function () {
    return view('pages-for-admin.addProduct');
})->name('pages-for-admin.addProduct');
// Routul pentru forma de adaugare a produselor de catre admin
Route::post('/addProd','App\Http\Controllers\CreateProdController@addProd')->name('saveProd');


// 
// 
// Lucru cu afisarea produselor
// 
// 

// Routul pentru pagina cu produsele "Telefoane"
Route::get('/all-links-navbar.telefoane', function () {
    return view('all-links-navbar.telefoane');
})->name('all-links-navbar.telefoane');
// Afisarea telefoanelor
Route::get('/all-links-navbar.telefoane','App\Http\Controllers\CreateProdController@viewTelefoane')->name('all-links-navbar.telefoane');

// Routul pentru pagina cu produsele "Tablete"
Route::get('/all-links-navbar.tablete', function () {
    return view('all-links-navbar.tablete');
})->name('all-links-navbar.tablete');
// Afisarea tabletelor
Route::get('/all-links-navbar.tablete','App\Http\Controllers\CreateProdController@viewTablete')->name('all-links-navbar.tablete');

// Routul pentru pagina cu produsele "Laptopuri"
Route::get('/all-links-navbar.laptopuri', function () {
    return view('all-links-navbar.laptopuri');
})->name('all-links-navbar.laptopuri');
// Afisarea tabletelor
Route::get('/all-links-navbar.laptopuri','App\Http\Controllers\CreateProdController@viewLaptopuri')->name('all-links-navbar.laptopuri');

// Routul pentru pagina cu produsele "Calculatoare"
Route::get('/all-links-navbar.calculatoare', function () {
    return view('all-links-navbar.calculatoare');
})->name('all-links-navbar.calculatoare');
// Afisarea tabletelor
Route::get('/all-links-navbar.calculatoare','App\Http\Controllers\CreateProdController@viewCalculatoare')->name('all-links-navbar.calculatoare');

// Routul pentru pagina cu produsele "Electrocasnice"
Route::get('/all-links-navbar.electrocasnice', function () {
    return view('all-links-navbar.electrocasnice');
})->name('all-links-navbar.electrocasnice');
// Afisarea tabletelor
Route::get('/all-links-navbar.electrocasnice','App\Http\Controllers\CreateProdController@viewElectrocasnice')->name('all-links-navbar.electrocasnice');

// Routul pentru pagina cu produsele "Trotinete"
Route::get('/all-links-navbar.trotinete', function () {
    return view('all-links-navbar.trotinete');
})->name('all-links-navbar.trotinete');
// Afisarea tabletelor
Route::get('/all-links-navbar.trotinete','App\Http\Controllers\CreateProdController@viewTrotinete')->name('all-links-navbar.trotinete');

// Routul pentru pagina cu produsele "Roboti"
Route::get('/all-links-navbar.roboti', function () {
    return view('all-links-navbar.roboti');
})->name('all-links-navbar.roboti');
// Afisarea tabletelor
Route::get('/all-links-navbar.roboti','App\Http\Controllers\CreateProdController@viewRoboti')->name('all-links-navbar.roboti');

// Routul pentru pagina cu produsele "Audio"
Route::get('/all-links-navbar.audio', function () {
    return view('all-links-navbar.audio');
})->name('all-links-navbar.audio');
// Afisarea tabletelor
Route::get('/all-links-navbar.audio','App\Http\Controllers\CreateProdController@viewAudio')->name('all-links-navbar.audio');

// Routul pentru pagina cu produsele "Apple"
Route::get('/all-links-navbar.apple', function () {
    return view('all-links-navbar.apple');
})->name('all-links-navbar.apple');
// Afisarea tabletelor
Route::get('/all-links-navbar.apple','App\Http\Controllers\CreateProdController@viewApple')->name('all-links-navbar.apple');

// Routul pentru pagina cu produsele "Samsung"
Route::get('/all-links-navbar.samsung', function () {
    return view('all-links-navbar.samsung');
})->name('all-links-navbar.samsung');
// Afisarea tabletelor
Route::get('/all-links-navbar.samsung','App\Http\Controllers\CreateProdController@viewSamsung')->name('all-links-navbar.samsung');

// Routul pentru pagina cu produsele "Sport"
Route::get('/all-links-navbar.sport', function () {
    return view('all-links-navbar.sport');
})->name('all-links-navbar.sport');
// Afisarea tabletelor
Route::get('/all-links-navbar.sport','App\Http\Controllers\CreateProdController@viewSport')->name('all-links-navbar.sport');

// Routul pentru pagina cu produsele "TV"
Route::get('/all-links-navbar.tv', function () {
    return view('all-links-navbar.tv');
})->name('all-links-navbar.tv');
// Afisarea tabletelor
Route::get('/all-links-navbar.tv','App\Http\Controllers\CreateProdController@viewTV')->name('all-links-navbar.tv');

