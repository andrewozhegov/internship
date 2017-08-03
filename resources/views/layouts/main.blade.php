<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>LOGO - @yield('page_name')</title>

    @yield('css')

    @yield('js')

</head>

<body>
<header>
    @section('nav')
        <nav>
            <ul class="submenu">
                <li><a href="/" onmouseover="setBg('index')" onmouseout="setBg('index')">main page</a></li>
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
    @show
</header>

<main>
    <section id="head" class="head">
        <script>setBg("index")</script>
        <div class="head-overlay">
            <div class="logo">
                <h4>web-programming</h4>
                <h3>HTML5 + CSS3 + JS + PHP</h3>
                <h1>@yield('logo', 'ANDREW EMPTINESS')</h1>
                <h6>SEVGU</h6>
            </div>
        </div>
    </section>
    @section('content')
        <section class="content">
            <h1>СТРАНИЦА ШАБЛОНА ПРОЕКТИРОВАНИЯ</h1>
        </section>
    @show
</main>

<footer>
    @section('footer')
        <div class="foot">
            <div class="currentDate" id="times"></div><br>
            <p>SevGU, Andrew Emptiness © 2017</p>
        </div>
    @show
</footer>
</body>
</html>