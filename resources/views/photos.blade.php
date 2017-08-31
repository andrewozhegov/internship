@extends('layouts/main')

@section('page_name', 'Photos')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/gallery2.css') }}" />
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('/js/jquery-1.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/gallery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/gallery2.js') }}"></script>
@endsection

@section('logo', 'PHOTOGALLERY')

@section('content')
        <h1> Фотогалерея </h1>

        <div class="gallery-box">
            <div class="view">
                <div class="big-image">
                    <img title="{{ $photos[0]->name }}" src="{{ asset($photos[0]->image()) }}" alt="" />
                </div>
                <a href="#" class="prev"></a>
                <a href="#" class="next"></a>
            </div>
            <div class="thumbnails">

                @foreach($photos as $photo)
                    @if($photo->id == 1)
                        <a href="#" class="active">
                            <img title="{{ $photo->name }}" src="{{ asset($photo->mic()) }}" alt="" />
                        </a>
                    @else
                        <a href="#">
                            <img title="{{ $photo->name }}" src="{{ asset($photo->mic()) }}" alt="" />
                        </a>
                    @endif
                @endforeach

            </div>
        </div>
@endsection