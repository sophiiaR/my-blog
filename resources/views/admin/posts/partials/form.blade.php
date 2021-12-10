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

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset ($post->image)
                <img id="picture" src="{{asset(Storage::url($post->image->url))}}" alt="">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg" alt="">
            @endisset

        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Post image') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            @error('file')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi perferendis reiciendis quam incidunt. Sunt omnis voluptate eius nobis dolorem ducimus fugiat. Necessitatibus expedita iure dolorem eligendi doloribus nisi maxime maiores.
    </div>
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