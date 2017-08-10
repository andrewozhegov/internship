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

        <form id="form" class="form-horizontal" role="form" method="post">

            <div class="form-group" style="margin: 50px">
                <div class="col-md-12">
                    <label>1. Треться степень это</label>
                </div>
                <div class="col-md-12">
                    <select name="answer1" id="form_answer1" class="form-control" required>
                        <option value="error" selected>Не знаю</option>
                        <option value="false">Квадрат</option>
                        <option value="true">Куб</option>
                        <option value="false">Гиперкуб</option>
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
                        <input type="checkbox" name="answer3" id="form_answer32" value="false">
                        1/2
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="answer3" id="form_answer32" value="true">
                        0
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="answer3" id="form_answer32" value="true">
                        4
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="answer3" id="form_answer32" value="false">
                        -6
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="answer3" id="form_answer32" value="false">
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