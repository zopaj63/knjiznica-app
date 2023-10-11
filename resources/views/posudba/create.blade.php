@extends('layouts.layout')

@section('content')

<h1>Unos posudbe</h1>

<form action="{{route('posudbas.store')}}" method="POST">
    @csrf

    <label>Odabir člana</label>
    <select name="clan_id" required>
        @foreach($clanovi as $clan)
        <option value="{{$clan->id}}">{{$clan->ime}} {{$clan->prezime}}</option>
        @endforeach
    </select>

    <label>Odabir knjige</label>
    <select name="knjiga_id">
        @foreach($knjige as $knjiga)
        <option value="{{$knjiga->id}}">{{$knjiga->naslov}}</option>
        @endforeach
    </select>

    <br><br>
    <label>Datum posudbe</label>
    <input type="date" name="datum_posudbe"><br><br>

    <button type="submit">Dodaj novu posudbu</button>

</form>

@endsection