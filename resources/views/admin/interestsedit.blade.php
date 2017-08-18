@extends('layouts/main')

@section('page_name', 'Edit interests')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('/js/mainfunc.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/clock.js') }}"></script>
@endsection

@section('logo', 'INTERESTS EDIT')

@section('content')
    <section class="content">
        <h1>РЕДАКТОР ИНТЕРЕСОВ</h1>
        @include('admin.default.admin-nav')

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(count($books) > 0)
            <div class="container">
                <p class="lead">Книги</p>
                <table class="table table-bordered table-responsive table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Poster</th>
                        <th>Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $book)
                        <tr>
                            <th>{{ $book->id }}</th>
                            <th>
                                <img style="width: 64px" src="{{ asset($book->poster()) }}" alt="" />
                            </th>
                            <th>{{ $book->name }}</th>
                            <th>
                                <a href="{{ $book['livelib'] }}" target="_blank">
                                    <img class="icon" src="{{ asset('img/icos/livelib.jpg') }}" alt="Livelib - {{ $book['name'] }}" /></a>
                            </th>
                            <th>
                                <a href="/admin/interestsedit/book/{{ $book->id }}">Изменить</a><br>
                                <a href="/admin/interestsedit/del/book/{{ $book->id }}">Удалить</a>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        @if(count($films) > 0)
            <div class="container">
                <p class="lead">Фильмы</p>
                <table class="table table-bordered table-responsive table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Poster</th>
                        <th>Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($films as $film)
                        <tr>
                            <th>{{ $film->id }}</th>
                            <th>
                                <img style="width: 64px" src="{{ asset($film->poster()) }}" alt="" />
                            </th>
                            <th>{{ $film->name }}</th>
                            <th>
                                <a href="{{ $film['kinopoisk'] }}" target="_blank">
                                    <img class="icon" src="{{ asset('img/icos/kinopoisk.png') }}" alt="Kinopoisk - {{ $film['name'] }}" /></a>
                            </th>
                            <th>
                                <a href="/admin/interestsedit/film/{{ $film->id }}">Изменить</a><br>
                                <a href="/admin/interestsedit/del/film/{{ $film->id }}">Удалить</a>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        @if(count($bands) > 0)
            <div class="container">
                <p class="lead">Музыка</p>
                <table class="table table-bordered table-responsive table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Poster</th>
                        <th>Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bands as $band)
                        <tr>
                            <th>{{ $band->id }}</th>
                            <th>
                                <img style="width: 64px" src="{{ asset($band->poster()) }}" alt="" />
                            </th>
                            <th>{{ $band->name }}</th>
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
                            <th>
                                <a href="/admin/interestsedit/band/{{ $band->id }}">Изменить</a><br>
                                <a href="/admin/interestsedit/del/band/{{ $band->id }}">Удалить</a>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        <div class="container">
            <p class="lead">Добавить книгу</p>
            <form enctype="multipart/form-data" class="form-horizontal" method="post" id="form">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_topic">Название</label>
                        <input type="text" class="form-control" name="name" id="form_topic" placeholder="Название фото">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_photo">Постер</label>
                        <input type="file" accept=".png,.jpeg,.jpg" name="book-img" id="form_photo">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_topic">Автор</label>
                        <input type="text" class="form-control" name="author" id="form_topic" placeholder="Имя автора">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_topic">Год</label>
                        <input type="text" class="form-control" name="year" id="form_topic" placeholder="Год">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_topic">Livelib link</label>
                        <input type="text" class="form-control" name="livelib" id="form_topic" placeholder="Книга на livelib">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_topic">Аннотация</label>
                        <input type="text" class="form-control" name="annotation" id="form_topic" placeholder="Аннотация">
                    </div>
                </div>
                <input type="hidden" name="item" value="book">
                <div class="form-group">
                    <div class="col-md-8">
                        <input id="submit" class="form-control btn btn-block btn-primary"  type="submit" value="Отправить">
                    </div>
                    <div class="col-md-4">
                        <input class="form-control btn btn-block btn-default" type="reset" value="Очистить">
                    </div>
                </div>
            </form>
        </div>


        <div class="container">
            <p class="lead">Добавить фильм</p>
            <form enctype="multipart/form-data" class="form-horizontal" method="post" id="form">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_topic">Название</label>
                        <input type="text" class="form-control" name="name" id="form_topic" placeholder="Название">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_photo">Постер</label>
                        <input type="file" accept=".png,.jpeg,.jpg" name="film-img" id="form_photo">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_topic">Жанр</label>
                        <input type="text" class="form-control" name="genre" id="form_topic" placeholder="Жанр">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_topic">Год</label>
                        <input type="text" class="form-control" name="year" id="form_topic" placeholder="Год">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_topic">Страна</label>
                        <input type="text" class="form-control" name="country" id="form_topic" placeholder="Страна">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_topic">Kinopoisk</label>
                        <input type="text" class="form-control" name="kinopoisk" id="form_topic" placeholder="Kinopoisk">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_topic">Аннотация</label>
                        <input type="text" class="form-control" name="annotation" id="form_topic" placeholder="Аннотация">
                    </div>
                </div>
                <input type="hidden" name="item" value="film">
                <div class="form-group">
                    <div class="col-md-8">
                        <input id="submit" class="form-control btn btn-block btn-primary"  type="submit" value="Отправить">
                    </div>
                    <div class="col-md-4">
                        <input class="form-control btn btn-block btn-default" type="reset" value="Очистить">
                    </div>
                </div>
            </form>
        </div>

        <div class="container">
            <p class="lead">Добавить музыку</p>
            <form enctype="multipart/form-data" class="form-horizontal" method="post" id="form">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_topic">Название</label>
                        <input type="text" class="form-control" name="name" id="form_topic" placeholder="Название">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_photo">Постер</label>
                        <input type="file" accept=".png,.jpeg,.jpg" name="band-img" id="form_photo">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_topic">Жанр</label>
                        <input type="text" class="form-control" name="genre" id="form_topic" placeholder="Жанр">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_topic">Год</label>
                        <input type="text" class="form-control" name="year" id="form_topic" placeholder="Год">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_topic">Страна</label>
                        <input type="text" class="form-control" name="country" id="form_topic" placeholder="Страна">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_topic">Lastfm</label>
                        <input type="text" class="form-control" name="lastfm" id="form_topic" placeholder="Lastfm">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_topic">Yandex Music</label>
                        <input type="text" class="form-control" name="yam" id="form_topic" placeholder="YaM">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_topic">Instagram</label>
                        <input type="text" class="form-control" name="instagram" id="form_topic" placeholder="Instagram">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_topic">YouTube</label>
                        <input type="text" class="form-control" name="youtube" id="form_topic" placeholder="youtube">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_topic">Аннотация</label>
                        <input type="text" class="form-control" name="annotation" id="form_topic" placeholder="Аннотация">
                    </div>
                </div>
                <input type="hidden" name="item" value="band">
                <div class="form-group">
                    <div class="col-md-8">
                        <input id="submit" class="form-control btn btn-block btn-primary"  type="submit" value="Отправить">
                    </div>
                    <div class="col-md-4">
                        <input class="form-control btn btn-block btn-default" type="reset" value="Очистить">
                    </div>
                </div>
            </form>
        </div>

        {{--
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#panel1">Панель 1</a></li>
            <li><a data-toggle="tab" href="#panel2">Панель 2</a></li>
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    Другие панели
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a data-toggle="tab" href="#panel3">Панель 3</a></li>
                    <li><a data-toggle="tab" href="#panel4">Панель 4</a></li>
                </ul>
            </li>
        </ul>

        <div class="tab-content">
            <div id="panel1" class="tab-pane fade in active">
                <h3>Панель 1</h3>
                <p>Содержимое 1 панели...</p>
            </div>
            <div id="panel2" class="tab-pane fade">
                <h3>Панель 2</h3>
                <p>Содержимое 2 панели...</p>
            </div>
            <div id="panel3" class="tab-pane fade">
                <h3>Панель 3</h3>
                <p>Содержимое 3 панели...</p>
            </div>
            <div id="panel4" class="tab-pane fade">
                <h3>Панель 4</h3>
                <p>Содержимое 4 панели...</p>
            </div>
        </div>
        --}}
    </section>
@endsection

{{--
     TODO: оформить это все во вкладках
     TODO: придумать забавные placeholderы

     --}}