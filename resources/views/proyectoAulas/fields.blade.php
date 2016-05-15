
<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Periodo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('periodo', 'Periodo:') !!}
    {!! Form::text('periodo', null, ['class' => 'form-control']) !!}
</div>

<!-- Nivel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nivel', 'Nivel:') !!}
    {!! Form::number('nivel', null, ['class' => 'form-control']) !!}
</div>



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
