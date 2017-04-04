<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $asignaturas->id !!}</p>
</div>

<!-- Asignatura Field -->
<div class="form-group">
    {!! Form::label('asignatura', 'Asignatura:') !!}
    <p>{!! $asignaturas->asignatura !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $asignaturas->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $asignaturas->updated_at !!}</p>
</div>

