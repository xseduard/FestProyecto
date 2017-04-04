<table class="table table-responsive" id="nodos-table">
    <thead>
        <th>Nodo</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($nodos as $nodo): ?>
        <tr>
            <td><?php echo $nodo->nodo; ?></td>
            <td>
                <?php echo Form::open(['route' => ['nodos.destroy', $nodo->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('nodos.show', [$nodo->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('nodos.edit', [$nodo->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>