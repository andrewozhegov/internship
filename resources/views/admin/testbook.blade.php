@extends('layouts/main')

@section('page_name', 'Test book')

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />

@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('/js/mainfunc.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/clock.js') }}"></script>
@endsection

@section('logo', 'TEST BOOK')

@section('content')
    <section class="content">
        <h1>РЕЗУЛЬТАТЫ ТЕСТА</h1>
        @include('admin.default.admin-nav')

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container">
            <p class="lead">Результаты теста</p>
            <table class="table table-bordered table-responsive table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Data</th>
                    <th>User</th>
                    <th>Value</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tests as $test)
                    <tr>
                        <th>{{ $test->id }}</th>
                        <th>{{ $test->created_at }}</th>
                        <th>{{ $test->getUser->name }}</th>
                        <th>{{ $test->getValue->name }}</th>
                        <th><a href="/admin/testbook/del/{{ $test->id }}">Delete</a></th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection