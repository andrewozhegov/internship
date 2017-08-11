@extends('layouts/main')

@section('page_name', 'Test')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('/js/mainfunc.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/clock.js') }}"></script>
@endsection

@section('logo', 'TEST')

@section('content')
    <section class="content container">
        <h1 style="margin: 50px"> Тест</h1>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="form" class="form-horizontal" role="form" method="post">

            {{ csrf_field() }}

            <div class="form-group" style="margin: 50px">
                <div class="col-md-12">
                    <label>1. Треться степень это</label>
                </div>
                <div class="col-md-12">
                    <select name="answer1" id="form_answer1" class="form-control" required>
                        <option value="0" selected>Не знаю</option>
                        <option value="1">Квадрат</option>
                        <option value="2">Куб</option>
                        <option value="3">Гиперкуб</option>
                    </select>
                </div>
            </div>

            <div class="form-group" style="margin: 50px">
                <div class="col-md-4">
                    <label for="form_answer2">2. 2 + 2 * 2 = ?</label>
                </div>
                <div class="col-md-12">
                    <input type="number" id="form_answer2" class="form-control" name="answer2" min="0" max="9"  required>
                </div>
            </div>


            <div class="form-group" style="margin: 50px">
                <div class="col-md-4">
                    <label>3. Натуральные числа</label>
                </div>
                <div class="col-md-12">
                    <label class="checkbox-inline">
                        <input type="checkbox" name="answer31" id="form_answer32" value="1">
                        1/2
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="answer32" id="form_answer32" value="1">
                        0
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="answer33" id="form_answer32" value="1">
                        4
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="answer34" id="form_answer32" value="1">
                        -6
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="answer35" id="form_answer32" value="1">
                        3.1
                    </label>
                </div>
            </div>

            <div class="form-group" style="margin: 50px">
                <div class="col-md-8">
                    <input type="submit" id="submit" value="Отправить" class="form-control btn btn-block btn-primary">
                </div>
                <div class="col-md-4">
                    <input id="reset" type="button" value="Очистить" class="form-control btn btn-block btn-default">
                </div>
            </div>
        </form>
    </section>
@endsection