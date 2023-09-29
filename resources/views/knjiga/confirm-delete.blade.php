<h1>Potvrda brisanja knjige</h1>
<p>Naziv: {{$knjiga->naslov}}<br> autor: {{$knjiga->autor}}</p>
<form action="{{route('knjigas.destroy', $knjiga->id)}}" method="POST">
    @csrf
    @method("DELETE")
    <button type="submit">Obriši</button>
</form>
<br>
<form action="{{route('knjigas.index')}}" method="GET">
    <button type="submit">Odustani</button>
</form>