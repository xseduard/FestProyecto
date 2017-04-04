<table class="table table-responsive" id="proyectoCategorias-table">
    <thead>
        <th>Categoria</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php foreach($proyectoCategorias as $proyectoCategoria): ?>
        <tr>
            <td><?php echo $proyectoCategoria->categoria; ?></td>
            <td>
                <?php echo Form::open(['route' => ['proyectoCategorias.destroy', $proyectoCategoria->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('proyectoCategorias.show', [$proyectoCategoria->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('proyectoCategorias.edit', [$proyectoCategoria->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>