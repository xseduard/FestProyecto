<!-- Universidad Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('universidad', 'Universidad:'); ?>

    <?php echo Form::text('universidad', null, ['class' => 'form-control']); ?>

</div>

<!-- Telefonos Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('telefonos', 'Telefonos:'); ?>

    <?php echo Form::text('telefonos', null, ['class' => 'form-control']); ?>

</div>

<!-- Rector Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('rector', 'Rector:'); ?>

    <?php echo Form::text('rector', null, ['class' => 'form-control']); ?>

</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipo', 'Tipo:'); ?>

    <?php echo Form::text('tipo', null, ['class' => 'form-control']); ?>

</div>

<!-- Direccion Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('direccion', 'Direccion:'); ?>

    <?php echo Form::textarea('direccion', null, ['class' => 'form-control']); ?>

</div>
