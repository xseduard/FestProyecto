<?php foreach($proyectoInvestigacions as $proyectoInvestigacion): ?>

<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Titulo: <?php echo $proyectoInvestigacion->titulo; ?></h3>                   
        </div><!-- /.box-header -->
        <div class="box-body">
        
 

<table class="table table-responsive" id="proyectos-table">
    <th>Departamento</th>
        <th>Universidad</th>
        <th>Semillero</th>
        <th>Ponente</th>
        <th>Categoria</th>

    <tr>
            <td><?php echo $proyectoInvestigacion->Nodo->nodo; ?></td>
            <td><?php echo $proyectoInvestigacion->Universidad->universidad; ?></td>
            <td><?php echo $proyectoInvestigacion->Semillero->nombre; ?></td>
            <td><?php echo $proyectoInvestigacion->EStudiantes->nombre_completo; ?></td>
            <td>
                <?php if($proyectoInvestigacion->categoria==1): ?>
                    Propuesta de Investigación
                <?php elseif($proyectoInvestigacion->categoria==2): ?>
                    Investigación en Curso
                <?php else: ?>
                    Investigación Terminada
                <?php endif; ?>
            </td>

    </tr>
</table>

<p class="card-text">
    <div class="form-group">
    <?php echo Form::label('introduccion', 'Introduccion:'); ?>

    <p><?php echo $proyectoInvestigacion->introduccion; ?></p>
</div>
</p>
<?php echo Form::open(['route' => ['proyectoInvestigacions.destroy', $proyectoInvestigacion->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('proyectoInvestigacions.show', [$proyectoInvestigacion->id]); ?>" class='btn btn-primary'><i class="glyphicon glyphicon-eye-open"></i> Ver mas </a>
                    <a href="<?php echo route('proyectoInvestigacions.edit', [$proyectoInvestigacion->id]); ?>" class='btn btn-default'><i class="glyphicon glyphicon-edit"></i> Editar</a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i> Eliminar', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Esta seguro?')"]); ?>

                </div>
                <?php echo Form::close(); ?>


   
        </div>
      </div>
    </div>
</div>




            
<?php endforeach; ?>
    

