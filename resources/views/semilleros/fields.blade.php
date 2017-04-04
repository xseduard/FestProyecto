<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Facultad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facultad', 'Facultad:') !!}
    {!! Form::text('facultad', null, ['class' => 'form-control']) !!}
</div>

<!-- Grupo De Investigacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grupo_de_investigacion', 'Grupo De Investigacion:') !!}
    {!! Form::text('grupo_de_investigacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha De Creacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_de_creacion', 'Fecha De Creacion:') !!}
    {!! Form::date('fecha_de_creacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Docente Asesor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('docente_asesor', 'Docente Asesor:') !!}
    {!! Form::text('docente_asesor', null, ['class' => 'form-control']) !!}
</div>

<!-- Estudiante Lider Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estudiante_lider', 'Estudiante Lider:') !!}
    {!! Form::text('estudiante_lider', null, ['class' => 'form-control']) !!}
</div>

<!-- Programa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('programa', 'Programa:') !!}
    {!! Form::text('programa', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Miembros Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code_miembros', 'Code Miembros:') !!}
    {!! Form::text('code_miembros', null, ['class' => 'form-control']) !!}
</div>
