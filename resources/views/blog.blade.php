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
                <img src="{{ $blog->image() }}" alt="">
                <p>Дата: {{ $blog->created_at }}</p>


                {{-- Тут показать все комменты и предложить оставить свой --}}
                @foreach($blog->getComments as $comment)
                    <h4>{{ $comment->getUser->name }}</h4>
                    <p>{{ $comment->text }}</p>
                    <h6>{{ $comment->created_at }}</h6>
                    @if(Auth::check())
                        @if ($comment->getUser->id == Auth::user()->id)
                            <a href="/blog/del_com/{{ $comment->id }}">Удалить Комментарий</a>
                        @endif
                    @endif
                    <p>____</p>
                @endforeach
                <p>_______________________________________________________</p>
                @if(Auth::check())
                <h3>Оставить комментарий</h3>
                    <form enctype="multipart/form-data" class="form-horizontal" method="post" id="form">
                        {{ csrf_field() }}
                        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="form_message">Сообщение</label>
                                <textarea class="form-control" name="text"  id="form_message" rows="3"
                                          placeholder="Сообщение"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <input id="submit" class="form-control btn btn-block btn-primary"  type="submit" value="Отправить">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control btn btn-block btn-default" type="reset" value="Очистить">
                            </div>
                        </div>
                    </form>
                @else
                    <h6><a href="/login">Войдите или Заругистрируйтесь,</a> чобы оставить комментарий</h6>

                @endif
            @endforeach
        </div>
    @endif
@endsection