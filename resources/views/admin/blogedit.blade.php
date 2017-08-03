@extends('layouts/main')

@section('page_name', 'Edit blog')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('/js/mainfunc.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/clock.js') }}"></script>
@endsection

@section('logo', 'EDIT BLOG')

@section('content')
    <section class="content">

            <ul>
                <li><a href="/admin/">admin panel</a></li>
                <li><a href="/admim/interests_edit">edit interests</a></li>
                <li><a href="/admin/photos_edit">edit photos</a></li>
                <li><a href="/admin/blog_edit">edit blog</a></li>
                <li><a href="/admin/test_book">test book</a></li>
                <li><a href="/admin/visitors">visitors</a></li>
            </ul>

        <div class="container">
            <a class="btn btn-default btn-primary" href="/blog" role="button">Назад</a>
            <p class="lead">Редактирование блога</p>
            <form enctype="multipart/form-data" class="form-horizontal" method="post" id="form">
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="radio">
                            <label>
                                <input type="radio" id="form_manual" name="mode" checked value="manual">
                                Форма ввода руками
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" id="form_auto" name="mode" value="file">
                                Форма ввода из файла
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_topic">Тема сообщения</label>
                        <input type="text" class="form-control" name="topic" id="form_topic" placeholder="Тема сообщения">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_author">Автор</label>
                        <input type="text" class="form-control" name="author" id="form_author" placeholder="Автор">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_photo">Фотография</label>
                        <input type="file" accept=".png,.jpeg,.jpg" name="photo" id="form_photo">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_message">Сообщение</label>
                        <textarea class="form-control" name="message" id="form_message" rows="3"
                                  placeholder="Сообщение"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_file">Файл с записями</label>
                        <input type="file" accept=".csv" name="records" id="form_file">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8">
                        <input id="submit" class="form-control btn btn-block btn-primary"  type="submit" value="Отправить"><!--disabled-->
                    </div>
                    <div class="col-md-4">
                        <input class="form-control btn btn-block btn-default" type="reset" value="Очистить">
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection