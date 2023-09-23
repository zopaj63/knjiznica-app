<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posudba;

class PosudbaController extends Controller
{
    public function index()
    {
        $posudbas=Posudba::all();
        return view("posudba.index", compact("posudbas"));
    }

    public function create()
    {
        return view("posudba.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "clan_id"=>"required",  //iz forme create.blade.php
            "knjiga_id"=>"required",
            "datum_posudbe"=>"required",
            "datum_povrata"=>"nullable"
        ]);

        Posudba::create($request->all());

        return redirect()->route("posudbas.index")->with("success", "Posudba je upisana");
    }



}
