<table class="table table-responsive" id="subareas-table">
    <thead>
        <th>Subarea</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($subareas as $subarea): ?>
        <tr>
            <td><?php echo $subarea->subarea; ?></td>
            <td>
                <?php echo Form::open(['route' => ['subareas.destroy', $subarea->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('subareas.show', [$subarea->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('subareas.edit', [$subarea->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>