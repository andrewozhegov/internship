@extends('layouts/main')

@section('page_name', 'Blog')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}" />
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('/js/mainfunc.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/clock.js') }}"></script>
@endsection

@section('logo', 'ANDREW EMPTINESS')

@section('content')
    @if(isset($blogs))
        <div class="container">
            <p class="lead">Блог</p>
                @foreach($blogs as $blog)
                    <h3>{{ $blog->id }}. {{ $blog->title }}</h3>
                    <p>{{ $blog->text }}</p>
                    <img src="{{ $blog->image()) }}" alt="">
                    <p>Дата: {{ $blog->created_at }}</p>
            @endforeach
        </div>
    @endif
@endsection