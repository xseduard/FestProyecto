<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Modalidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modalidad', 'Modalidad:') !!}
    {!! Form::text('modalidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Area Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('area_id', 'Facultad (Área)') !!}
    {!! Form::select('area_id', $ar_area, null, ['class'=>'form-control', 'required'=>'required']); !!}
   
</div>

