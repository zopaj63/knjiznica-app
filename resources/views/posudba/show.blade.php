@extends('layouts.layout')

@section('content')

<h1>Detalj posudbe</h1>

<p>Član: {{$posudba->clan->ime}} {{$posudba->clan->prezime}}</p>
<p>Knjiga: {{$posudba->knjiga->naslov}} {{$posudba->knjiga->autor}}</p>
<p>Datum posudbe: {{$posudba->datum_posudbe}}</p>
<p>Datum vraćanja: {{$posudba->datum_povrata ?? 'Nije još vraćeno'}}</p>

<form action="{{route('posudbas.edit', $posudba->id)}}" method="GET" style="display: inline;">
    @csrf
    <button type="submit">Uredi</button>
</form>

<form action="{{route('posudbas.confirm-delete', $posudba->id)}}" method="GET" style="display: inline;">
    @csrf
    @method("DELETE")
    <button type="submit">Obriši</button>
</form>

<br><br>
<form action="{{route('posudbas.index')}}" method="GET">
    @csrf
    <button type="submit">Sve posudbe</button>
</form>

@endsection