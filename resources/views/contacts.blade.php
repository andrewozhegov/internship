@extends('layouts/main')

@section('page_name', 'Contacts')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/jquery.webui-popover.min.css') }}" />
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('/js/mainfunc.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/clock.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/calendar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/form.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery-3.2.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.webui-popover.min.js') }}"></script>
@endsection

@section('logo', 'CONTACTS')

@section('content')
    <section class="content">
        <h1 style="margin: 50px"> Контактная информация </h1>
        <table border="0" width="100%">
            <tr>
                <th>
                    <a href="https://vk.com/andrew.emptiness" target="_blank">
                        <img class="icon" src="{{ asset('/img/icos/vk.jpg') }}" alt="Vkontakte" />
                    </a>
                </th>
                <th>
                    <a href="https://twitter.com/AndrewOzhegov" target="_blank">
                        <img class="icon" src="{{ asset('/img/icos/twitter.jpg') }}" alt="Twitter" />
                    </a>
                </th>
                <th>
                    <a href="https://www.livelib.ru/reader/andrewozhegov/profile" target="_blank">
                        <img class="icon" src="{{ asset('/img/icos/livelib.jpg') }}" alt="Livelib" />
                    </a>
                </th>
                <th>
                    <a href="http://last.fm/user/andrewozhegov" target="_blank">
                        <img class="icon" src="{{ asset('/img/icos/lastfm.jpg') }}" alt="Lastfm" />
                    </a>
                </th>
                <th>
                    <a href="https://www.instagram.com/andrew.ozhegov/" target="_blank">
                        <img class="icon" src="{{ asset('/img/icos/instagram.jpg') }}" alt="Instagram" />
                    </a>
                </th>
                <th>
                    <a href="https://music.yandex.ru/users/andrew.ozhegov/playlists" target="_blank">
                        <img class="icon" src="{{ asset('/img/icos/yam.jpg') }}" alt="Yandex Music" />
                    </a>
                </th>
                <th>
                    <a href="https://www.youtube.com/channel/UCKTPnJcBGzZNI-93nHboEQQ" target="_blank">
                        <img class="icon" src="{{ asset('/img/icos/youtube.png') }}" alt="YouTube" />
                    </a>
                </th>
            </tr>
        </table>

        <h3 style="margin: 50px">Отправить электронное письмо</h3>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class='center'>
            <form id="form" class="form-horizontal" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="form_fio" class="col-md-2 control-label">Ф.И.О.:</label>
                    <div class="col-md-10">
                        <input type="text" name="name" class="form-control" id="form_fio" value="{{ old('name') }}" placeholder="Фамилия Имя Отчество">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Пол:</label>
                    <div class="col-md-8">
                        <label class="radio-inline">
                            <input type="radio" name="sex" id="form_man" value="man" checked>
                            Мужской
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="sex" id="form_woman" value="woman">
                            Женский
                        </label>
                    </div>
                </div>
                <div class="form-group" id="date">
                    <label class="col-md-2 control-label">Дата рождения:</label>
                    <div class="col-md-10">
                        <input type="date" name="dob" class="form-control" id="form_date" value="{{ old('dob') }}" placeholder="Дата рождения">
                    </div>
                </div>
                <div class="form-group">
                    <label for="form_email" class="col-md-2 control-label">Email:</label>
                    <div class="col-md-10">
                        <input type="email" name="email" class="form-control" id="form_email" value="{{ old('email') }}" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="form_phone" class="col-md-2 control-label">Телефон:</label>
                    <div class="col-md-10">
                        <input type="tel" name="phone" class="form-control" id="form_phone" value="{{ old('phone') }}" placeholder="Телефон">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-6">
                        <input id="submit" type="submit" value="Отправить" class="form-control btn btn-block btn-primary">
                    </div>
                    <div class="col-md-4">
                        <input id="reset" type="button" value="Очистить" class="form-control btn btn-block btn-default">
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection