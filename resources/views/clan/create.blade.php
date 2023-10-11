@extends('layouts.layout')

@section('content')


<h1>Dodavanje novog člana</h1>
<br>
<form action="{{route('clans.store')}}" method="POST">
    @csrf
    <label>Ime</label><br>
    <input type="text" name="ime"><br><br>
    <label>Prezime</label><br>
    <input type="text" name="prezime"><br><br>
    <button type="submit">Dodaj člana</button>
</form>

<br>
<form action="{{route('clans.index')}}" method="GET">
    <button type="submit">Odustani</button>
</form>

@endsection