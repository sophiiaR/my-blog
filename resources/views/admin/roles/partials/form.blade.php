<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Role name']) !!}
    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<h2 class="h3">Permissions list</h2>
@foreach ($permissions as $permission)
    <div>
        <label>
            {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-2']) !!}
            {{$permission->description}}
        </label>
    </div>
@endforeach