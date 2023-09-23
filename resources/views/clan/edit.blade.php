<h1>Uređivanje člana</h1>

<form action="{{route('clans.update', $clan->id)}}" method="POST">
    @csrf
    @method("PUT")

    <label>Ime</label><br>
    <input type="text" name="ime" value="{{$clan->ime}}"><br>
    <label>Prezime</label><br>
    <input type="text" name="prezime" value="{{$clan->prezime}}"><br>
    <button type="submit">Ažuriraj člana</button>
</form>