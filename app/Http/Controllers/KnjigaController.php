<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Knjiga;

class KnjigaController extends Controller
{
    // metoda za čitanje podataka iz baze
    public function index()
    {
        $knjigas=Knjiga::all();
        return view("knjiga.index", compact("knjigas"));
    }

    // metoda za prikaz obrasca za unos novog zapisa
    public function create()
    {
        return view("knjiga.create");
    }

    // metoda za spremanje zapisa u bazu
    public function store(Request $request)
    {
        $request->validate([
            "naslov"=>"required",
            "autor"=>"required",
            "god_izd"=>"required|numeric"
        ]);

        Knjiga::create($request->all());
        return redirect()->route("knjigas.index")->with("success", "Knjiga je unesena");
    }
    
    public function edit(Knjiga $knjiga)
    {
        return view("knjiga.edit", compact("knjiga"));
    }

    public function update(Request $request, Knjiga $knjiga)
    {
        $knjiga->update($request->all());
        return redirect()->route("knjigas.index");
    }

    public function confirmDelete(Knjiga $knjiga)
    {
        return view('knjiga.confirm-delete', compact('knjiga'));
    }

    public function destroy(Knjiga $knjiga)
    {
        $knjiga->delete();
        return redirect()->route("knjigas.index");
    }


}