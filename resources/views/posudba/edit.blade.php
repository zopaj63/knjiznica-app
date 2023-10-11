@extends('layouts.layout')

@section('content')

<h1>Uredi posudbu</h1>
<br>
<form action="{{route('posudbas.update', $posudba->id)}}" method="POST">
    @csrf
    @method("PUT")

    <label>Član</label><br>
    <select name="clan_id" required>
        @foreach($clanovi as $clan)
        <option value="{{$clan->id}}" {{$clan->id == $posudba->clan_id ? 'selected':''}}>{{$clan->ime}} {{$clan->prezime}}</option>
        @endforeach
    </select>
    <br><br>
    <label>Knjiga</label><br>
    <select name="knjiga_id" required>
        @foreach($knjige as $knjiga)
        <option value="{{$knjiga->id}}" {{$knjiga->id == $posudba->knjiga_id ? 'selected':''}}>{{$knjiga->naslov}}</option>
        @endforeach
    </select>
    <br><br>
    <label>Datum posudbe</label><br>
    <input type="date" name="datum_posudbe" value="{{$posudba->datum_posudbe}}" required>
    <br><br>
    <label>Datum vraćanja</label><br>
    <input type="date" name="datum_povrata" value="{{$posudba->datum_povrata}}">
    <br><br>
    <button type="submit">Ažuriraj</button>

</form>
<br><br>
<form action="{{route('posudbas.index')}}" method="GET">
    @csrf
    <button type="submit">Odustani</button>
</form>

@endsection