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

}
