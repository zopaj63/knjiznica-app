<h1>Posudba</h1>
    <ol>
        @foreach ($posudbas as $posudba)
        <li>{{$posudba->id}} - Član ID: {{$posudba->clan_id}} Knjiga ID: 
            {{$posudba->knjiga_id}} Datum posudbe: 
            {{$posudba->datum_posudbe}}</li>
        @endforeach
    </ol>

<br>
<a href="{{route('clans.create')}}">Dodaj novog člana</a>
