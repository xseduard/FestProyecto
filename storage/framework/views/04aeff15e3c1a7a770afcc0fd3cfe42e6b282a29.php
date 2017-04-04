<table class="table table-responsive" id="semilleros-table">
    <thead>
        <th>Nombre</th>
        <th>Facultad</th>
        <th>Grupo De Investigacion</th>
        <th>Docente Asesor</th>
        <th>Estudiante Lider</th>
        <th>Programa</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($semilleros as $semilleros): ?>
        <tr>
            <td><?php echo $semilleros->nombre; ?></td>
            <td><?php echo $semilleros->facultad; ?></td>
            <td><?php echo $semilleros->grupo_de_investigacion; ?></td>
            <td><?php echo $semilleros->docente_asesor; ?></td>
            <td><?php echo $semilleros->estudiante_lider; ?></td>
            <td><?php echo $semilleros->programa; ?></td>
            <td>
                <?php echo Form::open(['route' => ['semilleros.destroy', $semilleros->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('semilleros.show', [$semilleros->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('semilleros.edit', [$semilleros->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>