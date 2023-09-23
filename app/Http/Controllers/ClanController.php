<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clan;

class ClanController extends Controller
{
    // metoda za čitanje podataka iz baze
    public function index() //index je standarni naziv za metodu koja čita iz baze
    {
        $clans=Clan::all();
        return view("clan.index", compact("clans")); // compact pretvara rezultat upita u asocijativni niz
    }

    // metoda za prikaz forme za unos novog zapisa
    public function create() //create je metoda za prikaz forme za unos novog zapisa
    {
        return view("clan.create");
    }

    // metoda za spremanje zapisa u bazu
    public function store(Request $request) // spremanje zapisa u bazu
    {
        $request->validate([
            "ime"=>"required",  //ime iz forme iz create.blade.php
            "prezime"=>"required"
        ]);

        Clan::create($request->all());

        return redirect()->route("clans.index")->with("success", "Član je upisan");
    }

    // metoda za prikaz popunjene forme za promjenu (edit) pojedinog zapisa
    // forma je jednaka formi za upis ali popunjena, lažni POST->PUT
    public function edit(Clan $clan)
    {
        return view("clan.edit", compact("clan"));
    }

    // metoda za spremanje izmjene u bazu (RESTfull arhitektura)
    public function update(Request $request, Clan $clan)
    {
        $clan->update($request->all()); // nakon edita pritiskom na button upisuje u bazu promjenu
        return redirect()->route("clans.index"); // nakon upisa u bazu vraćamo prikaz baze
    }

    // metoda za potvrdu brisanja zapisa
    public function confirmDelete(Clan $clan)
    {
        return view('clan.confirm-delete', compact('clan'));
    }

    // metoda za brisanje pojedinog zapisa
    public function destroy(Clan $clan)
    {
        $clan->delete();
        return redirect()->route("clans.index");
    }

}
