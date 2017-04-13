<!-- Pais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pais', 'Pais:') !!}
    {!! Form::text('pais', null, ['class' => 'form-control']) !!}
</div>

<!-- Universidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('universidad', 'Universidad:') !!}
    {!! Form::text('universidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Regional Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('regional_id', 'Regional Id:') !!}
    {!! Form::select('regional_id', ['' => ''], null, ['class' => 'form-control']) !!}
</div>

<!-- Semillero Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semillero_id', 'Semillero Id:') !!}
    {!! Form::select('semillero_id', ['' => ''], null, ['class' => 'form-control']) !!}
</div>

<!-- Area Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('area_id', 'Area Id:') !!}
    {!! Form::select('area_id', ['' => ''], null, ['class' => 'form-control']) !!}
</div>

<!-- Programa Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('programa_id', 'Programa Id:') !!}
    {!! Form::select('programa_id', ['' => ''], null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::select('user_id', ['' => ''], null, ['class' => 'form-control']) !!}
</div>

<!-- Linea Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('linea_id', 'Linea Id:') !!}
    {!! Form::select('linea_id', ['' => ''], null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>
