<!-- Proyecto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('proyecto_id', 'Proyecto Id:') !!}
    {!! Form::text('proyecto_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nota Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('nota', 'Nota:') !!}
    {!! Form::textarea('nota', null, ['class' => 'form-control']) !!}
</div>
