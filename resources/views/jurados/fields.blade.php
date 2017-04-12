<!-- Cedula Field -->
<div class="form-group col-sm-2">
    {!! Form::label('cedula', 'Cédula:') !!}
    {!! Form::text('cedula', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombres Field -->
<div class="form-group col-sm-5">
    {!! Form::label('nombres', 'Nombres:') !!}
    {!! Form::text('nombres', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellidos Field -->
<div class="form-group col-sm-5">
    {!! Form::label('apellidos', 'Apellidos:') !!}
    {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
</div>



<!-- Grupojurado Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('grupojurado_id', 'Codigo de grupo (Comité)') !!}
    {!! Form::select('grupojurado_id', $selectores['grupojurados'], null, ['class' => 'form-control']) !!}
</div>

<!-- Linea Investigacion Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('linea_investigacion_id', 'Linea de afinidad:') !!}
    {!! Form::select('linea_investigacion_id', $selectores['lineas'], null, ['class' => 'form-control']) !!}
</div>

<!-- Area Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('area_id', 'Área de afinidad:') !!}
    {!! Form::select('area_id', $selectores['areas'], null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-4">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::text('celular', null, ['class' => 'form-control']) !!}
</div>
<!-- Correo Field -->
<div class="form-group col-sm-4">
    {!! Form::label('correo', 'Correo:') !!}
    {!! Form::email('correo', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-12">
    {!! Form::label('direccion', 'Dirección:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>


