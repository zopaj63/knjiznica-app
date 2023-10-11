@extends('layouts.layout')

@section('content')

<h1>Uredi posudbu</h1>
<hr>

<form action="{{route('posudbas.update', $posudba->id)}}" method="POST">
    @csrf
    @method("PUT")

    <label>Član</label>
    <select name="clan_id" required>
        @foreach($clanovi as $clan)
        <option value="{{$clan->id}}" {{$clan->id == $posudba->clan_id ? 'selected':''}}>{{$clan->ime}} {{$clan->prezime}}</option>
        @endforeach
    </select>
    <br>
    <label>Knjiga</label>
    <select name="knjiga_id" required>
        @foreach($knjige as $knjiga)
        <option value="{{$knjiga->id}}" {{$knjiga->id == $posudba->knjiga_id ? 'selected':''}}>{{$knjiga->naslov}}</option>
        @endforeach
    </select>
    <br>
    <label>Datum posudbe</label>
    <input type="date" name="datum_posudbe" value="{{$posudba->datum_posudbe}}" required>
    <br>
    <label>Datum vraćanja</label>
    <input type="date" name="datum_povrata" value="{{$posudba->datum_povrata}}">

    <button type="submit">Ažuriraj</button>

</form>

@endsection