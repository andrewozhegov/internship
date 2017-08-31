@extends('layouts/main')

@section('page_name', 'Main page')

@section('css')
@endsection

@section('js')
@endsection

@section('logo', 'ANDREW EMPTINESS')

@section('content')
        <h1>Основное содержимое сайта</h1>
        <div class="row anim">
            <a href="/interests" class="col11">
                <h4>interests</h4>
                <p>some information about</p>
                <img src="{{ asset('/img/icos/interests.ico') }}" alt="">
            </a>
            <a href="/aboutme" class="col12">
                <h4>about me</h4>
                <p>some information</p>
                <img width="90px" src="{{ asset('/img/icos/aboutme.ico') }}" alt="">
            </a>
        </div>
        <div class="row anim">
            <a href="/study" class="col21">
                <h4>study</h4>
                <p>some information about</p>
                <img width="90px" src="{{ asset('/img/icos/study.ico') }}" alt="">
            </a>
            <a href="/photos" class="col22">
                <h4>photos</h4>
                <p>some information about</p>
                <img width="90px" src="{{ asset('/img/icos/photos.ico') }}" alt="">
            </a>
        </div>
        <div class="row anim">
            <a href="/contacts" class="col31">
                <h4>contacts</h4>
                <p>some information about</p>
                <img width="90px" src="{{ asset('/img/icos/contacts.ico') }}" alt="">
            </a>
            <a href="/test" class="col32">
                <h4>test</h4>
                <p>some information about</p>
                <img width="90px" src="{{ asset('/img/icos/test.ico') }}" alt="">
            </a>
        </div>
@endsection