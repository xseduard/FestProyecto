<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $nota->id !!}</p>
</div>

<!-- Tipo Field -->
<div class="form-group">
    {!! Form::label('tipo', 'Tipo:') !!}
    <p>{!! $nota->tipo !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $nota->user_id !!}</p>
</div>

<!-- Proyecto Id Field -->
<div class="form-group">
    {!! Form::label('proyecto_id', 'Proyecto Id:') !!}
    <p>{!! $nota->proyecto_id !!}</p>
</div>

<!-- Nota Field -->
<div class="form-group">
    {!! Form::label('nota', 'Nota:') !!}
    <p>{!! $nota->nota !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $nota->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $nota->updated_at !!}</p>
</div>

