<table class="table table-responsive" id="pais-table">
    <thead>
        <th>Pais</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($pais as $pais): ?>
        <tr>
            <td><?php echo $pais->pais; ?></td>
            <td>
                <?php echo Form::open(['route' => ['pais.destroy', $pais->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('pais.show', [$pais->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('pais.edit', [$pais->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>