<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>LOGO - @yield('page_name')</title>

    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    @yield('css')

    <script type="text/javascript" src="{{ asset('/js/mainfunc.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/clock.js') }}"></script>
    @yield('js')

</head>

<body>
<header>
    @section('nav')
        <nav>
            <ul class="submenu">
                <li><a href="/" onmouseover="setBg('index')" onmouseout="setBg('index')">main page</a></li>
                <li><a href="/aboutme" onmouseover="setBg('aboutme')" onmouseout="setBg('index')">about me</a></li>
                <li><a href="/interests" onmouseover="setBg('interests')" onmouseout="setBg('index')">interests</a>
                    <ul>
                        <li><a href="/interests#books">books</a></li>
                        <li><a href="/interests#films">films</a></li>
                        <li><a href="/interests#music">bands</a></li>
                    </ul>
                </li>
                <li><a href="/study" onmouseover="setBg('study')" onmouseout="setBg('index')">study</a></li>
                <li><a href="/photos" onmouseover="setBg('photos')" onmouseout="setBg('index')">photos</a></li>
                <li><a href="/contacts" onmouseover="setBg('contacts')" onmouseout="setBg('index')">contacts</a></li>
                <li><a href="/blog" onmouseover="setBg('test')" onmouseout="setBg('index')">blog</a></li>
                <li><a href="/test" onmouseover="setBg('test')" onmouseout="setBg('index')">test</a></li>
            </ul>
        </nav>
    @show
</header>

<main>
    @section("logos")
    <section id="head" class="head">
        <script>setBg("index")</script>
        <div class="head-overlay">
            <div class="logo">
                <h4>web-programming</h4>
                <h3>LARAVEL + BOOTSTRAP</h3>
                <h1>@yield('logo', 'ANDREW EMPTINESS')</h1>
                <h6>SEVGU</h6>
            </div>
        </div>
    </section>
    @show

    <section class="content container">
        @yield('content')
    </section>
</main>

<footer>
    @section('footer')
        <div class="foot">
            <div class="currentDate" id="times"></div><br>
            <p ><a style="color: white" href="/admin">SevGU, Andrew Emptiness © 2017</a></p>
        </div>
    @show
</footer>
</body>
</html>