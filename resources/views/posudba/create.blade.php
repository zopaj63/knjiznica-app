<h1>Unos posudbe</h1>

    <form action="{route('posudbas.store')}}" method="POST">
        @csrf

        <label>Odabir člana</label>
        <select>
            @foreach
            <option value="{{}}">{{}}</option>

            @endforeach



        </select>

        <label>Odabir knjige</label>
        <select>
            @foreach
            <option value=" ">knjiga-id</option>

            @endforeach



        </select>
        <br><br>
        <label>Datum posudbe</label>
        <input type="text" name="datum_posudbe"><br><br>
        <label>Datum povrata</label>
        <input type="text" name="datum_povrata"><br><br>

        <button type="submit">Dodaj novu posudbu</button>

    </form>