<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $sede->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $sede->nombre !!}</p>
</div>

<div class="form-group">
    {!! Form::label('direccion', 'Dirección:') !!}
    <p>{!! $sede->direccion !!}</p>
</div>

<div class="form-group">
    {!! Form::label('telefono', 'Teléfono:') !!}
    <p>{!! $sede->telefono !!}</p>
</div>

<div class="form-group">
    {!! Form::label('info', 'Información:') !!}
    <p>{!! $sede->info !!}</p>
</div>

<!-- Municipio Id Field -->
<div class="form-group">
    {!! Form::label('municipio_id', 'Municipio Id:') !!}
    <p>{!! $sede->municipio_id !!}</p>
</div>

<!-- Regional Id Field -->
<div class="form-group">
    {!! Form::label('regional_id', 'Regional Id:') !!}
    <p>{!! $sede->regional_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $sede->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $sede->updated_at !!}</p>
</div>

