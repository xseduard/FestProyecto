<!-- Nombre Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Año Formacion Field -->
<div class="form-group col-sm-4">
    {!! Form::label('año_formacion', 'Año Formacion:') !!}
    {!! Form::select('año_formacion', $array, null, ['class' => 'form-control']) !!}
</div>

<!-- Gran Area Field -->
<div class="form-group col-sm-4">
    {!! Form::label('gran_area', 'Gran Area:') !!}
    {!! Form::text('gran_area', null, ['class' => 'form-control']) !!}
</div>

<!-- Area Conocimiento Field -->
<div class="form-group col-sm-4">
    {!! Form::label('area_conocimiento', 'Area Conocimiento:') !!}
    {!! Form::text('area_conocimiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Cedula Primer Lider Field -->
<div class="form-group col-sm-4">
    {!! Form::label('cedula_primer_lider', 'Cedula Primer Lider:') !!}
    {!! Form::text('cedula_primer_lider', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Primer Lider Field -->
<div class="form-group col-sm-8">
    {!! Form::label('nombre_primer_lider', 'Nombre Primer Lider:') !!}
    {!! Form::text('nombre_primer_lider', null, ['class' => 'form-control']) !!}
</div>

<!-- Cedula Segundo Lider Field -->
<div class="form-group col-sm-4">
    {!! Form::label('cedula_segundo_lider', 'Cedula Segundo Lider:') !!}
    {!! Form::text('cedula_segundo_lider', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Segundo Lider Field -->
<div class="form-group col-sm-8">
    {!! Form::label('nombre_segundo_lider', 'Nombre Segundo Lider:') !!}
    {!! Form::text('nombre_segundo_lider', null, ['class' => 'form-control']) !!}
</div>

<!-- Gruplac Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grupLAC', 'Gruplac:') !!}
    {!! Form::text('grupLAC', null, ['class' => 'form-control']) !!}
</div>
