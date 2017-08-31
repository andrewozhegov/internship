@extends('layouts/main')

@section('page_name', 'Visitors')

@section('css')
@endsection

@section('js')
@endsection

@section('logo', 'ANDREW EMPTINESS')

@section('content')
        <h1>ПОСЕТИТЕЛИ</h1>
        @include('admin.default.admin-nav')

        @if(count($visitors) > 0)
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
        @endif
@endsection