<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

</div>

<!-- Facultad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('facultad', 'Facultad:'); ?>

    <?php echo Form::text('facultad', null, ['class' => 'form-control']); ?>

</div>

<!-- Grupo De Investigacion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('grupo_de_investigacion', 'Grupo De Investigacion:'); ?>

    <?php echo Form::text('grupo_de_investigacion', null, ['class' => 'form-control']); ?>

</div>

<!-- Fecha De Creacion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fecha_de_creacion', 'Fecha De Creacion:'); ?>

    <?php echo Form::date('fecha_de_creacion', null, ['class' => 'form-control']); ?>

</div>

<!-- Docente Asesor Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('docente_asesor', 'Docente Asesor:'); ?>

    <?php echo Form::text('docente_asesor', null, ['class' => 'form-control']); ?>

</div>

<!-- Estudiante Lider Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('estudiante_lider', 'Estudiante Lider:'); ?>

    <?php echo Form::text('estudiante_lider', null, ['class' => 'form-control']); ?>

</div>

<!-- Programa Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('programa', 'Programa:'); ?>

    <?php echo Form::text('programa', null, ['class' => 'form-control']); ?>

</div>

<!-- Code Miembros Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('code_miembros', 'Code Miembros:'); ?>

    <?php echo Form::text('code_miembros', null, ['class' => 'form-control']); ?>

</div>
