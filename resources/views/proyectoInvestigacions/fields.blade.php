<!-- Pais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pais', 'Pais:') !!}
    {!! Form::select('pais', $array_pais, null, ['class'=>'form-control', 'required'=>'required']); !!}
</div>

<!-- Nodo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nodo', 'Nodo:') !!}
    {!! Form::select('nodo', $array_nodo, null, ['class'=>'form-control', 'required'=>'required']); !!}
</div>

<!-- Universidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('universidad', 'Universidad:') !!}
    {!! Form::select('universidad', $ar_universidad, null, ['class'=>'form-control', 'required'=>'required']); !!}
</div>

<!-- Semillero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semillero', 'Semillero:') !!}
    {!! Form::select('semillero', $ar_semillero, null, ['class'=>'form-control', 'required'=>'required']); !!}
</div>
<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nivel_formacion', 'Nivel formaciòn:') !!}
    {!! Form::select('nivel_formacion', $ar_nivel, null, ['class'=>'form-control', 'required'=>'required']); !!}
    <!-- Titulo Field -->
</div>
<div class="form-group col-sm-6">
    {!! Form::label('asignatura', 'Asignatura:') !!}
    {!! Form::select('asignatura', $ar_asignatura, null, ['class'=>'form-control', 'required'=>'required']); !!}
</div>
<!-- Ponente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ponente', 'Ponente:') !!}
    {!! Form::select('ponente', $ar_estudiante, null, ['class'=>'form-control', 'required'=>'required']); !!}
</div>
<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('area_investigacion', 'Àrea investigaciòn:') !!}
    {!! Form::select('area_investigacion', $ar_area, null, ['class'=>'form-control', 'required'=>'required']); !!}
</div>
    <!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sub_area', 'sub Àrea:') !!}
    {!! Form::select('sub_area', $ar_subarea, null, ['class'=>'form-control', 'required'=>'required']); !!}
</div>
<!-- Titulo Field -->
<div class="form-group col-sm-12">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>
<!-- Categoria Field -->

    <div class="form-group col-sm-3 radio radio-primary" style="margin-left:20px;">
          {!!  Form::radio('categoria', '1' ,true); !!}
          {!!  Form::label('categoria', 'Propuesta  de Investigación');!!} 
    </div>
    <div class="form-group col-sm-3 radio radio-primary" style="margin-top:10px;"> 
          {!!  Form::radio('categoria', '2'); !!}
          {!!  Form::label('categoria', 'Investigación en Curso');!!}
    </div>
    <div class="form-group col-sm-3 radio radio-primary" style="margin-top:10px;">      
          {!!  Form::radio('categoria', '3'); !!}
          {!!  Form::label('categoria', 'Investigación Terminada');!!}
            
    </div>




<!-- Introduccion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('introduccion', 'Introduccion:') !!}
    {!! Form::textarea('introduccion', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Problema Justificacion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('problema_justificacion', 'Problema Justificacion:') !!}
    {!! Form::textarea('problema_justificacion', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Objetivo General Field -->
<div class="form-group col-sm-6">
    {!! Form::label('objetivo_general', 'Objetivo General:') !!}
    {!! Form::text('objetivo_general', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Objetivo Especifico Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('objetivo_especifico', 'Objetivo Especifico:') !!}
    {!! Form::textarea('objetivo_especifico', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Referente Teorico Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('referente_teorico', 'Referente Teorico:') !!}
    {!! Form::textarea('referente_teorico', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Metodologia Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('metodologia', 'Metodologia:') !!}
    {!! Form::textarea('metodologia', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Conclusion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('conclusion', 'Conclusion:') !!}
    {!! Form::textarea('conclusion', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Bibliografia Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('bibliografia', 'Bibliografia:') !!}
    {!! Form::textarea('bibliografia', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>
