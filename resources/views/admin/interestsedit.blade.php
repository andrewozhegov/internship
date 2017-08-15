@extends('layouts/main')

@section('page_name', 'Edit interests')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}" />
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('/js/mainfunc.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/clock.js') }}"></script>
@endsection

@section('logo', 'INTERESTS EDIT')

@section('content')
    <section class="content">
        <h1>РЕДАКТОР ИНТЕРЕСОВ</h1>
        @include('admin.default.admin-nav')
    </section>
@endsection