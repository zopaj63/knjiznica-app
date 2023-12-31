@extends('layouts.layout')

@section('content')

<h1>Uređivanje člana</h1>
<br>
<form action="{{route('clans.update', $clan->id)}}" method="POST">
    @csrf
    @method("PUT")

    <label>Ime</label><br>
    <input type="text" name="ime" value="{{$clan->ime}}"><br><br>
    <label>Prezime</label><br>
    <input type="text" name="prezime" value="{{$clan->prezime}}"><br><br>
    <button type="submit">Ažuriraj člana</button>
</form>

<br>
<form action="{{route('clans.index')}}" method="GET">
    <button type="submit">Odustani</button>
</form>

@endsection