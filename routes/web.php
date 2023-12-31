<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClanController;
use App\Http\Controllers\KnjigaController;
use App\Http\Controllers\PosudbaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::resource("clans", ClanController::class); //stvara rute za sve CRUD operacije
Route::resource("knjigas", KnjigaController::class);
Route::resource("posudbas", PosudbaController::class);

// kako bi izgledalo ručno pisanje rute (umjesto resource) za npt. edit:
// Route::get("/clans/{clan}/edit", "ClanController@edit")->name(clans.edit);

Route::get("/clans/{clan}/confirmDelete", [ClanController::class, "confirmDelete"])->name("clans.confirm-delete");

Route::get("/knjigas/{knjiga}/confirmDelete", [KnjigaController::class, "confirmDelete"])->name("knjigas.confirm-delete");

Route::get("/posudbas/{posudba}/confirmDelete", [PosudbaController::class, "confirmDelete"])->name("posudbas.confirm-delete");
