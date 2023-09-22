<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posudba;

class PosudbaController extends Controller
{
    public function index()
    {
        $posudbas=Posudba::all();
        return view(“posudba.index”, compact(“posudbas”));
    }

    public function create()
    {
        return view(“posudba.create”);
    }

    public function store(Request $request)
    {

    }


    //u petak crUD
}
