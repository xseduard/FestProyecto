
<!-- Titulo Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('area_investigacion', 'Àrea investigaciòn:'); ?>

    <?php echo Form::select('area_investigacion', $ar_area, isset($camposConsulta['area_investigacion'])?$camposConsulta['area_investigacion']:null, ['class'=>'form-control']);; ?>

</div>
<div class="form-group col-sm-12">
    <?php echo Form::label('asignatura', 'Asignatura:'); ?>

    <?php echo Form::select('asignatura', $ar_asignatura, isset($camposConsulta['asignatura'])?$camposConsulta['asignatura']:null, ['class'=>'form-control']);; ?>

</div>
<!-- Nodo Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('nodo', 'Departamento:'); ?>

    <?php echo Form::select('nodo', $array_nodo, isset($camposConsulta['nodo'])?$camposConsulta['nodo']:null, ['class'=>'form-control']);; ?>

</div>


<!-- Semillero Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('semillero', 'Semillero:'); ?>

    <?php echo Form::select('semillero', $ar_semillero, isset($camposConsulta['semillero'])?$camposConsulta['semillero']:null, ['class'=>'form-control']);; ?>

</div>




    <!-- 
<div class="form-group col-sm-12">
    <?php echo Form::label('sub_area', 'sub Àrea:'); ?>

    <?php echo Form::select('sub_area', $ar_subarea, null, ['class'=>'form-control']);; ?>

</div>
Titulo Field -->