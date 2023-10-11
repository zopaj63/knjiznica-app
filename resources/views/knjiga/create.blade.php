@extends('layouts.layout')

@section('content')

<h1>Dodavanje nove knjige</h1>
<br>
<form action="{{route('knjigas.store')}}" method="POST">
    @csrf
    <label>Naslov</label><br>
    <input type="text" name="naslov"><br><br>
    <label>Autor</label><br>
    <input type="text" name="autor"><br><br>
    <label>Godina izdanja</label><br>
    <input type="text" name="god_izd"><br><br>
    <button type="submit">Dodaj novu knjigu</button>
</form>

<br><br>
<form action="{{route('knjigas.index')}}" method="GET">
    <button type="submit">Odustani</button>
</form>

@endsection