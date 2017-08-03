@extends('layouts/main')

@section('page_name', 'About me')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/gallery2.css') }}" />
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('/js/mainfunc.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/clock.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/gallery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/gallery2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery-1.4.min.js') }}"></script>
@endsection

@section('logo', 'PHOTOGALLERY')

@section('content')
    <section class="content">
        <h1> Фотогалерея </h1>
        <?php
        //Home::gallery()
        ?>
    </section>
@endsection