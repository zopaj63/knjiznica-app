@extends('layouts.layout')

@section('content')

<h1>Dodavanje nove knjige</h1>

<form action="{{route('knjigas.store')}}" method="POST">
    @csrf
    <label>Naslov</label>
    <input type="text" name="naslov"><br>
    <label>Autor</label>
    <input type="text" name="autor"><br>
    <label>Godina izdanja</label>
    <input type="text" name="god_izd"><br>
    <button type="submit">Dodaj novu knjigu</button>
</form>

<br>
<form action="{{route('knjigas.index')}}" method="GET">
    <button type="submit">Odustani</button>
</form>

@endsection