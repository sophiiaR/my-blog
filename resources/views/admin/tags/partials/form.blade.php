<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'New tag']) !!}
</div>
@error('name')
    <span class="text-danger">{{$message}}</span>
@enderror
<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug tag', 'readonly']) !!}
</div>
@error('slug')
    <span class="text-danger">{{$message}}</span>
@enderror

<div class="form-group">
    {{-- <label for="">Color</label>
    <select name="color" id="" class="form-control">
        <option value="red" selected>Red</option>
        <option value="green">Green</option>
        <option value="blue">Blue</option>
    </select> --}}
    {!! Form::label('color', 'Color') !!}
    {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}
    @error('color')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>


