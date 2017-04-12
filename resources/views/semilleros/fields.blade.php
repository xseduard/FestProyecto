<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Director Field -->
<div class="form-group col-sm-6">
    {!! Form::label('director_id', 'Director:') !!}
    {!! Form::select('director_id', $selectores['docentes'], null, ['class' => 'form-control']) !!}
</div>

<!-- Coordinador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coordinador_id', 'Coordinador:') !!}
    {!! Form::select('coordinador_id', $selectores['docentes'], null, ['class' => 'form-control']) !!}
</div>

<!-- Estudiante Lider Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estudiante_lider_id', 'Estudiante Lider:') !!}
    {!! Form::select('estudiante_lider_id', $selectores['estudiantes'], null, ['class' => 'form-control']) !!}
</div>

<!-- Regional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('regional_id', 'Regional:') !!}
    {!! Form::select('regional_id', $selectores['regionals'], null, ['class' => 'form-control']) !!}
</div>

<!-- Grupo Investigacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grupo_investigacion_id', 'Grupo Investigacion:') !!}
    {!! Form::select('grupo_investigacion_id', $selectores['grupo_investigacions'], null, ['class' => 'form-control']) !!}
</div>

<!-- Informacion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('informacion', 'Informacion:') !!}
    {!! Form::textarea('informacion', null, ['class' => 'form-control']) !!}
</div>
