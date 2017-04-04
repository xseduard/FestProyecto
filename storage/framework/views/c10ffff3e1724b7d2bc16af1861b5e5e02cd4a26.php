<table class="table table-responsive" id="docentes-table">
    <thead>
        <th>Formacion</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Id Academico</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($docentes as $docente): ?>
        <tr>
            <td><?php echo $docente->formacion; ?></td>
            <td><?php echo $docente->created_at; ?></td>
            <td><?php echo $docente->updated_at; ?></td>
            <td><?php echo $docente->id_academico; ?></td>
            <td>
                <?php echo Form::open(['route' => ['docentes.destroy', $docente->id], 'method' => 'delete', 'id' => 'formEliminar']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('docentes.show', [$docente->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('docentes.edit', [$docente->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'id' => 'btn-eliminar']); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>