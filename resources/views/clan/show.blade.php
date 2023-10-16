@extends('layouts.layout')

@section('content')

<h1>Podaci o članu</h1>

<p>Član: {{$clan->ime}} {{$clan->prezime}}</p>
<p>Član od: {{$clan->created_at}}</p>

<form action="{{route('clans.edit', $clan->id)}}" method="GET" style="display: inline;">
    @csrf
    <button type="submit">Uredi</button>
</form>

<form action="{{route('clans.confirm-delete', $clan->id)}}" method="GET" style="display: inline;">
    @csrf
    @method("DELETE")
    <button type="submit">Obriši</button>
</form>

<br><br>
<form action="{{route('clans.index')}}" method="GET">
    @csrf
    <button type="submit">Svi članovi</button>
</form>

@endsection