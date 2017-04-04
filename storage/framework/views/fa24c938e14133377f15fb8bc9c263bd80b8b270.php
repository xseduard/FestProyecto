<table class="table table-responsive" id="asignaturas-table">
    <thead>
        <th>Asignatura</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($asignaturas as $asignaturas): ?>
        <tr>
            <td><?php echo $asignaturas->asignatura; ?></td>
            <td>
                <?php echo Form::open(['route' => ['asignaturas.destroy', $asignaturas->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('asignaturas.show', [$asignaturas->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('asignaturas.edit', [$asignaturas->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>