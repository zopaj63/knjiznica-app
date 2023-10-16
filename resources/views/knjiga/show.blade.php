@extends('layouts.layout')

@section('content')

<h1>Podaci o knjizi</h1>

<p><b>Naziv knjige:</b> {{$knjiga->naslov}}</p>
<p><b>Autor knjige:</b> {{$knjiga->autor}}</p>
<p><b>U knjižnici od:</b> {{$knjiga->created_at->format('M-Y')}}</p>

<form action="{{route('knjigas.edit', $knjiga->id)}}" method="GET" style="display: inline;">
    @csrf
    <button type="submit">Uredi</button>
</form>

<form action="{{route('knjigas.confirm-delete', $knjiga->id)}}" method="GET" style="display: inline;">
    @csrf
    @method("DELETE")
    <button type="submit">Obriši</button>
</form>

<br><br>
<form action="{{route('knjigas.index')}}" method="GET">
    @csrf
    <button type="submit">Sve knjige</button>
</form>

@endsection