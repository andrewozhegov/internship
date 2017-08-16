@extends('layouts/main')

@section('page_name', 'Photos edit')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('/js/mainfunc.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/clock.js') }}"></script>
@endsection

@section('logo', 'PHOTOS EDIT')

@section('content')
    <section class="content">
        <h1>РЕДАКТОР ФОТОГРАФИЙ</h1>
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

            @if(count($photos) > 0)
                <div class="container">
                    <p class="lead">Существующие фото</p>
                    <table class="table table-bordered table-responsive table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Name</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($photos as $photo)
                            <tr>
                                <th>{{ $photo->id }}</th>
                                <th>
                                    <img style="width: 64px" src="{{ asset($photo->mic() ) }}" alt="">
                                </th>
                                <th>{{ $photo->name }}</th>
                                <th>
                                    <a href="/admin/photosedit/del/{{ $photo->id }}">Удалить</a>
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
                            <label for="form_topic">Название фото</label>
                            <input type="text" class="form-control" name="name" id="form_topic" placeholder="Тема сообщения">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="form_photo">Фотография</label>
                            <input type="file" accept=".png,.jpeg,.jpg" name="image" id="form_photo">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="form_photo">Миниатюра</label>
                            <input type="file" accept=".png,.jpeg,.jpg" name="mic" id="form_photo">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="form_message">Аннотация</label>
                            <textarea class="form-control" name="annotation" id="form_message" rows="3"
                                      placeholder="Annotation text"></textarea>
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
@endsection