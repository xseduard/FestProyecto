<!-- Nombre Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Teléfono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Regional Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('regional_id', 'Regional:') !!}
     {!! Form::select('regional_id', $selectores['regionals'], null, ['class'=>'form-control', 'required'=>'required']); !!}
</div>

<!-- Municipio Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('municipio_id', 'Municipio:') !!}
    {!! Form::select('municipio_id', $selectores['municipios'], null, ['class'=>'form-control', 'required'=>'required']); !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('info', 'Información:') !!}
    {!! Form::textarea('info', null, ['class' => 'form-control']) !!}
</div>