<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>LOGO - Interests</title>

    <link rel="stylesheet" type="text/css" href="../../../public/assets/css/style.css" />

    <script type="text/javascript" src="../../../public/assets/js/mainfunc.js"></script>
    <script type="text/javascript" src="../../../public/assets/js/record.js"></script>
    <script type="text/javascript" src="../../../public/assets/js/clock.js"></script>
    <script>
        localStorage.setItem('InterestsVisitCounter', (+localStorage.getItem('InterestsVisitCounter') + 1));
        setCookie("InterestsCookie", + getCookie("InterestsCookie") + 1);
    </script>

</head>

<body>
<header>
    <nav>
        <ul class="submenu">
            <li><a href="/" onmouseover="setBg('index')" onmouseout="setBg('interests')">main page</a></li>
            <li><a href="/aboutme" onmouseover="setBg('aboutme')" onmouseout="setBg('index')">about me</a></li>
            <li> <a href="/interests">interests</a>
                <ul>
                    <li><a href="/interests#books">books</a></li>
                    <li><a href="/interests#films">films</a></li>
                    <li><a href="/interests#music">bands</a></li>
                </ul>
            </li>
            <li><a href="/study" onmouseover="setBg('study')" onmouseout="setBg('index')">study</a></li>
            <li><a href="/photos" onmouseover="setBg('photos')" onmouseout="setBg('index')">photos</a></li>
            <li><a href="/contacts" onmouseover="setBg('contacts')" onmouseout="setBg('index')">contacts</a></li>
            <li><a href="/test" onmouseover="setBg('test')" onmouseout="setBg('index')">test</a></li>
        </ul>
    </nav>
</header>

<main>
    <section id="head" class="head">
        <script>setBg("interests")</script>
        <div class="head-overlay">
            <div class="logo">
                <h4>web-programming</h4>
                <h3>HTML5 + CSS3 + JS + PHP</h3>
                <h1>INTERESTS</h1>
                <h6>some information about</h6>
            </div>
        </div>
    </section>

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
            Home::putRecords($book1, $book2, $book3);
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
            Home::putRecords($film1, $film2, $film3);
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
            Home::putRecords($band1, $band2, $band3);
            ?>
        </section>
    </section>
</main>

<footer>
    <div class="foot">
        <div class="currentDate" id="times"></div><br>
        <p>SevGU, Andrew Emptiness © 2017</p>
    </div>
</footer>
</body>
</html>
