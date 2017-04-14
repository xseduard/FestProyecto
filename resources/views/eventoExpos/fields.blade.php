<!-- Grupojurado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grupojurado_id', 'Grupo Jurado:') !!}
    {!! Form::select('grupojurado_id', $selectores['grupojurado'], null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Informacion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('informacion', 'Informacion:') !!}
    {!! Form::textarea('informacion', null, ['class' => 'form-control']) !!}
</div>

