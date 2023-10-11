@extends('layouts.layout')

@section('content')

<h1>Unos posudbe</h1>
<br>
<form action="{{route('posudbas.store')}}" method="POST">
    @csrf

    <label>Odabir člana</label><br>
    <select name="clan_id" required>
        @foreach($clanovi as $clan)
        <option value="{{$clan->id}}">{{$clan->ime}} {{$clan->prezime}}</option>
        @endforeach
    </select>
    <br><br>
    <label>Odabir knjige</label><br>
    <select name="knjiga_id">
        @foreach($knjige as $knjiga)
        <option value="{{$knjiga->id}}">{{$knjiga->naslov}}</option>
        @endforeach
    </select>

    <br><br>
    <label>Datum posudbe</label><br>
    <input type="date" name="datum_posudbe"><br><br>

    <button type="submit">Dodaj novu posudbu</button>
</form>

<br><br>
<form action="{{route('posudbas.index')}}" method="GET">
    @csrf
    <button type="submit">Odustani</button>
</form>

@endsection