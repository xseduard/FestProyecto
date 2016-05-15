

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Sigla Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sigla', 'Sigla:') !!}
    {!! Form::text('sigla', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Vinculacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_vinculacion', 'Fecha Vinculacion:') !!}
    {!! Form::date('fecha_vinculacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Programa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_programa', 'Id Programa:') !!}
    {!! Form::number('id_programa', null, ['class' => 'form-control']) !!}
</div>
