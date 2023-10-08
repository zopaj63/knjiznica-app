@extends('layouts.layout')

@section('content')

<h1>Lista članova</h1>

<ol>
    @foreach ($clans as $clan)
    <li>
        <form action="{{route('clans.edit', $clan->id)}}" method="GET" style="display: inline;">
            @csrf
            <button type="submit">Uredi</button>
        </form>
        <form action="{{route('clans.confirm-delete', $clan->id)}}" method="GET" style="display: inline;">
            @csrf
            @method("DELETE")
            <button type="submit">Obriši</button>
        </form>
        {{$clan->ime}} 
        {{$clan->prezime}}
    </li>
    @endforeach
</ol>
<br>

<form action="{{route('clans.create')}}" method="GET">
    <button type="submit">Dodaj novog člana</button>
</form>

@endsection