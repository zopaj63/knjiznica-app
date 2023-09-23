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
        <hr>
    </li>
    @endforeach
</ol>
<a href="{{route('clans.create')}}">Dodaj novog člana</a>