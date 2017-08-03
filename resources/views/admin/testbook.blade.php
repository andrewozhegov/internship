@extends('layouts/main')

@section('page_name', 'Test book')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />

@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('/js/mainfunc.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/clock.js') }}"></script>
@endsection

@section('logo', 'TEST BOOK')

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
            <a class="btn btn-default btn-primary" href="/test" role="button">Назад</a>
            <p class="lead">Ответы студентов на тест по дисциплине: "Общая Математика" </p>
            <table class="table table-bordered table-responsive table-hover">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Дата</th>
                    <th>Ф.И.О.</th>
                    <th>Ответ 1</th>
                    <th>Ответ 2</th>
                    <th>Ответ 3</th>
                </tr>
                </thead>
                <tbody>
                <?php
                /*$number = 1;
                foreach($args['models'] as $model) {
                    echo '<tr>';
                    echo '<td>' . $number++ . '</td>';
                    echo '<td>' . $model->DatePassage . '</td>';
                    echo '<td>' . $model->Fio . '</td>';
                    echo '<td>' . $model->Answer1 . '</td>';
                    echo '<td>' . $model->Answer2 . '</td>';
                    echo '<td>' . $model->Answer3 . '</td>';
                    echo '</tr>';
                }*/
                ?>
                </tbody>
            </table>
        </div>

    </section>
@endsection