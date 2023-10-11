<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clan;
use App\Models\Knjiga;
use App\Models\Posudba;

class PosudbaController extends Controller
{
    public function index()
    {
        $posudbe = Posudba::with("clan", "knjiga")->get(); // eloquent orm: dohvat podataka s INNER JOIN
        return view("posudba.index", compact("posudbe"));
    }

    public function create()
    {
        $clanovi = Clan::all(); // priprema za padajuću listu, select-option
        $knjige = Knjiga::all();
        return view("posudba.create", compact("clanovi", "knjige"));
    }

    public function store(Request $request)
    {
        // sprema podatke dijelom iz baze, dijelom s forme, u tablicu posudbas
        $request->validate([
            "clan_id" => "required",  //iz forme create.blade.php
            "knjiga_id" => "required",
            "datum_posudbe" => "required|date",
        ]);

        Posudba::create($request->all()); // spremanje posudbe u bazu

        return redirect()->route("posudbas.index")->with("success", "Posudba je upisana");
    }

    public function show(Posudba $posudba)
    {
        return view("posudba.show", compact("posudba"));
    }

    public function edit(Posudba $posudba) // ime modela koji se pretražuje i varijabla u koju laravel automatski pohrani podatak određenog id-a, instancu modela koji odgovara id-u
    {
        $clanovi = Clan::all();
        $knjige = Knjiga::all();
        return view("posudba.edit", compact("posudba", "clanovi", "knjige"));
        // implicitna veza modela ruta, laravel automatski stvara, injektira instancu posudba
    }

    public function update(Request $request, Posudba $posudba)
    {
        $request->validate([
            "clan_id" => "required",
            "knjiga_id" => "required",
            "datum_posudbe" => "required|date",
            "datum_povrata" => "required|date",
        ]);

        $posudba->update($request->all()); //pohrana u bazu validirane ažurirane podatke
        return redirect()->route("posudbas.index")->with("success", "Posudba uspješno ažurirana");
    }

    public function confirmDelete(Posudba $posudba)
    {
        return view('posudba.confirm-delete', compact('posudba'));
    }

    public function destroy(Posudba $posudba)
    {
        $posudba->delete();
        return redirect()->route("posudbas.index")->with("success", "Posudba uspješno obrisana");
    }
}
