<h1>Popis knjiga</h1>
    <ol>
        @foreach ($knjigas as $knjiga)
        <li>{{$knjiga->naslov}} {{$knjiga->autor}} {{$knjiga->god_izd}}</li>
        @endforeach
    </ol>
<br>

<a href="{{route('knjigas.create')}}">Dodaj novu knjigu</a>