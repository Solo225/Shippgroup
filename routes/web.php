<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EtatcommandeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;


// ROUTE POUR LA PAGE D'ACCUEIL
Route::get('/', [HomeController::class, 'accueil']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/choix', [HomeController::class, 'choix']);

// ROUTE POUR L'AUTHENTIFICATION
Route::get('/login', [LoginController::class, 'login']);
Route::get('/creercompte', [RegisterController::class, 'createcompte']);
Route::get('/logout', [LoginController::class, 'deconnexion']);
Route::post('/login', [LoginController::class, 'faireConnexion']);
Route::post('/creercompte', [RegisterController::class, 'connecte']);

// ROUTE POUR PAGE APRES AUTHENTIFICATION
Route::get('/pageclient', [HomeController::class, 'pageClient'])->name('pageclient');
Route::get('/commande',[EtatcommandeController::class, 'commande']);
Route::post('/commande',[EtatcommandeController::class, 'store']);



// FAIS PAREIL POUR LES AUTRES
Route::get('/blog', function(){
    return view('pages/blog');
});


Route::get('/admin', function(){
    return view('layouts/dashboard');
});

Route::get('/oublie', function(){
    return view('pages/oublie');
});





Route::get('/creercomptelivreur', function(){
    return view('pages/creercomptelivreur');
});

Route::get('/finalisation', function(){
    return view('pages/finalisation');
});


Route::get('/recap', function(){
    return view('pages/recap');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
