<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $programa->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $programa->nombre !!}</p>
</div>

<!-- Modalidad Field -->
<div class="form-group">
    {!! Form::label('modalidad', 'Modalidad:') !!}
    <p>{!! $programa->modalidad !!}</p>
</div>

<!-- Area Id Field -->
<div class="form-group">
    {!! Form::label('area_id', 'Area Id:') !!}
    <p>{!! $programa->area_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $programa->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $programa->updated_at !!}</p>
</div>

