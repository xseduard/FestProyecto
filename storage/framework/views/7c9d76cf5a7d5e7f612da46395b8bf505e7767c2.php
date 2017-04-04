
                  <table id="example2" class="table table-responsive table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Textouno</th>
                        <th>Texto Dos</th>
                        <th>Texto Tres</th>
                        <th>Numero Uno</th>
                        <th>Numero Dos</th>
                        <th>Fecha</th>
                        <th>Fecha creacíon</th>
                        <th>Fecha actualización</th>
                        <th colspan="3">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>


    <?php foreach($pruebaespecials as $pruebaespecial): ?>
        <tr>
            <td><?php echo $pruebaespecial->textouno; ?></td>
            <td><?php echo $pruebaespecial->texto_dos; ?></td>
            <td><?php echo $pruebaespecial->texto_tres; ?></td>
            <td><?php echo $pruebaespecial->numero_uno; ?></td>
            <td><?php echo $pruebaespecial->numero_dos; ?></td>
            <td><?php echo $pruebaespecial->fecha; ?></td>
            <td><?php echo $pruebaespecial->created_at; ?></td>
            <td><?php echo $pruebaespecial->updated_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['pruebaespecials.destroy', $pruebaespecial->id], 'method' => 'delete', 'id' => 'formEliminar']); ?>

                <div class='btn-group'>  
                    <a href="<?php echo route('pruebaespecials.edit', [$pruebaespecial->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'id' => 'btn-eliminar']); ?>

                      
                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>