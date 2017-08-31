@extends('layouts/main')

@section('page_name', 'About me')

@section('css')
@endsection

@section('js')
@endsection

@section('logo', 'STUDY')

@section('content')
        <h1> Учеба </h1>
        <table class="table table-bordered table-condensed">
            <caption><h3>Севастопольский государственный университет</h3></caption>
            <tr>
                <th rowspan="3">№</th>
                <th rowspan="3">Дисциплина</th>
                <th colspan="12">Часов в неделю<br>(Лекции, Лаб. раб, Практ. раб)</th>
            </tr>
            <tr>
                <th colspan="6">1 курс</th>
                <th colspan="6">2 курс</th>
            </tr>
            <tr>
                <th colspan="3">1 сем</th>
                <th colspan="3">2 сем</th>
                <th colspan="3">3 сем</th>
                <th colspan="3">4 сем</th>
            </tr>
            <tr>
                <td>1</td> <td align="left">Экология</td>
                <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
                <td>1</td> <td>0</td> <td>1</td> <td></td> <td></td> <td></td>
            </tr>
            <tr>
                <td>2</td> <td align="left">Высшая математика</td>
                <td>3</td> <td>0</td> <td>3</td> <td>3</td> <td>0</td> <td>3</td>
                <td>2</td> <td>0</td> <td>2</td> <td></td> <td></td> <td></td>
            </tr>
            <tr>
                <td>3</td> <td align="left">Русский язык и культура речи</td>
                <td>1</td> <td>0</td> <td>2</td> <td></td> <td></td> <td></td>
                <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
            </tr>
            <tr>
                <td>4</td> <td align="left">Основы дискретной математики</td>
                <td>2</td> <td>0</td> <td>1</td> <td>3</td> <td>0</td> <td>2</td>
                <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
            </tr>
            <tr>
                <td>5</td> <td align="left">Основы программирования и алгоритмические языки</td>
                <td>3</td> <td>2</td> <td>0</td> <td>3</td> <td>3</td> <td>0</td>
                <td>0</td> <td>0</td> <td>1</td> <td></td> <td></td> <td></td>
            </tr>
            <tr>
                <td>6</td> <td align="left">Основы экологии</td>
                <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
                <td>1</td> <td>0</td> <td>0</td> <td></td> <td></td> <td></td>
            </tr>
            <tr>
                <td>7</td> <td align="left">Теория вероятностей и математическая статистика</td>
                <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
                <td>3</td> <td>1</td> <td>0</td> <td></td> <td></td> <td></td>
            </tr>
            <tr>
                <td>8</td> <td align="left">Физика</td>
                <td>2</td> <td>2</td> <td>0</td> <td>2</td> <td>2</td> <td>0</td>
                <td>2</td> <td>1</td> <td>0</td> <td></td> <td></td> <td></td>
            </tr>
            <tr>
                <td>9</td> <td align="left">Основы электротехники и электроники</td>
                <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
                <td>2</td> <td>1</td> <td>1</td> <td></td> <td></td> <td></td>
            </tr>
            <tr>
                <td>10</td> <td align="left">Численные методы в информатике</td>
                <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
                <td>2</td> <td>2</td> <td>0</td> <td>0</td> <td>0</td> <td>1</td>
            </tr>
            <tr>
                <td>11</td> <td align="left">Методы исследования операций</td>
                <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>
                <td>1</td> <td>1</td> <td>0</td> <td>2</td> <td>1</td> <td>1</td>
            </tr>
        </table>
@endsection