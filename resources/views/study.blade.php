@extends('layouts/main')

@section('page_name', 'About me')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}" />
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('/js/mainfunc.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/clock.js') }}"></script>
@endsection

@section('logo', 'STUDY')

@section('content')

    <section class="content">
        <h1> Учеба </h1>
        <table border="1" cellpadding="8" cellspacing="0" width="100%" height="100%">
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
    </section>


    <section class="content">
        <h1> История посещений </h1>
        <table border="1" cellpadding="8" cellspacing="0" width="100%" height="100%">
            <thead>
            <tr>
                <th scope="col" >Название страницы</th>
                <th scope="col" >Количество посещений LS</th>
                <th scope="col" >Количество посещений C</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Главная</td>
                <td>
                    <script> document.write(localStorage.getItem('IndexVisitCounter')); </script>
                </td>
                <td>
                    <script> document.write(getCookie("IndexCookie")); </script>
                </td>
            </tr>
            <tr>
                <td>Интересы</td>
                <td>
                    <script> document.write(localStorage.getItem('InterestsVisitCounter')); </script>
                </td>
                <td>
                    <script> document.write(getCookie("InterestsCookie")); </script>
                </td>
            </tr>
            <tr>
                <td>Галерея</td>
                <td>
                    <script> document.write(localStorage.getItem('GalleryVisitCounter')); </script>
                </td>
                <td>
                    <script> document.write(getCookie("GalleryCookie")); </script>
                </td>
            </tr>
            <tr>
                <td>Учёба</td>
                <td>
                    <script> document.write(localStorage.getItem('StudyVisitCounter')); </script>
                </td>
                <td>
                    <script>document.write(getCookie("StudyCookie")); </script>
                </td>
            </tr>
            <tr>
                <td>Тест</td>
                <td>
                    <script> document.write(localStorage.getItem('TestVisitCounter')); </script>
                </td>
                <td>
                    <script> document.write(getCookie("TestCookie")); </script>
                </td>
            </tr>
            <tr>
                <td>Контакты</td>
                <td>
                    <script> document.write(localStorage.getItem('ContactsVisitCounter')); </script>
                </td>
                <td>
                    <script> document.write(getCookie("ContactsCookie")); </script>
                </td>
            </tr>
            <tr>
                <td>Обо мне</td>
                <td>
                    <script> document.write(localStorage.getItem('AboutVisitCounter')); </script>
                </td>
                <td>
                    <script> document.write(getCookie("AboutCookie")); </script>
                </td>
            </tr>
            </tbody>
        </table>
    </section>
@endsection