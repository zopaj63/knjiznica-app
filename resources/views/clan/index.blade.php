<h1>Lista članova</h1>
    <ol>
        @foreach ($clans as $clan) // niz dobiven iz controllera, compact()
        <li>{{$clan->ime}} {{$clan->prezime}}</li>
        @endforeach
    </ol>
<br>

<a href="{{route('clans.create')}}">Dodaj novog člana</a>
