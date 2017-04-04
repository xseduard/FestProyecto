<table class="table table-responsive" id="areainvestigacions-table">
    <thead>
        <th>Area</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($areainvestigacions as $areainvestigacion): ?>
        <tr>
            <td><?php echo $areainvestigacion->area; ?></td>
            <td>
                <?php echo Form::open(['route' => ['areainvestigacions.destroy', $areainvestigacion->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('areainvestigacions.show', [$areainvestigacion->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('areainvestigacions.edit', [$areainvestigacion->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>