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
        <h1>РЕДАКТИРОВАНИЕ БЛОГА</h1>

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

        @if (($status == 'update') && (isset($blogs)))
            <div class="container">
                <p class="lead">Изменить запись</p>
                <form enctype="multipart/form-data" class="form-horizontal" method="post" id="form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="form_topic">Тема сообщения</label>
                            <input type="text" class="form-control" name="title" value="{{ $blogs['title'] }}" id="form_topic" placeholder="Тема сообщения">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="form_photo">Фотография</label>
                            <img src="{{ asset($blogs['image']) }}" alt="">
                            <input type="file" accept=".png,.jpeg,.jpg" name="blog-img" id="form_photo">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="form_message">Сообщение</label>
                            <textarea type="" class="form-control" name="text"  id="form_message" rows="3"
                                      placeholder="Сообщение">{{ $blogs['text'] }}</textarea>
                        </div>
                    </div>
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
        @else

        @if(count($blogs) > 0)
        <div class="container">
            <p class="lead">Существующие блоги</p>
            <table class="table table-bordered table-responsive table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Дата</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <th>{{ $blog->id }}</th>
                            <th>{{ $blog->title }}</th>
                            <th>{{ $blog->created_at }}</th>
                            <th>
                                <a href="/admin/blogedit/{{ $blog->id }}">Изменить</a>
                            </th>
                            <th>
                                <a href="/admin/blogedit/del/{{ $blog->id }}">Удалить</a>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif

        <div class="container">
            <p class="lead">Добавить запись</p>

            <form enctype="multipart/form-data" class="form-horizontal" method="post" id="form">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_topic">Тема сообщения</label>
                        <input type="text" class="form-control" name="title" id="form_topic" placeholder="Тема сообщения">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_photo">Фотография</label>
                        <input type="file" accept=".png,.jpeg,.jpg" name="blog-img" id="form_photo">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="form_message">Сообщение</label>
                        <textarea class="form-control" name="text" id="form_message" rows="3"
                                  placeholder="Сообщение"></textarea>
                    </div>
                </div>
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
    </section>
    @endif
@endsection