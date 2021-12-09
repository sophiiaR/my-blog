@extends('adminlte::page')

@section('title', 'My Blog')

@section('content_header')

    <a href="{{route('admin.posts.create')}}" class="btn btn-secondary float-right">New Post</a>
    <h1>Posts list</h1>
@stop

@section('content')
    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop