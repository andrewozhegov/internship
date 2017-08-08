@extends('layouts/main')

@section('page_name', 'Photos edit')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}" />
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('/js/mainfunc.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/clock.js') }}"></script>
@endsection

@section('logo', 'ANDREW EMPTINESS')

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
    </section>
@endsection