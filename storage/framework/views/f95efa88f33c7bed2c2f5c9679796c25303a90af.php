<table class="table table-responsive" id="universidades-table">
    <thead>
        <th>Universidad</th>
        <th>Telefonos</th>
        <th>Rector</th>
        <th>Tipo</th>
        <th>Direccion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($universidades as $universidades): ?>
        <tr>
            <td><?php echo $universidades->universidad; ?></td>
            <td><?php echo $universidades->telefonos; ?></td>
            <td><?php echo $universidades->rector; ?></td>
            <td><?php echo $universidades->tipo; ?></td>
            <td><?php echo $universidades->direccion; ?></td>
            <td>
                <?php echo Form::open(['route' => ['universidades.destroy', $universidades->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('universidades.show', [$universidades->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('universidades.edit', [$universidades->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>