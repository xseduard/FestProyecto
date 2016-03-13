<!-- Textouno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('textouno', 'Textouno:') !!}
    {!! Form::text('textouno', null, ['class' => 'form-control']) !!}
</div>

<!-- Texto Dos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('texto_dos', 'Texto Dos:') !!}
    {!! Form::text('texto_dos', null, ['class' => 'form-control']) !!}
</div>

<!-- Texto Tres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('texto_tres', 'Texto Tres:') !!}
    {!! Form::text('texto_tres', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Uno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_uno', 'Numero Uno:') !!}
    {!! Form::number('numero_uno', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Dos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_dos', 'Numero Dos:') !!}
    {!! Form::number('numero_dos', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pruebaespecials.index') !!}" class="btn btn-default">Cancel</a>
</div>
