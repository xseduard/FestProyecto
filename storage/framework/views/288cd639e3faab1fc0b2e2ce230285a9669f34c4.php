<table class="table table-responsive" id="academicos-table">
    <thead>
        <th>Cedula</th>
        <th>Nombre</th>
        <th>Sexo</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($academicos as $academico): ?>
        <tr>
            <td><?php echo $academico->cedula; ?></td>
            <td><?php echo $academico->nombre; ?></td>
            <td><?php echo $academico->sexo; ?></td>
            <td><?php echo $academico->created_at; ?></td>
            <td><?php echo $academico->updated_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['academicos.destroy', $academico->id], 'method' => 'delete', 'id' => 'formEliminar']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('academicos.show', [$academico->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('academicos.edit', [$academico->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'id' => 'btn-eliminar']); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>