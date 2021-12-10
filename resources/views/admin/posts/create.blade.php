@extends('adminlte::page')

@section('title', 'My Blog')

@section('content_header')
    <h1>Create new post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off']) !!}
                
                {!! Form::hidden('user_id', auth()->user()->id) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Post name']) !!}
                @error('name')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Post slug', 'readonly']) !!}
                @error('slug')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('category_id', 'Category') !!}
                    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                @error('category_id')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                </div>

                <div class="form-group">
                    <p class="font-weight-bold">Tags</p>
                    @foreach ($tags as $tag)
                        <label class="mr-3">
                            {!! Form::checkbox('tags[]', $tag->id, null) !!}
                            {{$tag->name}}
                        </label>
                    @endforeach
                    @error('tags')
                        <br>
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <p class="font-weight-bold">Status</p>
                    <label class="mr-3">
                        {!! Form::radio('status', 1, true) !!}
                        Draft
                    </label>
                    <label>
                        {!! Form::radio('status', 2) !!}
                        Published
                    </label>
                    @error('status')
                        <br>
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('extract', 'Extract') !!}
                    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
                    @error('extract')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('body', 'Body') !!}
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                    @error('body')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                {!! Form::submit('Create post', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>
    
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

        ClassicEditor
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>

@endsection