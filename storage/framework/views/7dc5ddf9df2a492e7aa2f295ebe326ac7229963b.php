<table class="table table-responsive" id="nivelformacions-table">
    <thead>
        <th>Nivel</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($nivelformacions as $nivelformacion): ?>
        <tr>
            <td><?php echo $nivelformacion->nivel; ?></td>
            <td>
                <?php echo Form::open(['route' => ['nivelformacions.destroy', $nivelformacion->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('nivelformacions.show', [$nivelformacion->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('nivelformacions.edit', [$nivelformacion->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>