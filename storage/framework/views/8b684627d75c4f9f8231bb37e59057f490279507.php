<!-- Pais Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('pais', 'Pais:'); ?>

    <?php echo Form::select('pais', $array_pais, null, ['class'=>'form-control', 'required'=>'required']);; ?>

</div>

<!-- Nodo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nodo', 'Nodo:'); ?>

    <?php echo Form::select('nodo', $array_nodo, null, ['class'=>'form-control', 'required'=>'required']);; ?>

</div>

<!-- Universidad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('universidad', 'Universidad:'); ?>

    <?php echo Form::select('universidad', $ar_universidad, null, ['class'=>'form-control', 'required'=>'required']);; ?>

</div>

<!-- Semillero Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('semillero', 'Semillero:'); ?>

    <?php echo Form::select('semillero', $ar_semillero, null, ['class'=>'form-control', 'required'=>'required']);; ?>

</div>
<!-- Titulo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nivel_formacion', 'Nivel formaciòn:'); ?>

    <?php echo Form::select('nivel_formacion', $ar_nivel, null, ['class'=>'form-control', 'required'=>'required']);; ?>

    <!-- Titulo Field -->
</div>
<div class="form-group col-sm-6">
    <?php echo Form::label('asignatura', 'Asignatura:'); ?>

    <?php echo Form::select('asignatura', $ar_asignatura, null, ['class'=>'form-control', 'required'=>'required']);; ?>

</div>
<!-- Ponente Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ponente', 'Ponente:'); ?>

    <?php echo Form::select('ponente', $ar_estudiante, null, ['class'=>'form-control', 'required'=>'required']);; ?>

</div>
<!-- Titulo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('area_investigacion', 'Àrea investigaciòn:'); ?>

    <?php echo Form::select('area_investigacion', $ar_area, null, ['class'=>'form-control', 'required'=>'required']);; ?>

</div>
    <!-- Titulo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('sub_area', 'sub Àrea:'); ?>

    <?php echo Form::select('sub_area', $ar_subarea, null, ['class'=>'form-control', 'required'=>'required']);; ?>

</div>
<!-- Titulo Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('titulo', 'Titulo:'); ?>

    <?php echo Form::text('titulo', null, ['class' => 'form-control', 'required' => 'required']); ?>

</div>
<!-- Categoria Field -->

    <div class="form-group col-sm-3 radio radio-primary" style="margin-left:20px;">
          <?php echo Form::radio('categoria', '1' ,true);; ?>

          <?php echo Form::label('categoria', 'Propuesta  de Investigación');; ?> 
    </div>
    <div class="form-group col-sm-3 radio radio-primary" style="margin-top:10px;"> 
          <?php echo Form::radio('categoria', '2');; ?>

          <?php echo Form::label('categoria', 'Investigación en Curso');; ?>

    </div>
    <div class="form-group col-sm-3 radio radio-primary" style="margin-top:10px;">      
          <?php echo Form::radio('categoria', '3');; ?>

          <?php echo Form::label('categoria', 'Investigación Terminada');; ?>

            
    </div>




<!-- Introduccion Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('introduccion', 'Introduccion:'); ?>

    <?php echo Form::textarea('introduccion', null, ['class' => 'form-control', 'required' => 'required']); ?>

</div>

<!-- Problema Justificacion Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('problema_justificacion', 'Problema Justificacion:'); ?>

    <?php echo Form::textarea('problema_justificacion', null, ['class' => 'form-control', 'required' => 'required']); ?>

</div>

<!-- Objetivo General Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('objetivo_general', 'Objetivo General:'); ?>

    <?php echo Form::text('objetivo_general', null, ['class' => 'form-control', 'required' => 'required']); ?>

</div>

<!-- Objetivo Especifico Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('objetivo_especifico', 'Objetivo Especifico:'); ?>

    <?php echo Form::textarea('objetivo_especifico', null, ['class' => 'form-control', 'required' => 'required']); ?>

</div>

<!-- Referente Teorico Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('referente_teorico', 'Referente Teorico:'); ?>

    <?php echo Form::textarea('referente_teorico', null, ['class' => 'form-control', 'required' => 'required']); ?>

</div>

<!-- Metodologia Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('metodologia', 'Metodologia:'); ?>

    <?php echo Form::textarea('metodologia', null, ['class' => 'form-control', 'required' => 'required']); ?>

</div>

<!-- Conclusion Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('conclusion', 'Conclusion:'); ?>

    <?php echo Form::textarea('conclusion', null, ['class' => 'form-control', 'required' => 'required']); ?>

</div>

<!-- Bibliografia Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('bibliografia', 'Bibliografia:'); ?>

    <?php echo Form::textarea('bibliografia', null, ['class' => 'form-control', 'required' => 'required']); ?>

</div>
