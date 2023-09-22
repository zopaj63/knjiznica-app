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

    public function store(Request $request) // spremanje zapisa u bazu
    {
        $request->validate([
            “ime”=>”required”,  //ime iz forme iz create.blade.php
            “prezime”=>”required”
        ]);

        Clan::create($request->all());

        return redirect()->route("clans.index")->with("success", "Član je upisan");
    }

}
