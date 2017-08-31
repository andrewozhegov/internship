@extends('layouts/main')

@section('page_name', 'Test book')

@section('css')

@endsection

@section('js')
@endsection

@section('logo', 'TEST BOOK')

@section('content')
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
@endsection