<h1>Popis knjiga</h1>

<hr>

<table border="1">
    <tr>
        <th>Naslov</th>
        <th>Autor</th>
        <th>Godina izdanja</th>
        <th colspan="2">Akcija</th>
    </tr>
    @foreach ($knjigas as $knjiga)
        <tr>
            <td>{{$knjiga->naslov}}</td>
            <td>{{$knjiga->autor}}</td>
            <td>{{$knjiga->god_izd}}</td>
            <td>
                <form action="{{route('knjigas.edit', $knjiga->id)}}" method="GET">
                    @csrf
                    <button type="submit">Uredi</button>
                </form>
            </td>
            <td>
                <form action="{{route('knjigas.confirm-delete', $knjiga->id)}}" method="GET">
                    @csrf
                    @method("DELETE")
                    <button type="submit">Obriši</button>
                </form>
            </td>
        </tr>
    @endforeach
    <tr>
        <td colspan="5"><a href="{{route('knjigas.create')}}"><b>Dodaj novu knjigu</b></a></td>
    </tr>
</table>