<?php $__env->startSection('content-ppal'); ?>
        <section class="content">
            <div class="clearfix"></div>
               <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="clearfix"></div>
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h2 class="box-title">Proyectos de Investigaciòn</h2>
                   <a class="btn btn-primary pull-right" style="margin-top: 25px" href="<?php echo route('proyectoInvestigacions.create'); ?>"><i class="fa fa-plus"></i> Agregar</a>
                </div><!-- /.box-header -->
                <div class="box-body"> 
                <?php echo $__env->make('common.paginate', ['records' => $proyectoInvestigacions], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>     
                </div>
              </div>
            </div>
          </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
      <?php if($proyectoInvestigacions->isEmpty()): ?>
            <div class="well text-center">No se encontraron registros de ProyectoInvestigacions en esta consulta.</div>
        <?php else: ?>
            <?php echo $__env->make('proyectoInvestigacions.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php endif; ?>
        
             


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-right'); ?>
  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h2 class="box-title">Filtros</h2>    
                </div><!-- /.box-header -->
                <div class="box-body"> 
                   <?php echo Form::open(['route' => 'proyectoInvestigacions.index',
                   'method'=>'get']); ?>

                     
                       <?php echo $__env->make('proyectoInvestigacions.filtros', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                   <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            <?php echo Form::button('<span class="glyphicon glyphicon-search" ></span> Buscar', ['type' => 'submit', 'class' => 'btn btn-default']); ?>                            
                        </div>
                     
                  <?php echo Form::close(); ?>

                </div>
              </div>
            </div>
          </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>