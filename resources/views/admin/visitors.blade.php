@extends('layouts/main')

@section('page_name', 'Visitors')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('/js/mainfunc.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/clock.js') }}"></script>
@endsection

@section('logo', 'ANDREW EMPTINESS')

@section('content')
    <section class="content">
        <h1>ПОСЕТИТЕЛИ</h1>
        @include('admin.default.admin-nav')

        @if(count($visitors) > 0)
            <div class="container">
                <table class="table table-bordered table-responsive table-hover">
                    <thead>
                    <tr>
                        <th>Пользователь</th>
                        <th>Home</th>
                        <th>Aboutme</th>
                        <th>Interests</th>
                        <th>Study</th>
                        <th>Photos</th>
                        <th>Contacts</th>
                        <th>Blog</th>
                        <th>Test</th>
                        <th>Первый вход</th>
                        <th>Помледний вход</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($visitors as $visitor)
                        <tr>
                            <th>{{ $visitor->getUser->login }}</th>
                            <th>{{ $visitor->home() }}</th>
                            <th>{{ $visitor->aboutme }}</th>
                            <th>{{ $visitor->interests }}</th>
                            <th>{{ $visitor->study }}</th>
                            <th>{{ $visitor->photos }}</th>
                            <th>{{ $visitor->contacts }}</th>
                            <th>{{ $visitor->blog }}</th>
                            <th>{{ $visitor->test }}</th>
                            <th>{{ $visitor->created_at }}</th>
                            <th>{{ $visitor->updated_at }}</th>
                            <th>
                                <a href="/admin/visitors/del/{{ $visitor->id }}">Удалить</a>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif

    </section>
@endsection