@extends('adminlte::page')

@section('title', 'My Blog')

@section('content_header')
    <h1>Create new role</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.roles.store']) !!}
            
            @include('admin.roles.partials.form')
            
            {!! Form::submit('Create role', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>
@stop

