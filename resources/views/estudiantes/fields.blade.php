<!-- Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombres', 'Nombres:') !!}
    {!! Form::text('nombres', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellidos', 'Apellidos:') !!}
    {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
</div>

<!-- Cedula Field -->
<div class="form-group col-sm-4">
    {!! Form::label('cedula', 'Documento de indentidad:') !!}
    {!! Form::text('cedula', null, ['class' => 'form-control']) !!}
</div>
<!-- Expedicion Documento Field -->
<div class="form-group col-sm-4">
    {!! Form::label('expedicion_documento', 'Lugar de Expedicion:') !!}
    {!! Form::select('expedicion_documento', $selectores['municipios'], null, ['class' => 'form-control']) !!}
</div>
<!-- Area Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('area_id', 'Area:') !!}
   {!! Form::select('area_id', $selectores['areas'], null, ['class' => 'form-control']) !!}
</div>

<!-- Programa Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('programa_id', 'Programa:') !!}
    {!! Form::select('programa_id', $selectores['programas'], null, ['class' => 'form-control']) !!}
</div>

<!-- Regional Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('regional_id', 'Regional:') !!}
   {!! Form::select('regional_id', $selectores['regionals'], null, ['class' => 'form-control']) !!}
</div>

<!-- Genero Field -->
<div class="form-group col-sm-3">
    {!! Form::label('genero', 'Genero:') !!}
    {!! Form::select('genero', ['Masculino' => 'Masculino', 'Femenino' => ' Femenino', 'Indefinido' => ' Indefinido'], null, ['class' => 'form-control']) !!}
</div>

<!-- Pensum Field -->
<div class="form-group col-sm-3">
    {!! Form::label('pensum', 'Pensum:') !!}
    {!! Form::text('pensum', null, ['class' => 'form-control']) !!}
</div>

<!-- Semetre Field -->
<div class="form-group col-sm-2">
    {!! Form::label('semestre', 'Semetre:') !!}
    {!! Form::select('semestre', [
    '' => 'seleccione...',
    '1' => 'I',
    '2' => 'II',
    '3' => 'III',
    '4' => 'IV',
    '5' => 'V',
    '6' => 'VI',
    '7' => 'VII',
    '8' => 'VIII',
    '9' => 'IX',
    '10' => 'X',
    '11' => 'XI'
     ], null, ['class' => 'form-control']) !!}
</div>

<!-- Correo Principal Field -->
<div class="form-group col-sm-4">
    {!! Form::label('correo_principal', 'Correo Principal:') !!}
    {!! Form::email('correo_principal', null, ['class' => 'form-control']) !!}
</div>

<!-- Correo Institucional Field -->
<div class="form-group col-sm-4">
    {!! Form::label('correo_institucional', 'Correo Institucional:') !!}
    {!! Form::email('correo_institucional', null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-4">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::text('celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-4">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Nacimiento Field -->
<div class="form-group col-sm-4">
    {!! Form::label('fecha_nacimiento', 'Fecha Nacimiento:') !!}
    {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control']) !!}
</div>



<!-- Nacionalidad Field -->
<div class="form-group col-sm-4">
    {!! Form::label('nacionalidad', 'Nacionalidad:') !!}
    {!! Form::select('nacionalidad', ['Colombiano' => 'Colombiano'], null, ['class' => 'form-control']) !!}
</div>
<!-- Estado Civil Field -->
<div class="form-group col-sm-4">
    {!! Form::label('estado_civil', 'Estado Civil:') !!}
    {!! Form::select('estado_civil', ['soltero' => 'soltero', ' casado' => ' casado', ' unionlibre' => ' unionlibre'], null, ['class' => 'form-control']) !!}
</div>


<!-- Wp Field -->
<div class="form-group col-sm-3">
    {!! Form::label('wp', 'Whatsapp:') !!}
    {!! Form::text('wp', null, ['class' => 'form-control']) !!}
</div>

<!-- Skype Field -->
<div class="form-group col-sm-3">
    {!! Form::label('skype', 'Skype:') !!}
    {!! Form::text('skype', null, ['class' => 'form-control']) !!}
</div>

<!-- Linkedin Field -->
<div class="form-group col-sm-3">
    {!! Form::label('linkedin', 'Linkedin:') !!}
    {!! Form::text('linkedin', null, ['class' => 'form-control']) !!}
</div>

<!-- Twitter Field -->
<div class="form-group col-sm-3">
    {!! Form::label('twitter', 'Twitter:') !!}
    {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
</div>

