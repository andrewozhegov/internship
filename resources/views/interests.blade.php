@extends('layouts/main')

@section('page_name', 'About me')

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
            <?php
            $book1 = array(
                'poster' => '../../../public/assets/img/books/kafka.jpg',
                'name' => 'Кафка на пляже',
                'author' => 'Харуки Мураками',
                'year' => '2002',
                'livelib_href' => 'https://www.livelib.ru/book/1001402358-kafka-na-plyazhe-murakami-h'
            );
            $book2 = array(
                'poster' => '../../../public/assets/img/books/catcher.jpg',
                'name' => 'Над пропастью во ржи',
                'author' => 'Джером Дэвид Селинджер',
                'year' => '1951',
                'livelib_href' => 'https://www.livelib.ru/book/1001074375-the-catsher-in-the-rye-nad-propastyu-vo-rzhi-dzherom-devid-selindzher'
            );
            $book3 = array(
                'poster' => '../../../public/assets/img/books/hobbit.jpg',
                'name' => 'Хоббит',
                'author' => 'Дж. Р. Р. Толкин',
                'year' => '1937',
                'livelib_href' => 'https://www.livelib.ru/book/1002207233-hobbit-dzh-r-r-tolkin'
            );
            //Home::putRecords($book1, $book2, $book3);
            ?>
        </section>

        <section>
            <h3><a name="films">● фильмы ●</a></h3>
            <?php
            $film1 = array(
                'poster' => '../../../public/assets/img/films/im-origins.jpg',
                'name' => 'Я - начало',
                'author' => 'Жанр: Научная фантастика, Драма',
                'year' => 'США, 2014',
                'kinopoisk_href' => 'https://www.kinopoisk.ru/film/761933/'
            );
            $film2 = array(
                'poster' => '../../../public/assets/img/films/the-theory-of-everything.jpg',
                'name' => 'Вселенная Стивена Хоккинга',
                'author' => 'Жанр: Биография, Драма',
                'year' => 'Великобритания, 2014',
                'kinopoisk_href' => 'https://www.kinopoisk.ru/film/770973/'
            );
            $film3 = array(
                'poster' => '../../../public/assets/img/films/dead-poets-society.jpg',
                'name' => 'Общество мертвых поэтов',
                'author' => 'Жанр: Драма',
                'year' => 'США, 1989',
                'kinopoisk_href' => 'https://www.kinopoisk.ru/film/4996/'
            );
           // Home::putRecords($film1, $film2, $film3);
            ?>
        </section>

        <section>
            <h3><a name="music">● музыка ●</a></h3>
            <?php
            $band1 = array(
                'poster-m' => '../../../public/assets/img/music/hannah-trigwell.jpg',
                'name' => 'Hannah Trigwell',
                'author' => 'Жанр: Pop, Instrumental',
                'year' => 'Великобритания, 1990',
                'lastfm_href' => 'https://www.last.fm/music/Hannah+Trigwell',
                'yam_href' => 'https://music.yandex.ru/artist/3136230',
                'insta_href' => 'https://www.instagram.com/hannahtrigwell/',
                'youtube_href' => 'https://www.youtube.com/user/hannahtrigwell'
            );
            $band2 = array(
                'poster-m' => '../../../public/assets/img/music/lana-del-rey.jpg',
                'name' => 'Lana Del Rey',
                'author' => 'Жанр: Pop, Indie, Rock',
                'year' => 'США, 1985',
                'lastfm_href' => 'https://www.last.fm/ru/music/Lana%20Del%20Rey',
                'yam_href' => 'https://music.yandex.ru/artist/643850',
                'insta_href' => 'https://www.instagram.com/lanadelrey/',
                'youtube_href' => 'https://www.youtube.com/user/LanaDelRey/'
            );
            $band3 = array(
                'poster-m' => '../../../public/assets/img/music/oh-wonder.jpg',
                'name' => 'Oh Wonder',
                'author' => 'Жанр: Indie',
                'year' => 'Великобритания, 2014',
                'lastfm_href' => 'https://www.last.fm/music/Oh+Wonder',
                'yam_href' => 'https://music.yandex.ru/artist/3680609',
                'insta_href' => 'https://www.instagram.com/ohwondermusic/',
                'youtube_href' => 'https://www.youtube.com/user/OhWonderMusicVEVO'
            );
            //Home::putRecords($band1, $band2, $band3);
            ?>
        </section>
    </section>
@endsection