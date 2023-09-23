<h1>Potvrda brisanja Člana</h1>
<p>Član: {{$clan->ime}} {{$clan->prezime}}</p>
<form action="{{route('clans.destroy', $clan->id)}}" method="POST">
    @csrf
    @method("DELETE")
    <button type="submit">Izbriši</button>
    <button onclick="{{route('clans.index')}}">Odustani</button>
</form>