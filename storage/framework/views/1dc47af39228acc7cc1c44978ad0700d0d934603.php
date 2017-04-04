<table class="table table-responsive" id="doncencias-table">
    <thead>
        <th>Cedula</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Facultad</th>
        <th>Cargo</th>
        <th>Especialidad</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($doncencias as $doncencia): ?>
        <tr>
            <td><?php echo $doncencia->Cedula; ?></td>
            <td><?php echo $doncencia->Nombre; ?></td>
            <td><?php echo $doncencia->Apellidos; ?></td>
            <td><?php echo $doncencia->Direccion; ?></td>
            <td><?php echo $doncencia->Telefono; ?></td>
            <td><?php echo $doncencia->Facultad; ?></td>
            <td><?php echo $doncencia->Cargo; ?></td>
            <td><?php echo $doncencia->Especialidad; ?></td>
            <td>
                <?php echo Form::open(['route' => ['doncencias.destroy', $doncencia->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('doncencias.show', [$doncencia->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('doncencias.edit', [$doncencia->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>