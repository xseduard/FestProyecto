
<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Nivel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nivel', 'Nivel:') !!}
    {!! Form::number('nivel', null, ['class' => 'form-control']) !!}
</div>

<!-- Periodo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('periodo', 'Periodo:') !!}
    {!! Form::text('periodo', null, ['class' => 'form-control']) !!}
</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::text('observaciones', null, ['class' => 'form-control']) !!}
</div>


<!-- Id Programa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_programa', 'Id Programa:') !!}
    {!! Form::number('id_programa', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Director Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_director', 'Id Director:') !!}
    {!! Form::number('id_director', null, ['class' => 'form-control']) !!}
</div>
