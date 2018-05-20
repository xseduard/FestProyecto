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

<!-- cedula Field -->
<div class="form-group col-sm-4">
    {!! Form::label('cedula', 'Documento de indentidad:') !!}
    {!! Form::text('cedula', null, ['class' => 'form-control']) !!}
</div>

<!-- email Field -->
<div class="form-group col-sm-4">
    {!! Form::label('email', 'email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>


<!-- role  Field -->
<div class="form-group col-sm-4">
    {!! Form::label('role', 'Rol:') !!}
   {!! Form::select('role', ['administrador' => 'Administrador', 'docente' => 'Docente', 'jurado' => 'Jurado', 'coordinador' => 'Coordinador'], null, ['class' => 'form-control']) !!}
</div>

<!-- password Field -->
<div class="form-group col-sm-4">
    {!! Form::label('password', 'Contraseña:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- password_confirmation Field -->
<div class="form-group col-sm-4">
    {!! Form::label('password_confirmation', 'Confirme Contraseña:') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>

