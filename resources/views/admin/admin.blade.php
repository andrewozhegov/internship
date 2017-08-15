@extends('layouts/main')

@section('page_name', 'Admin page')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}" />@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('/js/mainfunc.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/clock.js') }}"></script>
@endsection

@section('logo', 'ADMIN PANEL')

@section('content')
    <section class="content">
        <h1>МЕНЮ АДМИНА</h1>
        @include('admin.default.admin-nav')
    </section>
@endsection