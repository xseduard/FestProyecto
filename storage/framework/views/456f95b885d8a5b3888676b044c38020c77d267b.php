

<!-- Codigo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('codigo', 'Codigo:'); ?>

    <?php echo Form::text('codigo', null, ['class' => 'form-control']); ?>

</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

</div>

<!-- Duracion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('duracion', 'Duracion:'); ?>

    <?php echo Form::number('duracion', null, ['class' => 'form-control']); ?>

</div>


