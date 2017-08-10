@extends('layouts/main')

@section('page_name', 'Interests')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}" />
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('/js/mainfunc.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/clock.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/record.js') }}"></script>
@endsection

@section('logo', 'INTERESTS')

@section('content')
    <section class="content">
        <h1> Мои интересы </h1>
        <div class="button">
            <a href="#books">BOOKS</a>
            <a href="#films">FILMS</a>
            <a href="#music">MUSIC</a>
        </div>
        <section>
            <h3><a name="books">● книги ●</a></h3>

            @if(isset($books))
                @foreach($books as $book)
                    <table class="record">
                        <tr>
                            <th rowspan="4" width="25%">
                                <img class="poster" src="{{ asset($book['poster']) }}" alt="" />
                            </th>
                            <th><h1>{{ $book['name'] }}</h1></th>
                        </tr>
                        <tr><th><h3>{{ $book['author'] }}</h3></th></tr>
                        <tr><th><h3>{{ $book['year'] }}</h3></th></tr>
                        <tr>
                            <th>
                                <a href="{{ $book['livelib'] }}" target="_blank">
                                    <img class="icon" src="{{ asset('img/icos/livelib.jpg') }}" alt="Livelib - {{ $book['name'] }}" /></a>
                            </th>
                        </tr>
                    </table>
                @endforeach
            @endif

        </section>

        <section>
            <h3><a name="films">● фильмы ●</a></h3>

            @if(isset($films))
                @foreach($films as $film)
                    <table class="record">
                        <tr>
                            <th rowspan="4" width="25%">
                                <img class="poster" src="{{ asset($film['poster']) }}" alt="" />
                            </th>
                            <th><h1>{{ $film['name'] }}</h1></th>
                        </tr>
                        <tr><th><h3>{{ $film['genre'] }}</h3></th></tr>
                        <tr><th><h3>{{ $film['year'] }}, {{ $film['country'] }}</h3></th></tr>
                        <tr>
                            <th>
                                <a href="{{ $film['kinopoisk'] }}" target="_blank">
                                    <img class="icon" src="{{ asset('img/icos/kinopoisk.png') }}" alt="Kinopoisk - {{ $film['name'] }}" /></a>
                            </th>
                        </tr>
                    </table>
                @endforeach
            @endif

        </section>

        <section>
            <h3><a name="music">● музыка ●</a></h3>

            @if(isset($bands))
                @foreach($bands as $band)
                    <table class="record">
                        <tr>
                            <th rowspan="4" width="30%">
                                <img class="poster-m" src="{{ asset($band['poster']) }}" alt="" />
                            </th>
                            <th><h1>{{ $band['name'] }}</h1></th>
                        </tr>
                        <tr><th><h3>{{ $band['genre'] }}</h3></th></tr>
                        <tr><th><h3>{{ $band['year'] }}, {{ $band['country'] }}</h3></th></tr>
                        <tr>
                            <th>
                                <a href="{{ $band['lastfm'] }}" target="_blank">
                                    <img class="icon" src="{{ asset('img/icos/lastfm.jpg') }}" alt="Lastfm - {{ $band['name'] }}" /></a>
                                <a href="{{ $band['yam'] }}" target="_blank">
                                    <img class="icon" src="{{ asset('img/icos/yam.jpg') }}" alt="Yandex Music - {{ $band['name'] }}" /></a>
                                <a href="{{ $band['instagram'] }}" target="_blank">
                                    <img class="icon" src="{{ asset('img/icos/instagram.jpg') }}" alt="Instagram - {{ $band['name'] }}" /></a>
                                <a href="{{ $band['youtube'] }}" target="_blank">
                                    <img class="icon" src="{{ asset('img/icos/youtube.png') }}" alt="YouTube - {{ $band['name'] }}" /></a>
                            </th>
                        </tr>
                    </table>
                @endforeach
            @endif

        </section>
    </section>
@endsection