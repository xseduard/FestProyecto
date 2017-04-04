<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $proyecto->id !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $proyecto->descripcion !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $proyecto->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $proyecto->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $proyecto->deleted_at !!}</p>
</div>

<!-- Id Director Field -->
<div class="form-group">
    {!! Form::label('id_director', 'Id Director:') !!}
    <p>{!! $proyecto->id_director !!}</p>
</div>

<!-- Id Semillero Field -->
<div class="form-group">
    {!! Form::label('id_semillero', 'Id Semillero:') !!}
    <p>{!! $proyecto->id_semillero !!}</p>
</div>

