@extends('layouts.layout')

@section('content')

<h1>Uređivanje knjige</h1>
<br>
<form action="{{route('knjigas.update', $knjiga->id)}}" method="POST">
    @csrf
    @method("PUT")

    <label>Naslov</label><br>
    <input type="text" name="naslov" value="{{$knjiga->naslov}}"><br><br>
    <label>Autor</label><br>
    <input type="text" name="autor" value="{{$knjiga->autor}}"><br><br>
    <label>Godina izdanja</label><br>
    <input type="text" name="god_izd" value="{{$knjiga->god_izd}}"><br><br>
    <button type="submit">Ažuriraj knjigu</button>
</form>

<br><br>
<form action="{{route('knjigas.index')}}" method="GET">
    <button type="submit">Odustani</button>
</form>

@endsection