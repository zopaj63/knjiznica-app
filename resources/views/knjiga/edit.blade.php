<h1>Uređivanje knjige</h1>

<form action="{{route('knjigas.update', $knjiga->id)}}" method="POST">
    @csrf
    @method("PUT")

    <label>Naslov</label><br>
    <input type="text" name="naslov" value="{{$knjiga->naslov}}"><br>
    <label>Autor</label><br>
    <input type="text" name="autor" value="{{$knjiga->autor}}"><br>
    <label>Godina izdanja</label><br>
    <input type="text" name="god_izd" value="{{$knjiga->god_izd}}"><br>
    <button type="submit">Ažuriraj knjigu</button>
</form>