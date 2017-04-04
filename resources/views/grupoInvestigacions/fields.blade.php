
<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Gruplac Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gruplac', 'Gruplac:') !!}
    {!! Form::text('gruplac', null, ['class' => 'form-control']) !!}
</div>

<!-- Categoria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoria', 'Categoria:') !!}
    {!! Form::text('categoria', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Creacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_creacion', 'Fecha Creacion:') !!}
    {!! Form::date('fecha_creacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Reconocido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reconocido', 'Reconocido:') !!}
    {!! Form::text('reconocido', null, ['class' => 'form-control']) !!}
</div>


