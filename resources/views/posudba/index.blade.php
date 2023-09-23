<h1>Posudba knjige</h1>
    <ol>
        @foreach ($posudbas as $posudba)
        <li>{{$posudba->id}} - 
            Član ID: {{$posudba->clan_id}} 
            Knjiga ID: {{$posudba->knjiga_id}} 
            Datum posudbe: {{$posudba->datum_posudbe}}
        </li>
        @endforeach
    </ol>

<br>
<a href="{{route('posudbas.create')}}">Dodaj novu posudbu</a>
