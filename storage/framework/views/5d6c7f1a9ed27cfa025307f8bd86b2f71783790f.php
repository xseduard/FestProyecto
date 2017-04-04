<table class="table table-responsive" id="eStudiantes-table">
    <thead>
        <th>Nombre Completo</th>
        <th>Identificacion</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($eStudiantes as $eStudiantes): ?>
        <tr>
            <td><?php echo $eStudiantes->nombre_completo; ?></td>
            <td><?php echo $eStudiantes->identificacion; ?></td>
            <td><?php echo $eStudiantes->correo; ?></td>
            <td><?php echo $eStudiantes->telefono; ?></td>
            <td>
                <?php echo Form::open(['route' => ['eStudiantes.destroy', $eStudiantes->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('eStudiantes.show', [$eStudiantes->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('eStudiantes.edit', [$eStudiantes->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>