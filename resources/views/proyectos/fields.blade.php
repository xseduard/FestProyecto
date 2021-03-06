<!-- Titulo Field -->
<div class="form-group col-sm-12 label-floating">
    {!! Form::label('titulo', 'Titulo:', ['class'=> 'control-label']) !!}
    {!! Form::text('titulo', null, ['class' => 'form-control', 'placeholder'=>'Titulos']) !!}
</div>


<!-- Pais Field -->
<div class="form-group col-sm-4">
    {!! Form::label('pais', 'Pais:') !!}
    {!! Form::text('pais', 'Colombia', ['class' => 'form-control', 'disabled' => 'disabled']) !!}
</div>

<!-- Universidad Field -->
<div class="form-group col-sm-8">
    {!! Form::label('universidad', 'Universidad:') !!}
    {!! Form::text('universidad', 'Corporacion Unificada Nacional de Educacion Superior (CUN)', ['class' => 'form-control', 'disabled' => 'disabled']) !!}
</div>

<!-- Regional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('regional_id', 'Regional:') !!}
    {!! Form::select('regional_id', $selectores['regional'], null, ['class' => 'form-control']) !!}
</div>

<!-- Semillero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semillero_id', 'Semillero:') !!}
    {!! Form::select('semillero_id', $selectores['semillero'], null, ['class' => 'form-control']) !!}
</div>

<!-- Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('area_id', 'Área:') !!}
    {!! Form::select('area_id', $selectores['area'], null, ['class' => 'form-control']) !!}
</div>

<!-- Programa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('programa_id', 'Sub Área:') !!}
    {!! Form::select('programa_id', $selectores['programa'], null, ['class' => 'form-control']) !!}
</div>

<!-- Linea Field -->
<div class="form-group col-sm-6">
    {!! Form::label('linea_id', 'Linea:') !!}
    {!! Form::select('linea_id', $selectores['linea'], null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>

<div class="clearfix"></div>
<!-- Descripcion Field -->
<div class="form-group col-sm-12">
    {!! Form::label('descripcion', 'Descripción:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>
