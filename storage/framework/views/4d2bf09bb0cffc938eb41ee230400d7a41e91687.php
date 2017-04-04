<table class="table table-responsive" id="programas-table">
    <thead>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Duracion</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Deleted At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($programas as $programa): ?>
        <tr>
            <td><?php echo $programa->codigo; ?></td>
            <td><?php echo $programa->nombre; ?></td>
            <td><?php echo $programa->duracion; ?></td>
            <td><?php echo $programa->created_at; ?></td>
            <td><?php echo $programa->updated_at; ?></td>
            <td><?php echo $programa->deleted_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['programas.destroy', $programa->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('programas.show', [$programa->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('programas.edit', [$programa->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>