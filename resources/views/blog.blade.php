@extends('layouts/main')

@section('page_name', 'Blog')

@section('css')
@endsection

@section('js')
@endsection

@section('logo', 'BLOG')

@section('content')
    @if(isset($blogs))
            <h3>Блог</h3>
            @foreach($blogs as $blog)
                <h4 class="text-left text-primary">{{ $blog->id }}. {{ $blog->title }}</h4>
                <img src="{{ $blog->image() }}" alt="">
                <p class="text-left text-muted">{{ $blog->text }}</p>
                <small class="text-right">Дата: {{ $blog->created_at }}</small>
                <p class="lead">Комментарии</p>
                @foreach($blog->getComments as $comment)
                    <h4 class="text-left text-primary">{{ $comment->getUser->name }}</h4>
                    <p class="text-left text-muted">{{ $comment->text }}</p>
                    <small class="text-left">{{ $comment->created_at }}</small>
                    @if(Auth::check())
                        @if ($comment->getUser->id == Auth::user()->id)
                            <a href="/blog/del_com/{{ $comment->id }}">Удалить</a>
                        @endif
                    @endif
                @endforeach
                @if(Auth::check())
                <p class="lead">Оставить комментарий</p>
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
        @endif
@endsection