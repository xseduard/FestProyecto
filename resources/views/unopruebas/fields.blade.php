<!-- Gato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gato', 'Gato:') !!}
    {!! Form::text('gato', null, ['class' => 'form-control']) !!}
</div>

<!-- Perro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('perro', 'Perro:') !!}
    {!! Form::text('perro', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('unopruebas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
