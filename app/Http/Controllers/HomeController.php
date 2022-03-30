<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function pageClient()
    {
        // RENVOYONS TOUTES LES COMMANDES
        $commandes = Commande::get();
        return view('pages.pageclient', compact('commandes'));
    }

    public function accueil()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages/about');
    }

    public function contact()
    {
        return view('pages/contact');
    }

    public function services()
    {
        return view('pages/services');
    }

    public function choix()
    {
        return view('pages/choix');
    }

}
