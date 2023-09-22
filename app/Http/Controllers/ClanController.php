<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clan;

class ClanController extends Controller
{
    public function index() //index je standarni naziv za metodu koja čita iz baze
    {
        $clans=Clan::all();
        return view(“clan.index”, compact(“clans”)); // compact pretvara podatke u niz
    }

    public function create() //create je metoda za prikaz obrazca za unos novog zapisa
    {
        return view(“clan.create”);
    }

}
