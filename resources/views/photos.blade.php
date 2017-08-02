<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>LOGO - Photos</title>

    <link rel="stylesheet" type="text/css" href="../../../public/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../../../public/assets/css/gallery2.css" />

    <script type="text/javascript" src="../../../public/assets/js/mainfunc.js"></script>
    <script type="text/javascript" src="../../../public/assets/js/gallery.js"></script>
    <script type="text/javascript" src="../../../public/assets/js/jquery-1.4.min.js"></script>
    <script type="text/javascript" src="../../../public/assets/js/gallery2.js"></script>
    <script type="text/javascript" src="../../../public/assets/js/clock.js"></script>
    <script>
        localStorage.setItem('GalleryVisitCounter', (+localStorage.getItem('GalleryVisitCounter') + 1));
        setCookie("GalleryCookie", + getCookie("GalleryCookie") + 1);
    </script>

</head>

<body>
<header>
    <nav>
        <ul class="submenu">
            <li><a href="/" onmouseover="setBg('index')" onmouseout="setBg('interests')">main page</a></li>
            <li><a href="/aboutme" onmouseover="setBg('aboutme')" onmouseout="setBg('index')">about me</a></li>
            <li> <a href="/interests" onmouseover="setBg('interests')" onmouseout="setBg('index')">interests</a>
                <ul>
                    <li><a href="/interests#books">books</a></li>
                    <li><a href="/interests#films">films</a></li>
                    <li><a href="/interests#music">bands</a></li>
                </ul>
            </li>
            <li><a href="/study" onmouseover="setBg('study')" onmouseout="setBg('index')">study</a></li>
            <li><a href="/photos">photos</a></li>
            <li><a href="/contacts" onmouseover="setBg('contacts')" onmouseout="setBg('index')">contacts</a></li>
            <li><a href="/test" onmouseover="setBg('test')" onmouseout="setBg('index')">test</a></li>
        </ul>
    </nav>
</header>

<main>
    <section id="head" class="head">
        <script>setBg("photos")</script>
        <div class="head-overlay">
            <div class="logo">
                <h4>web-programming</h4>
                <h3>HTML5 + CSS3 + JS + PHP</h3>
                <h1>PHOTOGALLERY</h1>
                <h6>some information about</h6>
            </div>
        </div>
    </section>

    <section class="content">
        <h1> Фотогалерея </h1>
        <?php
            Home::gallery()
        ?>
        <!--<div class="gallery-box">
            <div class="view">
                <div class="big-image"><img title="подсказка по картинке 1" src="../../../public/assets/img/photos/1.jpg" alt="image11"></div>
                <a href="#" class="prev"></a>
                <a href="#" class="next"></a>
            </div>

            <div class="thumbnails">
                <a href="../../../public/assets/img/photos/1.jpg" class="active"><img title="подсказка по картинке 1" src="../../../public/assets/img/photos/mic/1.jpg" alt=""/></a>
                <a href="../../../public/assets/img/photos/2.jpg"><img title="подсказка по картинке 2" src="../../../public/assets/img/photos/mic/2.jpg" alt=""/></a>
                <a href="../../../public/assets/img/photos/3.jpg"><img title="подсказка по картинке 3" src="../../../public/assets/img/photos/mic/3.jpg" alt=""/></a>
                <a href="../../../public/assets/img/photos/4.jpg"><img title="подсказка по картинке 4" src="../../../public/assets/img/photos/mic/4.jpg" alt=""/></a>
                <a href="../../../public/assets/img/photos/5.jpg"><img title="подсказка по картинке 5" src="../../../public/assets/img/photos/mic/5.jpg" alt=""/></a>
                <a href="../../../public/assets/img/photos/6.jpg"><img title="подсказка по картинке 6" src="../../../public/assets/img/photos/mic/6.jpg" alt=""/></a>
                <a href="../../../public/assets/img/photos/7.jpg"><img title="подсказка по картинке 7" src="../../../public/assets/img/photos/mic/7.jpg" alt=""/></a>
                <a href="../../../public/assets/img/photos/8.jpg"><img title="подсказка по картинке 8 " src="../../../public/assets/img/photos/mic/8.jpg" alt=""/></a>
                <a href="../../../public/assets/img/photos/9.jpg"><img title="подсказка по картинке 9" src="../../../public/assets/img/photos/mic/9.jpg" alt=""/></a>
                <a href="../../../public/assets/img/photos/10.jpg"><img title="подсказка по картинке 10" src="../../../public/assets/img/photos/mic/10.jpg" alt=""/></a>
                <a href="../../../public/assets/img/photos/11.jpg"><img title="подсказка по картинке 11" src="../../../public/assets/img/photos/mic/11.jpg" alt=""/></a>
                <a href="../../../public/assets/img/photos/12.jpg"><img title="подсказка по картинке 12" src="../../../public/assets/img/photos/mic/12.jpg" alt=""/></a>
                <a href="../../../public/assets/img/photos/13.jpg"><img title="подсказка по картинке 13" src="../../../public/assets/img/photos/mic/13.jpg" alt=""/></a>
                <a href="../../../public/assets/img/photos/14.jpg"><img title="подсказка по картинке 14" src="../../../public/assets/img/photos/mic/14.jpg" alt=""/></a>
                <a href="../../../public/assets/img/photos/15.jpg"><img title="подсказка по картинке 15" src="../../../public/assets/img/photos/mic/15.jpg" alt=""/></a>
            </div>
        </div>-->
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
