<!-- Id Academico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_academico', 'Id Academico:') !!}
    {!! Form::number('id_academico', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Programa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_programa', 'Id Programa:') !!}
    {!! Form::number('id_programa', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Matricula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_matricula', 'Fecha Matricula:') !!}
    {!! Form::date('fecha_matricula', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Finalizacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_finalizacion', 'Fecha Finalizacion:') !!}
    {!! Form::date('fecha_finalizacion', null, ['class' => 'form-control']) !!}
</div>

