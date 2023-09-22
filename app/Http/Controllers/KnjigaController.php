<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Knjiga;

class KnjigaController extends Controller
{
    public function index()
    {
        $knjigas=Knjiga::all();
        return view(“knjiga.index”, compact(“knjigas”));
    }

    public function create()
    {
        return view(“knjiga.create”);
    }

    public function store(Request $request)
    {
        $request->validate([
            “naslov”=>”required”,
            “autor”=>”required”,
            “god_izd”=>”required|numeric”
        ]);

        Knjiga::create($request->all());
        return redirect()->route("knjigas.index")->with("success", "Knjiga je unesena");
    }

}
