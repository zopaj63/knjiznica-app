@extends('layouts.layout')

@section('content')

<h1>Potvrda brisanja Posudbe</h1>
<br>
<p>Član: {{$posudba->clan->ime}} {{$posudba->clan->prezime}}</p>
<p>Knjiga: {{$posudba->knjiga->naslov}} {{$posudba->knjiga->autor}}</p>
<p>Datum posudbe: {{$posudba->datum_posudbe}}</p>
<p>Datum vraćanja: {{$posudba->datum_povrata ?? 'Nije još vraćeno'}}</p>

<form action="{{route('posudbas.destroy', $posudba->id)}}" method="POST">
    @csrf
    @method("DELETE")
    <button type="submit">Obriši</button>
</form>
<br>


<form action="{{route('posudbas.index')}}" method="GET">
    <button type="submit">Odustani</button>
</form>

@endsection