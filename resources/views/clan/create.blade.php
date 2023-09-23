<h1>Dodavanje novog člana</h1>

<form action="{{route('clans.store')}}" method="POST">
    @csrf
    <label>Ime</label>
    <input type="text" name="ime"><br>
    <label>Prezime</label>
    <input type="text" name="prezime"><br>
    <button type="submit">Dodaj člana</button>
</form>