@extends('adminlte::page')

@section('title', 'My Blog')

@section('content_header')
    <h1>Users list</h1>
@stop

@section('content')
    @livewire('admin.users-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop