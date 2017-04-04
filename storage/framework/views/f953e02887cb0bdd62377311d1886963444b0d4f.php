<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $docente->id; ?></p>
</div>

<!-- Formacion Field -->
<div class="form-group">
    <?php echo Form::label('formacion', 'Formacion:'); ?>

    <p><?php echo $docente->formacion; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $docente->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $docente->updated_at; ?></p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    <?php echo Form::label('deleted_at', 'Deleted At:'); ?>

    <p><?php echo $docente->deleted_at; ?></p>
</div>

<!-- Id Academico Field -->
<div class="form-group">
    <?php echo Form::label('id_academico', 'Id Academico:'); ?>

    <p><?php echo $docente->id_academico; ?></p>
</div>

