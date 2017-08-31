@extends('layouts/main')

@section('page_name', 'Admin page')

@section('css')
@endsection

@section('js')
@endsection

@section('logo', 'ADMIN PANEL')

@section('content')
        <h1>МЕНЮ УПРАВЛЕНИЯ</h1>
        @include('admin.default.admin-nav')
@endsection