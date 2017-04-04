<!-- Nombre Completo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre_completo', 'Nombre Completo:'); ?>

    <?php echo Form::text('nombre_completo', null, ['class' => 'form-control']); ?>

</div>

<!-- Identificacion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('identificacion', 'Identificacion:'); ?>

    <?php echo Form::text('identificacion', null, ['class' => 'form-control']); ?>

</div>

<!-- Correo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('correo', 'Correo:'); ?>

    <?php echo Form::email('correo', null, ['class' => 'form-control']); ?>

</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('telefono', 'Telefono:'); ?>

    <?php echo Form::text('telefono', null, ['class' => 'form-control']); ?>

</div>
