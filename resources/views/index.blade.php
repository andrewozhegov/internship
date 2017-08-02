<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>LOGO - Main page</title>

    <link type="text/css" rel="stylesheet" href="../../../public/assets/css/style.css" />

    <script type="text/javascript" src="../../../public/assets/js/mainfunc.js"></script>
    <script type="text/javascript" src="../../../public/assets/js/clock.js"></script>
    <script>
        localStorage.setItem('IndexVisitCounter', (+localStorage.getItem('IndexVisitCounter') + 1));
        setCookie("IndexCookie", + getCookie("IndexCookie") + 1);
    </script>

</head>

<body>
<header>
    <nav>
        <ul class="submenu">
            <li><a href="/">main page</a></li>
            <li><a href="/aboutme" onmouseover="setBg('aboutme')" onmouseout="setBg('index')">about me</a></li>
            <li> <a href="/interests" onmouseover="setBg('interests')" onmouseout="setBg('index')">interests</a>
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
        <script>setBg("index")</script>
        <div class="head-overlay">
            <div class="logo">
                <h4>web-programming</h4>
                <h3>HTML5 + CSS3 + JS + PHP</h3>
                <h1>ANDREW EMPTINESS</h1>
                <h6>SEVGU</h6>
            </div>
        </div>
    </section>

    <section class="content">
        <h1>Основное содержимое сайта</h1>
        <div class="row anim">
            <a href="/interests" class="col11">
                <h4>interests</h4>
                <p>some information about</p>
                <img src="../../../public/assets/img/icos/interests.ico" alt="">
            </a>
            <a href="/aboutme" class="col12">
                <h4>about me</h4>
                <p>some information</p>
                <img width="90px" src="../../../public/assets/img/icos/aboutme.ico" alt="">
            </a>
        </div>
        <div class="row anim">
            <a href="/study" class="col21">
                <h4>study</h4>
                <p>some information about</p>
                <img width="90px" src="../../../public/assets/img/icos/study.ico" alt="">
            </a>
            <a href="/photos" class="col22">
                <h4>photos</h4>
                <p>some information about</p>
                <img width="90px" src="../../../public/assets/img/icos/photos.ico" alt="">
            </a>
        </div>
        <div class="row anim">
            <a href="/contacts" class="col31">
                <h4>contacts</h4>
                <p>some information about</p>
                <img width="90px" src="../../../public/assets/img/icos/contacts.ico" alt="">
            </a>
            <a href="/test" class="col32">
                <h4>test</h4>
                <p>some information about</p>
                <img width="90px" src="../../../public/assets/img/icos/test.ico" alt="">
            </a>
        </div>
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
