<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knjiga extends Model
{
    use HasFactory;

    // povezivanje modela s bazom (ako ih ima više od jedne)
    protected $connection = "mysql";
    protected $table = "knjigas";

    protected $fillable = [
        "naslov",
        "autor",
        "god_izd",
    ];
}
